# AI Text Summarizer in JavaScript (Free Project)

![AI Text Summarizer JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/004-ai-text-summarizer/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/01-ai-in-the-browser/004-ai-text-summarizer/

Free AI text summarizer in plain JavaScript. Paste any article and get key points, a TL;DR or a headline using Chrome built-in AI, with a smart fallback for other browsers.

## What is the AI Text Summarizer?

Paste a long article, report or email thread and this tool gives you the short version: a few key points, a one line summary, a teaser or a headline. You choose the style and the length.

In Chrome it uses the new built-in Summarizer API, which runs Google's Gemini Nano model on your own computer. Other browsers get a fallback that scores each sentence and keeps the most important ones, so the tool works everywhere.

## What it does

- Four summary types: key points, TL;DR, teaser and headline
- Short, medium or long output
- Uses Gemini Nano when Chrome has it, a local ranking method otherwise
- Word count before and after, with the reduction percentage
- Copy the summary with one click

## How it works

1. **Check availability.** The page calls Summarizer.availability() to see if Gemini Nano is ready, downloadable or missing.
2. **Create a summarizer.** It creates one with your type, length and format, showing progress if Chrome needs to download the model.
3. **Fall back when needed.** Without the API, sentences are scored by how many important words they share and the best ones are kept in order.

## The key JavaScript

```js
// Feature-detect, then check if the on-device model is ready
if ("Summarizer" in self) {
  const state = await Summarizer.availability(); // "available", "downloadable", ...

  const summarizer = await Summarizer.create({
    type: "key-points", length: "medium", format: "markdown",
    monitor(m) {
      m.addEventListener("downloadprogress", (e) => console.log(e.loaded));
    },
  });

  const summary = await summarizer.summarize(longText);
}
```

## Browser support

Built-in AI: Chrome 138 or newer on Windows, macOS, Linux or ChromeOS with about 22 GB of free disk space. Fallback: every modern browser.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**What is the Chrome Summarizer API?**

It is a new JavaScript API in Chrome 138 and later. It gives web pages a summarizer backed by Gemini Nano, a small model that Chrome downloads once and runs on your device.

**Is it free to use?**

Yes. There is no API key and no cost per request, because the model runs on the user's computer, not on a server.

**What happens in browsers without built-in AI?**

The page switches to a local method that ranks sentences by how many important words they share with the rest of the text. It is less fluent but fast and private.

## License

MIT. Free for personal and commercial use.
