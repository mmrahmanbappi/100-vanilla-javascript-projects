;; Image filters on RGBA pixels in linear memory. Pixels start at offset 0.
(module
  (memory (export "memory") 1)

  ;; grayscale: luma = (77 R + 150 G + 29 B) >> 8
  (func (export "grayscale") (param $len i32)
    (local $i i32) (local $y i32)
    (block $done (loop $next
      (br_if $done (i32.ge_u (local.get $i) (local.get $len)))
      (local.set $y (i32.shr_u (i32.add (i32.add
        (i32.mul (i32.load8_u (local.get $i)) (i32.const 77))
        (i32.mul (i32.load8_u offset=1 (local.get $i)) (i32.const 150)))
        (i32.mul (i32.load8_u offset=2 (local.get $i)) (i32.const 29))) (i32.const 8)))
      (i32.store8 (local.get $i) (local.get $y))
      (i32.store8 offset=1 (local.get $i) (local.get $y))
      (i32.store8 offset=2 (local.get $i) (local.get $y))
      (local.set $i (i32.add (local.get $i) (i32.const 4)))
      (br $next))))

  ;; invert: 255 - value for R, G, B
  (func (export "invert") (param $len i32)
    (local $i i32)
    (block $done (loop $next
      (br_if $done (i32.ge_u (local.get $i) (local.get $len)))
      (i32.store8 (local.get $i) (i32.sub (i32.const 255) (i32.load8_u (local.get $i))))
      (i32.store8 offset=1 (local.get $i) (i32.sub (i32.const 255) (i32.load8_u offset=1 (local.get $i))))
      (i32.store8 offset=2 (local.get $i) (i32.sub (i32.const 255) (i32.load8_u offset=2 (local.get $i))))
      (local.set $i (i32.add (local.get $i) (i32.const 4)))
      (br $next))))

  ;; clamp a value to 0..255
  (func $clamp (param $v i32) (result i32)
    (select (i32.const 0)
      (select (i32.const 255) (local.get $v) (i32.gt_s (local.get $v) (i32.const 255)))
      (i32.lt_s (local.get $v) (i32.const 0))))

  ;; brightness and contrast: v = ((v - 128) * contrast >> 8) + 128 + amount
  (func (export "adjust") (param $len i32) (param $amount i32) (param $contrast i32)
    (local $i i32) (local $c i32) (local $end i32)
    (block $done (loop $next
      (br_if $done (i32.ge_u (local.get $i) (local.get $len)))
      (local.set $c (i32.const 0))
      (block $cd (loop $ch
        (br_if $cd (i32.ge_u (local.get $c) (i32.const 3)))
        (local.set $end (i32.add (local.get $i) (local.get $c)))
        (i32.store8 (local.get $end) (call $clamp (i32.add (i32.add
          (i32.shr_s (i32.mul (i32.sub (i32.load8_u (local.get $end)) (i32.const 128)) (local.get $contrast)) (i32.const 8))
          (i32.const 128)) (local.get $amount))))
        (local.set $c (i32.add (local.get $c) (i32.const 1)))
        (br $ch)))
      (local.set $i (i32.add (local.get $i) (i32.const 4)))
      (br $next))))

  ;; sepia tone
  (func (export "sepia") (param $len i32)
    (local $i i32) (local $r i32) (local $g i32) (local $b i32)
    (block $done (loop $next
      (br_if $done (i32.ge_u (local.get $i) (local.get $len)))
      (local.set $r (i32.load8_u (local.get $i)))
      (local.set $g (i32.load8_u offset=1 (local.get $i)))
      (local.set $b (i32.load8_u offset=2 (local.get $i)))
      (i32.store8 (local.get $i) (call $clamp (i32.shr_u (i32.add (i32.add (i32.mul (local.get $r) (i32.const 101)) (i32.mul (local.get $g) (i32.const 197))) (i32.mul (local.get $b) (i32.const 48))) (i32.const 8))))
      (i32.store8 offset=1 (local.get $i) (call $clamp (i32.shr_u (i32.add (i32.add (i32.mul (local.get $r) (i32.const 89)) (i32.mul (local.get $g) (i32.const 176))) (i32.mul (local.get $b) (i32.const 43))) (i32.const 8))))
      (i32.store8 offset=2 (local.get $i) (call $clamp (i32.shr_u (i32.add (i32.add (i32.mul (local.get $r) (i32.const 70)) (i32.mul (local.get $g) (i32.const 137))) (i32.mul (local.get $b) (i32.const 34))) (i32.const 8))))
      (local.set $i (i32.add (local.get $i) (i32.const 4)))
      (br $next))))
)

