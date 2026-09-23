# Checkout Form in JavaScript (Free Project)

![Checkout Form JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/10-ecommerce-business/074-checkout-form/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/10-ecommerce-business/074-checkout-form/

Free checkout form in plain JavaScript. Contact and address with autofill, delivery options that change the total, card number formatting with a Luhn check, expiry and CVC checks and an order summary.

## What is the Checkout Form?

A one page checkout with contact details, delivery address, three delivery options and a card payment section, next to an order summary with photos.

Delivery choice updates the total, the card number is formatted and checked with the Luhn algorithm, and expiry and security code are checked before the order is placed.

## What it does

- Correct autocomplete tokens for fast autofill
- Delivery options that change the total
- Card number formatting and Luhn check
- Expiry and security code checks
- Sticky order summary with VAT

## How it works

1. **Let the browser fill it in.** Every field has the right autocomplete token, like given-name, postal-code and cc-number, so one tap can fill the whole form.
2. **Format as they type.** Card numbers get a space every four digits and expiry dates get a slash, which makes mistakes easy to spot.
3. **Check with Luhn.** The Luhn algorithm catches most typos in card numbers before the form is sent. Expiry must be in the future.

## The key JavaScript

```js
function luhn(num) {
  let sum = 0, alt = false;
  for (let i = num.length - 1; i >= 0; i--) {
    let d = +num[i];
    if (alt) { d *= 2; if (d > 9) d -= 9; }
    sum += d; alt = !alt;
  }
  return sum % 10 === 0;
}
luhn("4242424242424242"); // true
// <input autocomplete="cc-number" inputmode="numeric">
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Can I take real card payments with this form?**

No. Real card details should be typed into your payment provider's secure fields, never sent to your own server.

**What is the Luhn check?**

A simple checksum built into card numbers. It catches most single digit typos and swapped digits.

**Why do autocomplete tokens matter?**

They let browsers and password managers fill the form in one step, which makes more people finish checkout.

## License

MIT. Free for personal and commercial use.
