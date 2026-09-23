# Tabs and Accordion Kit in JavaScript (Free Project)

![Tabs and Accordion Kit JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/055-tabs-accordion-kit/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/08-website-sections/055-tabs-accordion-kit/

Free accessible tabs and accordion in plain JavaScript. Correct ARIA roles, arrow key navigation, one or many panels open, smooth height animation and deep links.

## What is the Tabs and Accordion Kit?

A tabs component and an accordion that follow the official accessibility patterns. They work with a mouse, a keyboard and screen readers.

Tabs support arrow keys, Home and End, and remember the selected tab in the address bar. The accordion can allow one or many open items and animates smoothly.

## What it does

- ARIA tabs with roving tabindex
- Arrow keys, Home and End
- Deep link to a tab with the URL hash
- Accordion with one or many open mode
- Smooth height animation that respects reduced motion

## How it works

1. **Roving tabindex.** Only the selected tab is in the Tab order. Arrow keys move selection, so one Tab press takes you into the panel.
2. **Link tabs and panels.** aria-controls and aria-labelledby connect each tab to its panel, so screen readers announce them together.
3. **Animate real height.** The accordion measures scrollHeight and animates from 0 to that height with element.animate().

## The key JavaScript

```js
tabs.forEach((tab, i) => tab.onkeydown = (e) => {
  const next = { ArrowRight: i + 1, ArrowLeft: i - 1, Home: 0, End: tabs.length - 1 }[e.key];
  if (next === undefined) return;
  select(tabs[(next + tabs.length) % tabs.length]);
});
function select(tab) {
  tabs.forEach((t) => {
    const on = t === tab;
    t.setAttribute("aria-selected", on);
    t.tabIndex = on ? 0 : -1;
    document.getElementById(t.getAttribute("aria-controls")).hidden = !on;
  });
  tab.focus();
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why not use details and summary for the accordion?**

You can for simple cases. This version adds a one-at-a-time mode and smooth animation, which details cannot do on its own.

**Should tab panels be hidden or removed?**

Hidden. The content stays in the page, which is better for search engines and for find in page.

**Do tabs change the URL?**

Yes, the hash updates, so you can link straight to the Reviews tab.

## License

MIT. Free for personal and commercial use.
