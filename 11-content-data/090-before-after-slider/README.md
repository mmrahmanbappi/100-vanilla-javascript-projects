# Before and After Slider in JavaScript (Free Project)

![Before and After Slider JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/090-before-after-slider/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/090-before-after-slider/

Free before and after image comparison slider in plain JavaScript. Drag or use the keyboard, switch to vertical, add labels and compare several photos, built on an accessible range input.

## What is the Before and After Slider?

An image comparison slider. Drag the handle across the photo to reveal the before version on one side and the after version on the other.

You can switch to a vertical split, pick three different photos and choose the before effect. Under the hood it is a real range input, so the keyboard and screen readers work.

## What it does

- Drag, click or use arrow keys
- Horizontal or vertical split
- Before and after labels
- Several photos to choose from
- Accessible range input with spoken values

## How it works

1. **Stack two images.** The before and after images sit on top of each other. clip-path: inset() hides the left part of the after image up to the handle.
2. **A real range input underneath.** An invisible range input covers the slider, so keyboard arrows, screen readers and touch all work without extra code.
3. **Drag anywhere.** Pointer events move the handle to wherever you press or drag, horizontally or vertically.

## The key JavaScript

```js
<div class="compare" style="--p:50%">
  <img src="before.jpg" alt="Before">
  <img src="after.jpg" alt="After" class="after">
  <input type="range" min="0" max="100" value="50" aria-label="Comparison position">
</div>

.after { clip-path: inset(0 0 0 var(--p)); }
range.oninput = () => box.style.setProperty("--p", range.value + "%");
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Do I need two separate images?**

For real before and after photos, yes. Take them from the same spot and crop them to the same size. The demo uses CSS filters to fake the before.

**Why use a hidden range input?**

It gives keyboard control, touch support and screen reader announcements for free.

**Can I start at a different position?**

Yes. Set the value on the range input and the --p variable, for example 30 for 30 percent.

## License

MIT. Free for personal and commercial use.
