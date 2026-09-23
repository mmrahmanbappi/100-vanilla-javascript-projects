# Passkey Login Demo in JavaScript (Free Project)

![Passkey Login Demo JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/04-security-and-auth/028-passkey-login/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/04-security-and-auth/028-passkey-login/

Free passkey login demo in plain JavaScript. Register and sign in with fingerprint, face or PIN using WebAuthn, and see the signature checked step by step.

## What is the Passkey Login Demo?

Passkeys replace passwords with your phone or laptop's screen lock. This demo lets you create one and sign in with it, and shows every step of what happens in between.

It uses the WebAuthn API. Your device makes a key pair, keeps the private key and shares only the public key. At sign in it signs a random challenge, and the page checks that signature with the Web Crypto API.

## What it does

- Register a passkey with the device's screen lock
- Sign in with it, with or without typing a username
- Signature verified with the stored public key, in the browser
- Step log showing challenge, client data and authenticator data
- Delete local accounts to start over

## How it works

1. **Register.** The page sends a random challenge. Your device makes a new key pair, keeps the private key, and returns the public key.
2. **Sign in.** A new challenge goes to the device, which signs it after you unlock with your fingerprint, face or PIN.
3. **Verify.** The signature is checked against the saved public key. In a real app your server does this step, never the browser.

## The key JavaScript

```js
// Register: the device makes a key pair and returns the public key
const cred = await navigator.credentials.create({ publicKey: {
  challenge: crypto.getRandomValues(new Uint8Array(32)),
  rp: { name: "My App" },
  user: { id: userId, name: "rafi@example.com", displayName: "Rafi" },
  pubKeyCredParams: [{ type: "public-key", alg: -7 }],   // ES256
  authenticatorSelection: { residentKey: "required", userVerification: "preferred" },
}});
// Sign in: the device signs a new challenge
const assertion = await navigator.credentials.get({ publicKey: { challenge, userVerification: "preferred" } });
// Server: verify assertion.response.signature with the saved public key
```

## Browser support

Chrome, Edge, Safari and Firefox on devices with a screen lock, plus password managers that store passkeys. Needs HTTPS or localhost.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Are passkeys safer than passwords?**

Yes. There is no shared secret to steal or reuse, and they only work on the real site, so phishing pages cannot use them.

**Is this demo enough for a real app?**

No. In a real app the server makes the challenge and checks the signature. This demo does it in the browser so you can see each step.

**Which devices support passkeys?**

Almost all current phones and computers with a screen lock, in Chrome, Edge, Safari and Firefox, plus password managers that store passkeys.

## License

MIT. Free for personal and commercial use.
