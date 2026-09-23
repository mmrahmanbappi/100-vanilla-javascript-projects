# Touch Image Slider in JavaScript (Free Project)

![Touch Image Slider JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/053-touch-image-slider/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/053-touch-image-slider/

Free image slider in plain JavaScript. Swipe on touch screens, drag with a mouse, autoplay that pauses on hover, dots, arrows and keyboard control. No library needed.

## What is the Touch Image Slider?

A photo slider with big images and captions. Swipe it on a phone, drag it with a mouse, or use arrows, dots and the keyboard.

Autoplay moves to the next photo on a timer, pauses when you hover or tab into it, and switches off for people who prefer less motion.

## What it does

- Swipe and drag with pointer events
- Arrows, dots and keyboard arrows
- Autoplay with a progress line, paused on hover and focus
- Loop on or off
- Respects reduced motion settings

## How it works

1. **Move the whole track.** All slides sit in one row. Showing slide n just means moving the row by n times 100 percent.
2. **Follow the finger.** Pointer events work for touch, pen and mouse. While dragging, the track follows the finger with no transition.
3. **Decide on release.** If the drag was more than 15 percent of the width, go to the next slide. Otherwise snap back.

## The key JavaScript

```js
slider.addEventListener("pointerdown", (e) => { startX = e.clientX; track.classList.add("drag"); });
slider.addEventListener("pointermove", (e) => {
  if (startX == null) return;
  dx = e.clientX - startX;
  track.style.transform = `translateX(calc(${-index * 100}% + ${dx}px))`;
});
slider.addEventListener("pointerup", () => {
  track.classList.remove("drag");
  go(Math.abs(dx) > width * 0.15 ? index + (dx < 0 ? 1 : -1) : index);
  startX = null;
});
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Do I need a slider library?**

Not for most sites. This whole slider is about 40 lines of JavaScript.

**Is autoplay bad for accessibility?**

It can be. This slider pauses on hover and focus and turns autoplay off when the user asks for reduced motion.

**How do I add more slides?**

Add another item to the list at the top of the script. Dots and counts update by themselves.

## License

MIT. Free for personal and commercial use.
