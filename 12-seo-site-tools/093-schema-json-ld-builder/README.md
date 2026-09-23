# Schema JSON-LD Builder in JavaScript (Free Project)

![Schema JSON-LD Builder JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/093-schema-json-ld-builder/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/12-seo-site-tools/093-schema-json-ld-builder/

Free JSON-LD schema builder in plain JavaScript. Pick a type, fill in a simple form and get valid structured data with required field checks, ready to paste into your page.

## What is the Schema JSON-LD Builder?

A structured data builder for five common schema types: local business, product, article, event and FAQ page. Pick a type and fill in a short form.

The JSON-LD updates as you type, empty fields are left out, required fields are checked, and the finished script tag can be copied into your page.

## What it does

- Five schema types
- Required field checks and simple validation
- Clean output with empty values removed
- Add and remove FAQ questions
- Copy as a ready script tag

## How it works

1. **A form per type.** Each schema type has its own short list of fields, with the required ones marked. Changing type redraws the form.
2. **Build and clean.** Form values are placed into the right schema shape. A JSON.parse reviver then drops empty values and empty objects, so the output stays tidy.
3. **Check before you paste.** Missing required fields and obvious mistakes, like a price that is not a number, are listed above the output.

## The key JavaScript

```js
const product = {
  "@context": "https://schema.org",
  "@type": "Product",
  name: form.name, image: form.image,
  offers: { "@type": "Offer", price: form.price, priceCurrency: "GBP",
            availability: "https://schema.org/InStock" }
};
// drop empty values
const clean = JSON.parse(JSON.stringify(product), (k, v) => v === "" ? undefined : v);
script.textContent = JSON.stringify(clean, null, 2);
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Where do I put the JSON-LD?**

Anywhere in the page, usually in the head. It is invisible to visitors.

**Will this guarantee rich results?**

No. It makes your page eligible. Search engines decide when to show rich results.

**How do I test my markup?**

Paste your page address into your search engine's structured data testing tool, or into the Schema.org validator.

## License

MIT. Free for personal and commercial use.
