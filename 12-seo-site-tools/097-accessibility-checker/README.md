# Accessibility Checker in JavaScript (Free Project)

![Accessibility Checker JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/097-accessibility-checker/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/097-accessibility-checker/

Free accessibility checker in plain JavaScript. Scan a sample page or paste your HTML to find missing alt text, low colour contrast, skipped headings, unlabeled fields and vague links.

## What is the Accessibility Checker?

An accessibility checker that scans a sample café page, or HTML you paste in, for common problems: missing alt text and language, skipped headings, fields without labels, empty buttons, vague links and low contrast.

Each issue gets a severity, a short fix and a button that highlights the element in the page. A simple score shows how much work is left.

## What it does

- Missing alt text and page language
- Heading order and single h1
- Labels for form fields
- Button and link names, vague link text
- WCAG contrast ratio for every text element

## How it works

1. **Load the page in a frame.** The sample or your pasted HTML goes into an iframe with srcdoc, so its styles are real and can be measured.
2. **Run simple rules.** The script looks for missing lang and alt, skipped headings, unlabeled fields, empty buttons and vague link text.
3. **Measure real contrast.** For every piece of text it reads the computed colours, walks up to find the background and works out the WCAG contrast ratio.

## The key JavaScript

```js
function luminance([r, g, b]) {
  return [r, g, b].map((v) => { v /= 255; return v <= 0.03928 ? v / 12.92 : ((v + 0.055) / 1.055) ** 2.4; })
    .reduce((s, v, i) => s + v * [0.2126, 0.7152, 0.0722][i], 0);
}
const ratio = (Math.max(L1, L2) + 0.05) / (Math.min(L1, L2) + 0.05);
if (ratio < 4.5) report("Low contrast", el);          // 3 for large text

doc.querySelectorAll("img:not([alt])").forEach((img) => report("Missing alt", img));
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Does this replace a full accessibility audit?**

No. Automated checks find around a third of issues. Always test with a keyboard and a screen reader too.

**What contrast ratio do I need?**

4.5 to 1 for normal text and 3 to 1 for large text, which is 24 pixels, or about 19 pixels if bold.

**Is a placeholder a label?**

No. Placeholders disappear when you type and many screen readers skip them. Use a real label.

## License

MIT. Free for personal and commercial use.
