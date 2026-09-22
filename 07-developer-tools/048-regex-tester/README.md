# Regex Tester in JavaScript (Free Project)

![Regex Tester JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/07-developer-tools/048-regex-tester/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/07-developer-tools/048-regex-tester/

Free regex tester in plain JavaScript. See matches highlighted live, groups in a table, flags as toggles, a replace preview, a plain English explanation and common patterns.

## What is the Regex Tester?

Type a pattern and every match lights up in your text. Capture groups and named groups fill a table, the replace box shows the result, and a plain English list explains what each part of the pattern means.

Matching runs in a Web Worker with a one second limit, so a runaway pattern stops instead of freezing the page. There is a cheat sheet and ten ready patterns for emails, URLs, dates, phones and more.

## What it does

- Live highlight of every match, with alternating colors
- Table of matches with index, capture groups and named groups
- Flag toggles, including d for match indices and v for sets
- Replace preview with $1, $<name> and $& support
- Plain-English explanation, cheat sheet and 10 common patterns

## How it works

1. **Build the RegExp.** The pattern and flags make a new RegExp. A syntax error is shown instead of crashing.
2. **Find matches safely.** matchAll runs inside a Worker. If a pattern takes more than a second, the worker is stopped so the page never hangs.
3. **Show results.** Match positions become highlighted spans. Groups fill the table and the replace preview runs on the same text.

## The key JavaScript

```js
const re = new RegExp(pattern, "gd");            // d = give match indices
for (const m of text.matchAll(re)) {
  console.log(m[0], m.index, m.groups);           // full match, where, named groups
  console.log(m.indices[1]);                      // start and end of group 1
}
// Stop runaway patterns like /(a+)+$/ from freezing the page
const w = new Worker(url); w.postMessage({ pattern, flags, text });
const t = setTimeout(() => { w.terminate(); showError("Too slow, stopped"); }, 1000);
```

## Browser support

Every modern browser. The v flag needs Chrome 112+, Safari 17+ or Firefox 116+.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Which regex engine does it use?**

Your browser's JavaScript RegExp, so what works here works in your JavaScript code.

**What is catastrophic backtracking?**

Some patterns, like (a+)+$, take exponential time on certain text. The tester stops those after one second.

**How do named groups work?**

Write (?<year>\d{4}) and the match has groups.year. Use $<year> in the replace box to reuse it.

## License

MIT. Free for personal and commercial use.
