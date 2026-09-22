# Popovers Without Libraries in JavaScript (Free Project)

![Popovers Without Libraries JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/014-popover-anchor-ui/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/014-popover-anchor-ui/

Free popover examples in plain HTML, CSS and JavaScript. Dropdown menu, tooltips, toasts and a side sheet using the Popover API and CSS anchor positioning.

## What is the Popovers Without Libraries?

Dropdowns, tooltips and toasts are on almost every site, and they used to need a positioning library. The new popover attribute handles showing, hiding, the Esc key and clicks outside. CSS anchor positioning places the popup right next to its button.

This project shows four common patterns built that way, with only a little JavaScript for the parts that need it. Browsers without anchor positioning get a tiny script that places things by hand.

## What it does

- Dropdown menu that flips when it hits the screen edge
- Hover and focus tooltips
- Toast notifications that stack and dismiss themselves
- Side sheet with light dismiss (click outside or Esc)
- JavaScript fallback placement when CSS anchors are missing

## How it works

1. **Mark it as a popover.** Add popover to any element. It starts hidden and appears in the top layer, above everything, when opened.
2. **Connect a button.** popovertarget on a button opens and closes it, with Esc and outside clicks handled by the browser.
3. **Anchor it.** anchor-name on the button and position-anchor on the popover place it right next to the button, flipping if needed.

## The key JavaScript

```js
<!-- Opens and closes with no JavaScript -->
<button id="menuBtn" popovertarget="menu">Options</button>
<div id="menu" popover>…</div>

<style>
  #menuBtn { anchor-name: --menu; }
  #menu {
    position-anchor: --menu;
    position-area: bottom span-right;          /* below, aligned left */
    position-try-fallbacks: flip-block;        /* flip up near the bottom edge */
  }
</style>
```

## Browser support

Popover: every modern browser. CSS anchor positioning: Chrome and Edge 125+, Safari 26+. Others get a small JavaScript fallback.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the Popover API?**

It is an HTML attribute, popover, that turns any element into a popup shown in the top layer. A button with popovertarget opens and closes it, with no JavaScript needed.

**What is CSS anchor positioning?**

It lets you tie one element's position to another, like a menu to its button, in pure CSS. It can also flip the menu when it would go off screen.

**Which browsers support it?**

Popover works in every modern browser. Anchor positioning is in Chrome, Edge and Safari 26. The project falls back to JavaScript placement elsewhere.

## License

MIT. Free for personal and commercial use.
