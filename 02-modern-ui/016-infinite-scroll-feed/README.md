# Infinite Scroll Feed in JavaScript (Free Project)

![Infinite Scroll Feed JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/016-infinite-scroll-feed/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/016-infinite-scroll-feed/

Free infinite scroll feed in plain JavaScript. Load posts as you scroll, lazy load images and track seen posts with Intersection Observer. Skeleton loaders included.

## What is the Infinite Scroll Feed?

This is a social style photo feed that keeps loading new posts as you scroll down. Images load only when they are about to appear, placeholder cards show while posts load, and a counter tracks which posts you actually saw.

All three tricks use the Intersection Observer API, which tells you when an element enters the screen without constant scroll checks. It is faster and simpler than the old scroll event approach.

## What it does

- Loads the next page when a sentinel nears the viewport
- Skeleton cards while loading
- Images lazy load with a fade in
- Seen counter: a post counts once it is 60% visible
- Back to top button that appears after the first screen

## How it works

1. **Watch a sentinel.** An empty element sits under the last post. When it gets within 600 px of the screen, the next page loads.
2. **Lazy load images.** A second observer swaps data-src into src only when an image is about to be seen.
3. **Track views.** A third observer with threshold 0.6 marks each post as seen the first time most of it is visible.

## The key JavaScript

```js
const loadMore = new IntersectionObserver(([entry]) => {
  if (entry.isIntersecting) fetchNextPage();
}, { rootMargin: "600px" });           // start 600px before the end
loadMore.observe(document.querySelector("#sentinel"));

const lazy = new IntersectionObserver((entries) => {
  for (const e of entries) if (e.isIntersecting) {
    e.target.src = e.target.dataset.src;  // swap in the real image
    lazy.unobserve(e.target);
  }
}, { rootMargin: "300px" });
```

## Browser support

Every modern browser.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Is infinite scroll bad for SEO?**

It can be if content only loads on scroll. Give each page of results its own URL too, so search engines can reach every item.

**Why use Intersection Observer instead of the scroll event?**

The scroll event fires many times a second and forces layout checks. Intersection Observer only tells you when something crosses into view, so it is much lighter.

**How do I connect it to a real API?**

Replace the fakeApi function with a fetch call that takes a page number and returns posts. The rest of the code stays the same.

## License

MIT. Free for personal and commercial use.
