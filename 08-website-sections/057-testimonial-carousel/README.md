# Testimonial Carousel in JavaScript (Free Project)

![Testimonial Carousel JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/057-testimonial-carousel/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/057-testimonial-carousel/

Free testimonial carousel in plain JavaScript. Shows one, two or three review cards depending on space, with star ratings, autoplay progress, pause on hover and dots.

## What is the Testimonial Carousel?

A customer review carousel with photos, names, star ratings and quotes. It shows three cards on wide screens, two on tablets and one on phones.

You can swipe, scroll, use the arrows or dots. Autoplay moves on every six seconds with a small progress ring, and stops when you interact.

## What it does

- 1, 2 or 3 cards based on available width
- Native scroll snap for smooth swiping
- Star ratings with screen reader labels
- Autoplay progress ring with a Pause button
- Dots that follow manual scrolling

## How it works

1. **Let CSS do the scrolling.** The rail uses scroll snap, so swiping on a phone lands neatly on a card with no custom touch code.
2. **Measure the space.** ResizeObserver watches the rail. Wide shows 3 cards, medium 2 and narrow 1, and the dots update to match.
3. **Autoplay with a ring.** A progress ring shows time to the next page. It pauses on hover, focus, the Pause button and reduced motion.

## The key JavaScript

```js
.rail { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; }
.card { flex: 0 0 var(--w); scroll-snap-align: start; }

new ResizeObserver(() => {
  const w = rail.clientWidth;
  perView = w > 900 ? 3 : w > 560 ? 2 : 1;
  rail.style.setProperty("--w", `calc((100% - ${(perView - 1) * 16}px) / ${perView})`);
}).observe(rail);
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why use ResizeObserver instead of media queries?**

The carousel responds to its own width, so it works in a sidebar, a full-width band or a narrow column.

**Can I show real reviews?**

Yes. Replace the array with reviews from your database or a review platform export.

**Is it accessible?**

Stars have text labels, controls have names and autoplay pauses on focus and for reduced motion.

## License

MIT. Free for personal and commercial use.
