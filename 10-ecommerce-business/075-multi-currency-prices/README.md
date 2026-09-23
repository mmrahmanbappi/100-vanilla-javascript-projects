# Multi-currency Prices in JavaScript (Free Project)

![Multi-currency Prices JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/075-multi-currency-prices/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/10-ecommerce-business/075-multi-currency-prices/

Free multi-currency price switcher in plain JavaScript. Detect the visitor's currency, convert prices, round to neat price points, format for each country and remember the choice.

## What is the Multi-currency Prices?

A product grid that shows prices in nine currencies. The page guesses your currency from the browser language and remembers what you pick.

Prices can be rounded to neat price points, and a table shows the same product formatted in every currency, so you can see how local formats differ.

## What it does

- Nine currencies with local number formats
- Currency guess from the browser language
- Tidy price rounding
- Choice saved for next time
- Comparison table of all formats

## How it works

1. **Guess the currency.** Intl.Locale turns the browser language into a region, like en-GB into GB, and a small table maps that to a currency.
2. **Convert, then tidy.** The dollar price is multiplied by the rate, then rounded up to a neat price point so a chair costs 229 euros, not 229.08.
3. **Format the local way.** Intl.NumberFormat adds the right symbol, separators and decimals. Yen has no decimals and rupees group digits in lakhs.

## The key JavaScript

```js
const region = new Intl.Locale(navigator.language).maximize().region; // "GB"
const currency = { GB: "GBP", DE: "EUR", IN: "INR", BD: "BDT" }[region] || "USD";

const local = price * rates[currency];
new Intl.NumberFormat("en-IN", { style: "currency", currency: "INR" })
  .format(124500);                     // "₹1,24,500.00"
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Where should real exchange rates come from?**

From your payment provider or a rates API, cached on your server once a day. Charge in the currency you show.

**Why round prices?**

Converted prices like 229.08 look odd. Rounding to a tidy price point looks deliberate and builds trust.

**Is guessing from the language reliable?**

It is a good first guess. Always let people change the currency themselves.

## License

MIT. Free for personal and commercial use.
