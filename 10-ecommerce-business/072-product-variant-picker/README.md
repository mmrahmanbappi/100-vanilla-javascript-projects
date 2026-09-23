# Product Variant Picker in JavaScript (Free Project)

![Product Variant Picker JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/072-product-variant-picker/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/072-product-variant-picker/

Free product variant picker in plain JavaScript. Choose colour and size, see the product image, price and stock change, sold out sizes greyed out, and a shareable URL for each variant.

## What is the Product Variant Picker?

A product page for a hoodie with five colours and six sizes. Picking a colour recolours the picture and shows which sizes are left.

Sizes that are sold out are crossed out, low stock gets a warning, bigger sizes cost a little more, and the address bar always holds your exact choice.

## What it does

- Colour swatches and size buttons built on radio inputs
- Stock per colour and size, sold out disabled
- Price changes by size, sale price by colour
- Low stock warnings
- Shareable URL for each variant

## How it works

1. **Stock per variant.** Stock is kept per colour and per size. Changing colour redraws the sizes and disables any that are sold out.
2. **One picture, many colours.** The hoodie is an inline SVG, so changing colour just updates one fill. With photos, swap the image source instead.
3. **Shareable URL.** URLSearchParams writes the colour and size into the address bar with replaceState, and reads them back when the page opens.

## The key JavaScript

```js
const params = new URLSearchParams(location.search);
let color = params.get("color") || "plum", size = params.get("size") || "";

function update() {
  sizes.forEach((s, i) => inputs[i].disabled = stock[color][i] === 0);
  hoodie.setAttribute("fill", colors[color]);
  history.replaceState(null, "", "?" + new URLSearchParams({ color, size }));
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why radio inputs for swatches?**

They give keyboard support and one choice at a time for free, and screen readers announce the colour name.

**How do I use real photos?**

Keep an image list per colour and change the img src when the colour changes.

**Why put the choice in the URL?**

Customers can share or bookmark the exact product, and your ads can link straight to it.

## License

MIT. Free for personal and commercial use.
