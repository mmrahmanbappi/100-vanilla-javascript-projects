# Blur-up Lazy Images in JavaScript (Free Project)

![Blur-up Lazy Images JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/084-blur-up-lazy-images/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/11-content-data/084-blur-up-lazy-images/

Free blur-up lazy image loading in plain JavaScript. Tiny blurred placeholders, full images loaded only when they scroll into view, fixed aspect ratios so nothing jumps, and live load stats.

## What is the Blur-up Lazy Images?

A gallery of 15 photos where each tile first shows a tiny blurred version and loads the real photo only when it is about to scroll into view.

Counters show how many full images have loaded and how much data was saved. You can compare with the browser's native lazy loading and pretend to be on a slow connection.

## What it does

- Blur-up placeholders from a 20 pixel image
- IntersectionObserver with a 200 pixel head start
- Fixed aspect ratios to prevent layout shift
- Live stats for loaded and saved data
- Native lazy loading comparison and slow mode

## How it works

1. **Start with a tiny image.** Each tile gets a 20 pixel wide version of the photo as a background, blurred. It is about 1 KB and shows the colours straight away.
2. **Load when nearly visible.** IntersectionObserver fires when a tile comes within 200 pixels of the view. Only then is the full image requested.
3. **Reserve the space.** Every tile has a fixed 3 by 2 aspect ratio, so the page never jumps as images arrive. That keeps layout shift scores low.

## The key JavaScript

```js
const io = new IntersectionObserver((entries) => {
  for (const e of entries) {
    if (!e.isIntersecting) continue;
    io.unobserve(e.target);
    const img = e.target.querySelector("img");
    img.src = img.dataset.src;                      // full image
    img.onload = () => e.target.classList.add("done"); // fade in over blur
  }
}, { rootMargin: "200px" });
tiles.forEach((t) => io.observe(t));
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why not only use loading="lazy"?**

Native lazy loading is great and simpler. Blur-up adds a nicer visual while waiting and gives you control over when loading starts.

**How do I make the tiny placeholders?**

Most image services can resize on the fly, like ?w=20. You can also inline a tiny base64 image in the HTML.

**Does lazy loading hurt SEO?**

No, as long as the images are real img elements with alt text. Search engines load them when they render the page.

## License

MIT. Free for personal and commercial use.
