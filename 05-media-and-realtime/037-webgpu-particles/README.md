# WebGPU Particle Playground in JavaScript (Free Project)

![WebGPU Particle Playground JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/037-webgpu-particles/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/037-webgpu-particles/

Free WebGPU particle simulation in plain JavaScript. Move up to 1,000,000 particles with a compute shader and your mouse, with gravity and color controls and a fallback.

## What is the WebGPU Particle Playground?

Move your mouse over the canvas and a cloud of glowing particles follows it. With WebGPU you can push up to a million of them, and your graphics card moves every one each frame.

A compute shader written in WGSL updates each particle's position and speed. A render pass reads the same buffer and draws the particles with additive blending. Browsers without WebGPU get a smaller Canvas 2D version.

## What it does

- Up to 1,000,000 particles on WebGPU, 20,000 on the fallback
- Mouse or touch attraction, hold Shift or right click to push away
- Gravity, particle size and color controls
- Live frames per second and particle count
- Burst button to throw particles from the center

## How it works

1. **Fill a buffer.** Each particle is 4 floats: position and velocity. They all live in one GPU storage buffer.
2. **Simulate on the GPU.** A compute shader runs once per particle, in groups of 64, adding gravity and the pull toward the pointer.
3. **Draw.** The render pass reads the same buffer and draws a small glowing quad per particle, colored by speed.

## The key JavaScript

```js
@compute @workgroup_size(64)
fn simulate(@builtin(global_invocation_id) id: vec3u) {
  let i = id.x;
  if (i >= u.count) { return; }
  var p = particles[i];
  let d = u.mouse - p.pos;
  p.vel += normalize(d) * u.pull / (dot(d, d) + 0.05) * u.dt;  // pull to pointer
  p.vel.y -= u.gravity * u.dt;
  p.vel *= 0.995;
  p.pos += p.vel * u.dt;
  particles[i] = p;
}
```

## Browser support

WebGPU: Chrome and Edge 113+, Safari 26+, Firefox 141+ on Windows. Other browsers get the Canvas 2D version.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is WebGPU?**

It is the modern graphics and compute API for the web. It is faster and more flexible than WebGL, and it can run general math on the GPU.

**What is a compute shader?**

A small program that runs on the GPU for many items at once, here once per particle, in groups of 64.

**Which browsers support WebGPU?**

Chrome and Edge 113 and newer, Safari 26, and Firefox 141 on Windows. Others get the Canvas 2D fallback.

## License

MIT. Free for personal and commercial use.
