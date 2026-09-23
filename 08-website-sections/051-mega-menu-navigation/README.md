# Mega Menu Navigation in JavaScript (Free Project)

![Mega Menu Navigation JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/051-mega-menu-navigation/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/051-mega-menu-navigation/

Free mega menu in plain JavaScript. Multi-column dropdowns, keyboard arrows and Escape, hover intent, and a slide-in mobile drawer. One HTML file, no library.

## What is the Mega Menu Navigation?

A full mega menu for a shop or content site. Each top item opens a wide panel with columns of links and a promo card with a photo.

It works with a mouse, a keyboard and on phones, where the menu turns into a slide-in drawer with folding sections.

## What it does

- Multi-column dropdown panels with a promo card
- Hover intent timer so menus do not flicker
- Keyboard support: arrows, Down to open, Escape to close
- Mobile drawer with folding sections
- Closes when you click outside

## How it works

1. **Buttons, not links.** Each top item is a button with aria-expanded, so screen readers announce open and closed.
2. **Hover with a delay.** A short timer stops menus flickering open when the mouse just passes over.
3. **One key map.** Arrow keys move between items, Down opens a panel and Escape closes it and returns focus.

## The key JavaScript

```js
btn.addEventListener("keydown", (e) => {
  if (e.key === "ArrowDown") { open(btn); panel.querySelector("a").focus(); }
  if (e.key === "Escape") { close(); btn.focus(); }
});
item.addEventListener("pointerenter", () => {
  clearTimeout(timer);
  timer = setTimeout(() => open(btn), 120); // hover intent
});
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Should menu items be links or buttons?**

If the item opens a panel, use a button. Links should go to a page.

**How do I stop the menu closing too fast?**

Add a short delay on pointer leave, around 250 ms, and cancel it when the pointer enters the panel.

**Is hover enough?**

No. Touch and keyboard users need click and key support too, which this project includes.

## License

MIT. Free for personal and commercial use.
