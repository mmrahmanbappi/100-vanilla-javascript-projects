# Signals State Library in JavaScript (Free Project)

![Signals State Library JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/015-signals-state-library/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/015-signals-state-library/

Free signals library in plain JavaScript. Build signal, computed and effect in about 40 lines, the idea behind Solid, Vue and Angular, with a live shopping cart demo.

## What is the Signals State Library?

Signals are how many modern frameworks know exactly what to update when data changes. Instead of redrawing the whole page, only the numbers that depend on a change are updated. Solid, Preact, Vue and Angular all use this idea.

This project writes a complete signals library in about 40 lines, then uses it to run a shopping cart. A counter next to each effect shows how many times it ran, so you can see that only the right parts update.

## What it does

- signal(), computed() and effect() with automatic dependency tracking
- Batched updates so effects run once per change
- Live counter of how many times each effect ran
- Shopping cart demo: quantities, discount code, totals
- The whole library source shown on the page

## How it works

1. **Track reads.** When an effect runs, every signal it reads adds that effect to its subscriber list.
2. **Notify on write.** Setting a signal schedules each subscriber once, in a microtask, so many writes cause one update.
3. **Derive values.** computed() is an effect that writes into its own signal, so it caches and updates only when its inputs change.

## The key JavaScript

```js
let current = null;
export function signal(value) {
  const subs = new Set();
  const read = () => { if (current) subs.add(current); return value; };
  read.set = (v) => { if (v !== value) { value = v; subs.forEach(schedule); } };
  return read;
}
export function effect(fn) {
  const run = () => { const prev = current; current = run; try { fn(); } finally { current = prev; } };
  run();
}
export function computed(fn) {
  const s = signal(); effect(() => s.set(fn())); return s;
}
```

## Browser support

Every modern browser.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is a signal in JavaScript?**

A signal is a value that remembers who reads it. When you change it, everything that read it runs again. computed() builds values from other signals, and effect() runs code when they change.

**Are signals coming to JavaScript itself?**

There is a TC39 proposal to add signals to the language. Until then, small libraries like this one, or Preact Signals, give you the same idea.

**Is this fast enough for real apps?**

For small and medium apps, yes. Updates are batched in a microtask, so ten writes in a row cause one update.

## License

MIT. Free for personal and commercial use.
