# Live Translator in JavaScript (Free Project)

![Live Translator JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/01-ai-in-the-browser/006-live-translator/demo.html
**Details and code:** https://mmrahmanbappi.github.io/100-vanilla-javascript-projects/01-ai-in-the-browser/006-live-translator/

Free live translator in plain JavaScript. Translate as you type in 15 languages with language detection and read aloud, using Chrome on-device AI with an online fallback.

## What is the Live Translator?

Type or paste text in one language and see it in another as you type. The page also guesses which language you started with, shows how sure it is, and can read the translation out loud.

In recent Chrome it uses the on-device Translator and Language Detector APIs, so translations are private and work offline once a language pack is downloaded. Other browsers use a free online translation service as a fallback.

## What it does

- Translates while you type
- Auto-detects the input language with a confidence score
- 15 languages including Bengali, Hindi, Arabic and Chinese
- Swap languages in one click
- Read the translation aloud
- Recent translations saved in your browser
- Online fallback (MyMemory) for browsers without the API

## How it works

1. **Detect the language.** LanguageDetector returns likely languages with confidence scores. Without it, the page guesses from the script, such as Bengali or Arabic letters.
2. **Get a translator.** Translator.create() prepares the language pair, downloading it once if needed. Each pair is cached for the session.
3. **Translate on pause.** Typing is debounced, so a translation runs half a second after you stop.

## The key JavaScript

```js
// Which language is this?
const detector = await LanguageDetector.create();
const [best] = await detector.detect("Good morning!");
// { detectedLanguage: "en", confidence: 0.98 }

// Translate English to Bengali on the device
const ok = await Translator.availability({ sourceLanguage: "en", targetLanguage: "bn" });
const translator = await Translator.create({ sourceLanguage: "en", targetLanguage: "bn" });
const text = await translator.translate("Good morning!");
```

## Browser support

On-device: Chrome 138 or newer on desktop. Fallback: any browser with internet (limited free daily quota).

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Which languages are supported?**

The demo includes 15 languages, including English, Bengali, Hindi, Arabic, Chinese, Spanish and French. Chrome downloads each language pair the first time you use it.

**Is the translation private?**

With Chrome's on-device API, yes. The text never leaves your computer. The online fallback sends the text to the MyMemory service.

**How good is the translation quality?**

It is good for everyday sentences. For legal, medical or marketing text, have a fluent speaker check it.

## License

MIT. Free for personal and commercial use.
