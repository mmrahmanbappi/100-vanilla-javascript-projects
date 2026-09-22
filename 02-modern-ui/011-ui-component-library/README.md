# UI Component Library in JavaScript (Free Project)

![UI Component Library JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/011-ui-component-library/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/02-modern-ui/011-ui-component-library/

Free UI component library in plain JavaScript. Six Web Components with Shadow DOM: button, toggle, tabs, rating, progress ring and accordion. Works with any framework.

## What is the UI Component Library?

Web Components let you make your own HTML tags, like <ui-toggle> or <ui-rating>, that work in any page and any framework. This project builds six of them: a button, a toggle switch, tabs, a star rating, a progress ring and an accordion.

Each component is a JavaScript class that keeps its markup and styles inside a Shadow DOM, so nothing leaks in or out. They react when you change an attribute and fire normal events, which is why the same tag works in React, Vue or plain HTML.

## What it does

- ui-button, ui-toggle, ui-tabs, ui-rating, ui-progress and ui-accordion
- Every component reacts to attribute changes
- Custom events you can listen to from any framework
- Theme with CSS custom properties that pierce the shadow root
- Keyboard and screen reader friendly

## How it works

1. **Define a class.** Each component extends HTMLElement and builds its markup inside an open shadow root.
2. **Watch attributes.** observedAttributes lists what to watch, and attributeChangedCallback re-renders when one changes.
3. **Talk to the page.** Components fire CustomEvents such as change, so any framework can listen with a normal event listener.

## The key JavaScript

```js
class UiToggle extends HTMLElement {
  static observedAttributes = ["checked", "label"];
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }
  attributeChangedCallback() { this.render(); }
  toggle() {
    this.toggleAttribute("checked");
    this.dispatchEvent(new CustomEvent("change", { detail: this.hasAttribute("checked") }));
  }
  render() { /* build markup inside this.shadowRoot */ }
}
customElements.define("ui-toggle", UiToggle);
```

## Browser support

Every modern browser. Custom Elements and Shadow DOM have been supported everywhere since 2020.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Can I use Web Components in React?**

Yes. They are real HTML elements, so React can render them. Pass values as attributes and listen to their events with a ref or the onChange style props in React 19.

**Do Web Components work in all browsers?**

Yes. Custom Elements and Shadow DOM have worked in Chrome, Edge, Firefox and Safari since 2020. No polyfill is needed.

**How do I style a component from outside?**

Use CSS custom properties, like --ui-accent in this project. They pass through the Shadow DOM, so you can theme every component from one place.

## License

MIT. Free for personal and commercial use.
