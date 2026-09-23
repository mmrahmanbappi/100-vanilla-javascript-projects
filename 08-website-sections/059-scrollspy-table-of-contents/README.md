# Scrollspy Table of Contents in JavaScript (Free Project)

![Scrollspy Table of Contents JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/059-scrollspy-table-of-contents/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/059-scrollspy-table-of-contents/

Free scrollspy table of contents in plain JavaScript. Builds the TOC from your headings, highlights the section you are reading, shows progress and scrolls smoothly.

## What is the Scrollspy Table of Contents?

A table of contents that builds itself from the headings on the page and highlights the section you are reading as you scroll.

It includes nested items, a progress bar, smooth scrolling and focus handling, and it uses no scroll listener for the highlight.

## What it does

- Automatic TOC from h3 and h4 headings
- Current section highlight with IntersectionObserver
- Nested items for sub headings
- Reading progress bar
- Smooth scroll with keyboard focus

## How it works

1. **Build from headings.** The script finds every h3 and h4, gives each a clean id and writes the list of links.
2. **Watch a reading zone.** rootMargin shrinks the viewport to its top 30 percent. The heading that enters that zone is the current section.
3. **Scroll and focus.** Clicking a link scrolls smoothly and moves keyboard focus to the heading, so screen readers follow too.

## The key JavaScript

```js
const io = new IntersectionObserver((entries) => {
  const visible = entries.filter((e) => e.isIntersecting);
  if (visible[0]) highlight(visible[0].target.id);
}, { rootMargin: "0px 0px -70% 0px" }); // top 30% of the screen

document.querySelectorAll("h2, h3").forEach((h) => {
  h.id ||= h.textContent.toLowerCase().replace(/[^a-z0-9]+/g, "-");
  io.observe(h);
});
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why IntersectionObserver instead of a scroll listener?**

The browser does the work and only tells you when something changes, which is cheaper and smoother.

**How do I change when a section counts as active?**

Change the rootMargin. -70% at the bottom means the heading must reach the top 30 percent of the screen.

**Does it work on the whole page?**

Yes. Remove the root option and it watches the browser window.

## License

MIT. Free for personal and commercial use.
