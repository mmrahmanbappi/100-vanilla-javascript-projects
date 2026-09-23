# Local Markdown Editor in JavaScript (Free Project)

![Local Markdown Editor JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/03-pwa-and-offline/024-markdown-editor/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/03-pwa-and-offline/024-markdown-editor/

Free Markdown editor in plain JavaScript. Open and save real .md files with the File System Access API, see a live preview, and keep drafts. Includes a small parser.

## What is the Local Markdown Editor?

Open a .md file from your computer, edit it with a live preview next to it, and press Ctrl S to save straight back to the same file. It feels like a desktop app, but it is a single web page.

Saving uses the File System Access API, which gives the page a handle to a real file after you pick it. The preview comes from a small Markdown parser in the project that escapes HTML first for safety.

## What it does

- Open, Save and Save as, straight to files on your disk
- Ctrl+S saves to the same file after the first save
- Live preview with headings, lists, links, images, code, quotes and tables
- Draft autosave in the browser
- Word count and reading time

## How it works

1. **Get a file handle.** The picker returns a handle to the real file. The page keeps it so later saves need no dialog.
2. **Render as you type.** Each keystroke runs the parser, which escapes HTML first and then adds Markdown formatting.
3. **Write back.** handle.createWritable() streams the new text into the same file on disk.

## The key JavaScript

```js
// Open a real file and keep its handle
const [handle] = await showOpenFilePicker({
  types: [{ description: "Markdown", accept: { "text/markdown": [".md"] } }],
});
editor.value = await (await handle.getFile()).text();

// Later: save back to the same file, no dialog
const writable = await handle.createWritable();
await writable.write(editor.value);
await writable.close();
```

## Browser support

Direct file saving: Chrome and Edge on desktop. Other browsers download a copy instead.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the File System Access API?**

It lets a web page open and save files on your computer after you pick them, so you can edit a file in place instead of downloading copies.

**Which browsers can save files directly?**

Chrome and Edge on desktop. In other browsers Save downloads a copy of the file instead.

**Which Markdown features are supported?**

Headings, bold, italic, links, images, lists, quotes, code blocks, tables and horizontal lines. That covers most READMEs and notes.

## License

MIT. Free for personal and commercial use.
