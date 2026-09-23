# Mini Postman API Client in JavaScript (Free Project)

![Mini Postman API Client JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/07-developer-tools/049-mini-postman/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/07-developer-tools/049-mini-postman/

Free API client in plain JavaScript. Send GET, POST, PUT, PATCH and DELETE with params, headers and body, see status, time and pretty JSON, save collections and copy cURL.

## What is the Mini Postman API Client?

Test any API from the browser. Build a request with query params, headers and a body, send it, and read a clean response with status, time and size. Save the ones you use often and copy them as cURL.

Requests use fetch with an AbortSignal for the timeout and the Cancel button. The response body is streamed to count bytes, and variables like {{baseUrl}} are filled in before sending.

## What it does

- Methods, params table, headers table and JSON, form or raw body
- Response status, time, size, headers and highlighted JSON
- Timeout and a Cancel button
- History of the last 30 requests and named collections
- Environment variables like {{baseUrl}} and cURL export

## How it works

1. **Build the request.** The URL, params, headers and body are combined, and {{variables}} are filled in from the environment.
2. **Send with limits.** fetch runs with a signal that aborts on your timeout or when you press Cancel.
3. **Read the response.** The body is streamed to count bytes and show progress, then shown as pretty JSON or plain text.

## The key JavaScript

```js
const controller = new AbortController();
const signal = AbortSignal.any([controller.signal, AbortSignal.timeout(15000)]);
const t0 = performance.now();
const res = await fetch(url, { method, headers, body, signal });

let bytes = 0; const chunks = [];
const reader = res.body.getReader();
for (let r; !(r = await reader.read()).done; ) { chunks.push(r.value); bytes += r.value.length; }
const text = new TextDecoder().decode(await new Blob(chunks).arrayBuffer());
show(res.status, performance.now() - t0, bytes, text, [...res.headers]);
// Cancel button: controller.abort()
```

## Browser support

Every modern browser. The API you call must allow CORS; many public APIs do, private ones often need a proxy.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why do some APIs fail with a CORS error?**

Browsers block requests to sites that do not allow them. Public APIs usually allow it, private ones often need a proxy.

**Where are my requests saved?**

History and collections are stored in localStorage in your browser.

**Can I use environment variables?**

Yes. Add them in the Variables tab and use {{name}} in the URL, params, headers or body.

## License

MIT. Free for personal and commercial use.
