# Online Code Playground in JavaScript (Free Project)

![Online Code Playground JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/040-code-playground/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/05-media-and-realtime/040-code-playground/

Free online code playground in plain JavaScript. HTML, CSS and JS editors, a live sandboxed preview, a working console, templates and share links stored in the URL.

## What is the Online Code Playground?

Type HTML, CSS and JavaScript and see the result as you type. Console logs and errors show under the preview, and one click makes a link that holds the whole project.

The code runs in a sandboxed iframe using srcdoc, so it cannot touch this page. A small bridge script forwards console calls with postMessage. Share links gzip the project with CompressionStream and put it after the #.

## What it does

- Three editors with tab indent and line numbers
- Live preview that updates as you type, or on Ctrl+Enter
- Console panel that shows logs, warnings and errors from the preview
- Starter templates: counter, canvas animation, fetch demo
- Share link: the project is gzipped and stored in the URL hash

## How it works

1. **Build the page.** The three editors are joined into one HTML document with a small console bridge script at the top.
2. **Run it safely.** The document goes into an iframe with sandbox="allow-scripts", so it cannot touch this page, its storage or cookies.
3. **Share.** The project JSON is gzipped with CompressionStream, base64url encoded and placed after the # in the link.

## The key JavaScript

```js
const bridge = `<script>
  for (const k of ["log", "warn", "error", "info"]) {
    const orig = console[k];
    console[k] = (...a) => { parent.postMessage({ k, a: a.map(String) }, "*"); orig(...a); };
  }
  onerror = (m, s, line) => parent.postMessage({ k: "error", a: [m + " (line " + line + ")"] }, "*");
<\/script>`;
iframe.srcdoc = bridge + html + `<style>${css}</style><script>${js}<\/script>`;
addEventListener("message", (e) => { if (e.source === iframe.contentWindow) showInConsole(e.data); });
```

## Browser support

Every modern browser. CompressionStream share links need Chrome 80+, Safari 16.4+ or Firefox 113+.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Is running code in an iframe safe?**

With sandbox set to allow-scripts only, the code cannot reach this page, its cookies or its storage.

**Where is my code saved?**

In localStorage, and in the share link itself. No server stores anything.

**How long can a share link be?**

Browsers handle very long URLs, and gzip keeps small projects to a few hundred characters.

## License

MIT. Free for personal and commercial use.
