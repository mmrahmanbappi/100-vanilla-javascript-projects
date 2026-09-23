# Meta Tag Generator in JavaScript (Free Project)

![Meta Tag Generator JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/091-meta-tag-generator/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/091-meta-tag-generator/

Free meta tag generator in plain JavaScript. Write your title and description with live length checks, see a search result and social card preview, and copy the finished meta tags.

## What is the Meta Tag Generator?

A meta tag writer. Type a title, description, URL and share image, and see a search result preview and a social share card update live.

Length bars measure the text in pixels, like search engines do, and warn you before a title or description gets cut off. The finished tags are ready to copy.

## What it does

- Title and description length checks in pixels
- Search result preview
- Social share card preview
- Open Graph and Twitter tags
- Noindex option and one click copy

## How it works

1. **Measure in pixels.** Search engines cut titles by width, not letters. Canvas measureText measures the text in the same font size to warn you before it gets cut.
2. **Preview both places.** The search result and the share card update as you type, using the same truncation rules.
3. **Write clean tags.** Values are escaped for HTML, the image tag only appears when there is an image, and the robots tag follows your noindex choice.

## The key JavaScript

```js
const ctx = document.createElement("canvas").getContext("2d");
ctx.font = "20px Arial";
const tooLong = ctx.measureText(title).width > 580;   // about where results cut off

const tags = `
<title>${title}</title>
<meta name="description" content="${description}">
<meta property="og:title" content="${title}">
<meta property="og:image" content="${image}">
<meta name="twitter:card" content="summary_large_image">`;
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How long should a title be?**

Aim for about 50 to 60 characters. Wide letters take more room, which is why the tool measures pixels.

**Does the meta description affect ranking?**

Not directly, but a clear description gets more clicks, and that matters.

**What size should the share image be?**

1200 by 630 pixels works well on every major platform.

## License

MIT. Free for personal and commercial use.
