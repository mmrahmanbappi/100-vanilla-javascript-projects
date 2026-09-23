# Password Strength Meter in JavaScript (Free Project)

![Password Strength Meter JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/066-password-strength-meter/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/09-forms-input/066-password-strength-meter/

Free password strength meter in plain JavaScript. Live score, checklist, common password check, estimated crack time, show and hide button and a secure password generator.

## What is the Password Strength Meter?

A password field with a four part strength meter, a live checklist and a short tip about what would make it stronger.

It spots common passwords even with swapped letters like p@ssw0rd, estimates how long an offline attack would take and can suggest a random password or a four word passphrase.

## What it does

- Four level strength meter
- Live checklist of rules
- Common password and pattern detection
- Estimated crack time
- Secure generator with a word option

## How it works

1. **Check the basics.** Simple tests look for length, lower and upper case letters, numbers and symbols, and tick the checklist live.
2. **Estimate real strength.** Length times the size of the character pool gives bits of entropy. Repeats, sequences, years and common words lower the score.
3. **Generate safely.** The generator uses crypto.getRandomValues, not Math.random, so suggested passwords are truly unpredictable.

## The key JavaScript

```js
function entropy(p) {
  const pool = (/[a-z]/.test(p) ? 26 : 0) + (/[A-Z]/.test(p) ? 26 : 0)
             + (/\d/.test(p) ? 10 : 0) + (/[^A-Za-z0-9]/.test(p) ? 32 : 0);
  return p.length * Math.log2(pool || 1);      // bits
}
function randomIndex(n) {
  const a = new Uint32Array(1);
  crypto.getRandomValues(a);                    // secure, unlike Math.random
  return a[0] % n;
}
```

## Browser support

Works in all modern browsers.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Is the password sent anywhere?**

No. All checks run in your browser and nothing is stored.

**Why do long passwords score so well?**

Each extra character multiplies the number of guesses needed. Length matters more than symbols.

**Should I block weak passwords?**

It is a good idea to block the very weak level and common passwords, and allow the rest with a warning.

## License

MIT. Free for personal and commercial use.
