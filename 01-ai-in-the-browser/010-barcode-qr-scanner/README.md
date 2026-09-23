# QR and Barcode Scanner in JavaScript (Free Project)

![QR and Barcode Scanner JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/01-ai-in-the-browser/010-barcode-qr-scanner/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/01-ai-in-the-browser/010-barcode-qr-scanner/

Free QR code and barcode scanner in plain JavaScript. Scan with your camera or a photo, read QR, EAN, UPC and more, and make your own QR codes. Works on phones.

## What is the QR and Barcode Scanner?

Point your phone or laptop camera at a QR code or a product barcode and this page reads it instantly, drawing a box around the code it found. You can also upload a screenshot or photo, and there is a small QR maker so you can test it.

It uses the BarcodeDetector API, which is built into Chrome on Android and some other browsers. Where it is missing, the page loads a small WebAssembly version of the ZXing scanner that works the same way.

## What it does

- Live camera scanning with a box drawn around each code
- Scan from an uploaded photo or screenshot
- QR, EAN, UPC, Code 128, Data Matrix, PDF417 and more
- Built-in QR code maker to test with
- Face detection when the browser supports it
- Scan history with copy and safe link opening

## How it works

1. **Pick a detector.** The page uses the browser's own BarcodeDetector when it exists, otherwise it loads the same API backed by ZXing WebAssembly.
2. **Scan frames.** About five times a second, the current camera frame is passed to detect(), which returns each code with its corner points.
3. **Show results.** Corners are drawn on a canvas over the video, and new codes are added to the history with a short beep.

## The key JavaScript

```js
// Native API, or the same API backed by ZXing WebAssembly
const Detector = "BarcodeDetector" in window
  ? window.BarcodeDetector
  : (await import("https://cdn.jsdelivr.net/npm/barcode-detector@3.2.2/dist/es/ponyfill.js")).BarcodeDetector;

const detector = new Detector({ formats: ["qr_code", "ean_13", "code_128"] });

// Works with <video>, <img>, <canvas>, ImageBitmap or a Blob
const codes = await detector.detect(videoElement);
for (const c of codes) console.log(c.format, c.rawValue, c.cornerPoints);
```

## Browser support

Native: Chrome and Edge on Android and macOS, Samsung Internet. Fallback: every modern browser. Camera needs HTTPS or localhost.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How do I scan a QR code with JavaScript?**

Get the camera with getUserMedia, show it in a video element, and pass frames to BarcodeDetector.detect(). This project shows the full loop with a fallback for browsers that lack the API.

**Which barcode types can it read?**

QR, EAN 13, EAN 8, UPC A, UPC E, Code 128, Code 39, Data Matrix, PDF417, Aztec and more, depending on the browser.

**Why does the camera not start?**

Browsers only allow the camera on HTTPS or localhost. On GitHub Pages it works, but opening the file straight from your disk will block it.

## License

MIT. Free for personal and commercial use.
