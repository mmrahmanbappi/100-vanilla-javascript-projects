# Pricing Table with Toggle in JavaScript (Free Project)

![Pricing Table with Toggle JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/056-pricing-table-toggle/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/08-website-sections/056-pricing-table-toggle/

Free pricing table in plain JavaScript. Switch monthly and yearly billing, change currency, pick team size with a slider and compare features. One HTML file.

## What is the Pricing Table with Toggle?

A three column pricing table with a highlighted middle plan. Switch between monthly and yearly billing and the prices and totals update straight away.

Choose a currency and drag the team size slider to see the price per person and the total, formatted correctly for that currency.

## What it does

- Monthly and yearly switch with a savings badge
- Currency switcher with proper number formatting
- Team size slider with live totals
- Highlighted most popular plan
- Included and not included features

## How it works

1. **Keep prices in one place.** Plans live in one small array with a base price in dollars. Everything on screen is worked out from it.
2. **Convert and discount.** The price is multiplied by the exchange rate and by 0.8 for yearly billing, then by team size for the total.
3. **Format for the currency.** Intl.NumberFormat shows the right symbol, separators and decimals for each currency.

## The key JavaScript

```js
const fmt = (v, cur) => new Intl.NumberFormat(undefined, {
  style: "currency", currency: cur
}).format(v);

const perSeat = plan.price * rates[cur] * (yearly ? 0.8 : 1);
const total = perSeat * seats * (yearly ? 12 : 1);
priceEl.textContent = fmt(perSeat, cur);   // $23.20
totalEl.textContent = fmt(total, cur) + " billed yearly";
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Where do the exchange rates come from?**

They are fixed numbers in the demo. In a real site, load them from your payment provider or an exchange rate API.

**How is the yearly discount worked out?**

The monthly price is multiplied by 0.8, which is a 20 percent saving. Change the number to set your own discount.

**Does Intl.NumberFormat need a library?**

No. It is built into every modern browser.

## License

MIT. Free for personal and commercial use.
