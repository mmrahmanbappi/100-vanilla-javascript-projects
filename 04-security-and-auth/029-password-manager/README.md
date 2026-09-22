# Client-side Password Manager in JavaScript (Free Project)

![Client-side Password Manager JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/04-security-and-auth/029-password-manager/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/04-security-and-auth/029-password-manager/

Free password manager in plain JavaScript. An encrypted vault with AES-GCM and PBKDF2, a password generator, strength meter, auto lock and encrypted export.

## What is the Client-side Password Manager?

This is a small password vault that lives in your browser. Everything is encrypted before it is saved, so the stored data is useless without your master password. It also makes strong passwords and locks itself after two minutes.

Your master password is stretched with PBKDF2 600,000 times to make a key, and the vault is encrypted with AES-GCM. A wrong password fails the built in integrity check, so nothing is ever shown by mistake.

## What it does

- Vault encrypted with AES-GCM, key derived with PBKDF2 SHA-256
- Password generator with length and character options
- Strength meter with an estimated crack time
- Auto lock after 2 minutes of no activity
- Search, copy, and export the encrypted vault

## How it works

1. **Stretch the password.** Your master password and a random salt go through PBKDF2 600,000 times to make a 256-bit key.
2. **Encrypt the vault.** The whole list is turned into JSON and encrypted with AES-GCM and a fresh random IV on every save.
3. **Unlock.** Only the salt, IV and ciphertext are stored. A wrong password fails the AES-GCM integrity check, so nothing is shown.

## The key JavaScript

```js
const salt = crypto.getRandomValues(new Uint8Array(16));
const base = await crypto.subtle.importKey("raw", new TextEncoder().encode(master), "PBKDF2", false, ["deriveKey"]);
const key = await crypto.subtle.deriveKey(
  { name: "PBKDF2", salt, iterations: 600_000, hash: "SHA-256" },
  base, { name: "AES-GCM", length: 256 }, false, ["encrypt", "decrypt"]);

const iv = crypto.getRandomValues(new Uint8Array(12));   // new IV every save
const data = await crypto.subtle.encrypt({ name: "AES-GCM", iv }, key,
  new TextEncoder().encode(JSON.stringify(vault)));
// Store salt + iv + data. A wrong password makes decrypt() throw.
```

## Browser support

Every modern browser. This is a learning project: for real passwords use an audited password manager.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Is it safe to use for my real passwords?**

It is a learning project. The encryption is strong, but use an audited password manager for real accounts.

**Why 600,000 PBKDF2 rounds?**

It makes each guess slow. That is the current OWASP advice for PBKDF2 with SHA-256, and it takes under a second on a normal laptop.

**What happens if I forget the master password?**

The vault cannot be opened. There is no reset, because nobody else holds a copy of the key.

## License

MIT. Free for personal and commercial use.
