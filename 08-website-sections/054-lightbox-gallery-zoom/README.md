# Lightbox Gallery with Zoom in JavaScript (Free Project)

![Lightbox Gallery with Zoom JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/054-lightbox-gallery-zoom/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/054-lightbox-gallery-zoom/

Free lightbox gallery in plain JavaScript. Click a photo to open a full screen viewer with zoom, pan, arrow keys, swipe, captions and a counter. Built on the native dialog element.

## What is the Lightbox Gallery with Zoom?

A photo grid where any image opens in a full screen viewer. You can zoom in up to five times, drag around the zoomed photo and move between photos.

It uses the built in dialog element, so keyboard focus, Escape to close and returning focus to the photo you clicked all work without extra code.

## What it does

- Masonry style grid with a large first photo
- Native dialog viewer with focus handling
- Zoom with buttons, mouse wheel, double click and keys
- Drag to pan when zoomed, swipe to change photo
- Captions, counter and preloading of the next photo

## How it works

1. **Use the native dialog.** showModal() gives a real modal: focus is trapped, the page behind is inert and Escape closes it for free.
2. **Zoom with transform.** Zoom and pan are one CSS transform, translate then scale, so it stays sharp and fast.
3. **Swipe when not zoomed.** When the photo is at 100 percent a horizontal drag changes photo. When zoomed, dragging pans instead.

## The key JavaScript

```js
grid.onclick = (e) => {
  const btn = e.target.closest("button");
  show(+btn.dataset.i);
  dialog.showModal(); // focus trap + Escape for free
};
view.addEventListener("wheel", (e) => {
  e.preventDefault();
  zoom = Math.min(5, Math.max(1, zoom * (e.deltaY < 0 ? 1.15 : 0.87)));
  img.style.transform = `translate(${x}px,${y}px) scale(${zoom})`;
}, { passive: false });
```

## Browser support

Works in all modern browsers. The dialog element is supported in Chrome, Edge, Firefox and Safari 15.4+.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why use the dialog element?**

It handles the hard parts of a modal for you: focus trapping, Escape to close and making the page behind inert.

**Does it load full size photos up front?**

No. Thumbnails load in the grid, and the large version loads only when you open a photo. The next one is preloaded.

**Can I pinch to zoom on phones?**

This version uses buttons and double tap to zoom on phones. You can add pinch by tracking two pointers.

## License

MIT. Free for personal and commercial use.
