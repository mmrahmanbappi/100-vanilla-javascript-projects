# Secure File Encryptor in JavaScript (Free Project)

![Secure File Encryptor JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/04-security-and-auth/030-file-encryptor/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/04-security-and-auth/030-file-encryptor/

Free file encryptor in plain JavaScript. Lock any file with a password using AES-GCM 256 and PBKDF2, and unlock it later. No upload, the file never leaves your computer.

## What is the Secure File Encryptor?

Drop any file, like a PDF, photo or zip, pick a password and download a locked copy. Only someone with the password can open it again. The file never leaves your computer.

The page stretches your password with PBKDF2, encrypts the file with AES-GCM and saves a small header with the salt and IV. Unlocking reads that header, rebuilds the key and checks the file was not changed.

## What it does

- Works with any file type: PDFs, photos, zips, documents
- Keeps the original file name inside the locked file
- Password strength check and a matching confirm field
- Integrity check: a wrong password or a changed file is detected
- Shows the file format byte by byte so you can learn it

## How it works

1. **Make a key.** A random 16 byte salt and your password go through PBKDF2 to make an AES key.
2. **Encrypt.** The file name and bytes are encrypted together with AES-GCM and a random 12 byte IV.
3. **Pack the file.** Output is a header (magic word, version, salt, IV) followed by the ciphertext. Unlocking reads the header back.

## The key JavaScript

```js
const MAGIC = new TextEncoder().encode("VJLENC");
const salt = crypto.getRandomValues(new Uint8Array(16));
const iv = crypto.getRandomValues(new Uint8Array(12));
const key = await deriveKey(password, salt);          // PBKDF2, 600k rounds

const plain = new Uint8Array(await file.arrayBuffer());
const cipher = await crypto.subtle.encrypt({ name: "AES-GCM", iv }, key, plain);

const locked = new Blob([MAGIC, new Uint8Array([1]), salt, iv, cipher]);
// Unlock: read the header back, derive the same key, decrypt()
```

## Browser support

Every modern browser. Large files (over about 1 GB) may run out of memory.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How strong is AES-GCM 256?**

It is the same encryption used by banks and messaging apps. With a strong password, the locked file cannot be opened by guessing.

**Can I unlock the file on another computer?**

Yes. Open this page anywhere, drop the .locked file and enter the password.

**Is there a file size limit?**

The file is read into memory, so very large files, over about 1 GB, may fail on some devices.

## License

MIT. Free for personal and commercial use.
