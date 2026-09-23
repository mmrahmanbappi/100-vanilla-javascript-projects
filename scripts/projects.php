<?php
// Content for every project. Add new categories and projects here, then run: php scripts/build.php
// Copy rules: plain human language, no em dashes, no icons or emoji, readers aged 20 to 50.

$SITE = [
    'name' => 'Vanilla JavaScript Projects',
    'base' => 'https://mmrahmanbappi.github.io/vanilla-javascript-projects/',
    'repo' => 'https://github.com/mmrahmanbappi/vanilla-javascript-projects',
    'author' => 'mmrahmanbappi',
    'author_url' => 'https://github.com/mmrahmanbappi',
    'published' => '2026-09-23',
];

$CATEGORIES = [
    [
        'num' => 1,
        'slug' => '01-ai-in-the-browser',
        'name' => 'AI in the Browser',
        'ready' => true,
        'title' => 'Free AI JavaScript Projects That Run in the Browser',
        'desc' => '10 free AI projects in plain JavaScript with live demos: local chatbot, image classifier, speech to text, summarizer, translator, background remover and more.',
        'keywords' => 'ai javascript projects, ai in the browser, webgpu chatbot, transformers.js projects, chrome built-in ai, javascript machine learning',
        'intro' => 'A few years ago, running AI meant paying for a server and an API key. Today a normal laptop can run a chatbot, read speech, cut out a photo background or search notes by meaning, all inside a browser tab. These ten projects show how. Each one is a single HTML file with a live demo, the code is short enough to read in one sitting, and your data never leaves your computer.',
    ],
    [
        'num' => 2,
        'slug' => '02-modern-ui',
        'name' => 'Modern UI',
        'ready' => true,
        'title' => 'Free Modern UI JavaScript Projects: Web Components, Popover, Signals',
        'desc' => '10 free modern UI projects in plain JavaScript with live demos: Web Components, View Transitions, a router, popovers, signals, kanban, color picker and more.',
        'keywords' => 'modern ui javascript, web components projects, view transitions api, popover api, kanban board javascript, javascript ui projects',
        'intro' => 'The browser now does many things that used to need React or a big library. Custom components, animated page changes, routing, tooltips that place themselves, and state that updates the screen on its own. These ten projects show those features in real, useful interfaces. Each one is a single HTML file you can open, read and copy into your own work.',
    ],
    [
        'num' => 3,
        'slug' => '03-pwa-and-offline',
        'name' => 'PWA and Offline',
        'ready' => true,
        'title' => 'Free PWA JavaScript Projects: Offline Apps, Push, Service Workers',
        'desc' => '7 free progressive web app projects in plain JavaScript with live demos: offline todo, expense tracker, reminders, markdown editor, share target, tab sync and prerender.',
        'keywords' => 'pwa projects javascript, service worker example, offline web app, push notifications javascript, installable web app, progressive web app tutorial',
        'intro' => 'A progressive web app installs like a normal app, opens without internet and can send notifications. These seven projects show how, one feature at a time: caching with a service worker, syncing when the connection comes back, reminders, saving real files, receiving shares from other apps, keeping tabs in sync and loading pages before you click.',
    ],
    [
        'num' => 4,
        'slug' => '04-security-and-auth',
        'name' => 'Security and Auth',
        'ready' => true,
        'title' => 'Free JavaScript Security Projects: Passkeys, Encryption, 2FA',
        'desc' => '4 free security projects in plain JavaScript with live demos: passkey login with WebAuthn, an encrypted password manager, a file encryptor and a TOTP 2FA app.',
        'keywords' => 'javascript security projects, webauthn passkeys demo, web crypto api, aes encryption javascript, totp javascript, password manager javascript',
        'intro' => 'Passwords, codes and encryption feel like hard topics, but the browser ships the building blocks for all of them. These four projects use WebAuthn for passkeys and the Web Crypto API for strong encryption and two factor codes. They are small enough to read in an evening, and they show every step so you understand what is actually happening.',
    ],
    [
        'num' => 5,
        'slug' => '05-media-and-realtime',
        'name' => 'Media and Real Time',
        'ready' => true,
        'title' => 'Free JavaScript Media Projects: Video Call, Screen Recorder, WebGPU',
        'desc' => '9 free media and real time projects in plain JavaScript with live demos: WebRTC video call, screen recorder, video editor, whiteboard, visualizer, chat and more.',
        'keywords' => 'webrtc video call javascript, screen recorder javascript, webcodecs video editor, real time chat javascript, webgpu particles, code playground javascript',
        'intro' => 'Video calls, screen recording, live drawing with friends and music that moves on screen used to need plugins or native apps. Now the browser handles them with WebRTC, MediaRecorder, WebCodecs, Web Audio and WebGPU. These nine projects are the most fun in the collection, and they make great portfolio pieces because people can try them in seconds.',
    ],
    [
        'num' => 6,
        'slug' => '06-hardware-and-performance',
        'name' => 'Hardware and Performance',
        'ready' => true,
        'title' => 'Free JavaScript Hardware and Performance Projects: Bluetooth, Serial, WASM',
        'desc' => '6 free hardware and performance projects in plain JavaScript with live demos: Web Bluetooth, Arduino serial monitor, WebAssembly filters, Core Web Vitals and more.',
        'keywords' => 'web bluetooth javascript, web serial arduino, webassembly javascript example, core web vitals javascript, compressionstream, scheduler api',
        'intro' => 'A web page can now talk to a heart rate strap, read an Arduino over USB, run hand written WebAssembly and measure its own speed. These six projects show how to reach hardware and how to keep pages fast, with demo modes so you can try them even without a device plugged in.',
    ],
    [
        'num' => 7,
        'slug' => '07-developer-tools',
        'name' => 'Developer Tools',
        'ready' => true,
        'title' => 'Free JavaScript Developer Tools: JSON Formatter, Regex Tester, API Client',
        'desc' => '4 free developer tools in plain JavaScript with live demos: JSON formatter and validator, regex tester, a Postman style API client and a Temporal date toolkit.',
        'keywords' => 'json formatter javascript, regex tester online, postman alternative javascript, temporal api, developer tools javascript, api client browser',
        'intro' => 'These are the small tools developers open every day, rebuilt as single HTML files you can keep, change and run offline. Format and check JSON, test regular expressions, send API requests and convert time zones. Each one is fast, private and shows useful techniques like Web Workers, streaming fetch and the new Temporal API.',
    ],
    [
        'num' => 8,
        'slug' => '08-website-sections',
        'name' => 'Website Sections',
        'ready' => true,
        'title' => 'Free JavaScript Website Sections: Mega Menu, Slider, Lightbox, Pricing Table',
        'desc' => '10 free website sections in plain JavaScript with live demos: mega menu, sticky header, image slider, lightbox, tabs, pricing table, reviews, cookie banner and more.',
        'keywords' => 'javascript website components, image slider javascript, mega menu, lightbox gallery, pricing table, cookie consent banner, vanilla js ui',
        'intro' => 'These are the parts almost every website needs: a menu that works on phones, a photo slider, a lightbox, pricing, reviews and a cookie banner. Each one is a single HTML file with no library, so you can copy it into any site. They work with a mouse, a keyboard and a thumb, and they respect people who prefer less motion.',
    ],
    [
        'num' => 9,
        'slug' => '09-forms-input',
        'name' => 'Forms and Input',
        'ready' => true,
        'title' => 'Free JavaScript Form Components: Multi-step Form, File Upload, Date Picker, OTP',
        'desc' => '10 free form components in plain JavaScript with live demos: multi-step form, file upload, date range picker, autocomplete, OTP input, phone input and more.',
        'keywords' => 'javascript form components, multi step form, file upload dropzone, date range picker, autocomplete search, otp input, signature pad',
        'intro' => 'Forms are where visitors become customers, and small details decide whether they finish. These ten projects cover the fields websites need most: step by step sign up, file uploads, date ranges, search suggestions, verification codes, phone numbers, reviews, signatures and a small text editor. Each is one HTML file, works with a keyboard and checks input before it reaches your server.',
    ],
    [
        'num' => 10,
        'slug' => '10-ecommerce-business',
        'name' => 'E-commerce and Business',
        'ready' => true,
        'title' => 'Free JavaScript E-commerce Components: Cart, Checkout, Filters, Invoice, Booking',
        'desc' => '10 free e-commerce and business projects in plain JavaScript with live demos: shopping cart, variant picker, product filters, checkout, invoice generator, booking calendar and more.',
        'keywords' => 'javascript shopping cart, ecommerce javascript components, product filter, checkout form, invoice generator, booking calendar, store locator',
        'intro' => 'These are the building blocks of a small online business. A cart with coupons, product options, filters that live in the URL, a checkout with card checks, prices in local currencies, invoices, appointment booking, a store finder, order tracking and a wishlist. Each is one HTML file with real photos, and each shows the technique you need to connect it to your own backend.',
    ],
];

$PROJECTS = [
    [
        'num' => 1,
        'cat' => '01-ai-in-the-browser',
        'slug' => '001-local-ai-chatbot',
        'name' => 'Local AI Chatbot',
        'example' => 'a private chat assistant that runs on your graphics card',
        'title' => 'Build a Local AI Chatbot in JavaScript (WebGPU, No API Key)',
        'desc' => 'Free local AI chatbot in plain JavaScript. It runs Llama and Qwen models on your own graphics card with WebGPU and WebLLM, with streaming replies and no API key.',
        'keywords' => 'local ai chatbot javascript, webgpu chatbot, webllm tutorial, run llm in browser, offline ai chat, chatgpt clone javascript',
        'runs' => 'Your GPU (WebGPU)',
        'what' => [
            'This is a chatbot like the ones you already use, with one big difference: the AI model runs on your own computer. The page downloads a small language model once, keeps it in the browser cache, and then answers every question using your graphics card. Nothing you type is sent anywhere.',
            'It works because of WebGPU, a new browser feature that lets JavaScript use the graphics card for heavy math. The WebLLM library takes care of loading the model and turning your messages into replies, so the project code stays small and easy to follow.',
        ],
        'when' => [
            'Private assistants for notes, email drafts and ideas',
            'Apps that must work offline',
            'Learning how language models stream text',
            'Portfolio projects that show modern browser skills',
        ],
        'features' => [
            'Streams the reply word by word, like hosted chatbots',
            'Pick a small fast model or a larger smarter one',
            'Stop a reply mid-way',
            'Custom system prompt',
            'Chat history saved in your browser',
            'Model is cached, so the second visit loads in seconds and works offline',
        ],
        'steps' => [
            [
                'Check the GPU',
                'The page asks the browser for a WebGPU adapter and checks for 16-bit float support to pick the right model build.',
            ],
            [
                'Download once',
                'WebLLM fetches the model weights and stores them in the browser cache. Later visits skip this step.',
            ],
            [
                'Stream the reply',
                'Your messages go to the engine as a normal chat completion request, and tokens stream back as they are generated.',
            ],
        ],
        'code' => 'import * as webllm from "https://cdn.jsdelivr.net/npm/@mlc-ai/web-llm@0.2.85/+esm";

// 1. Load the model (cached after the first time)
const engine = await webllm.CreateMLCEngine("Qwen2.5-0.5B-Instruct-q4f16_1-MLC", {
  initProgressCallback: (r) => console.log(r.text),
});

// 2. Ask it something, same shape as the OpenAI API
const stream = await engine.chat.completions.create({
  messages: [{ role: "user", content: "Hello!" }],
  stream: true,
});

// 3. Print tokens as they arrive
for await (const chunk of stream) {
  console.log(chunk.choices[0]?.delta?.content ?? "");
}',
        'browsers' => 'Chrome, Edge and other Chromium browsers 113 or newer on desktop. Safari 26 and Firefox 141 or newer on Windows have WebGPU too. You need about 1 to 2 GB of free GPU memory.',
        'faq' => [
            [
                'Do I need an API key to use this chatbot?',
                'No. The model runs in your browser on your own graphics card, so there is no API, no key and no monthly bill. The only download is the model itself, which is saved for next time.',
            ],
            [
                'How big is the model download?',
                'The small Qwen model is about 400 MB and the larger Llama model is about 900 MB. After the first visit it loads from the browser cache in a few seconds, even with no internet.',
            ],
            [
                'Which browsers can run it?',
                'Chrome and Edge 113 or newer on desktop work best. Newer Safari and Firefox builds also support WebGPU. Phones usually do not have enough memory for these models yet.',
            ],
        ],
    ],
    [
        'num' => 2,
        'cat' => '01-ai-in-the-browser',
        'slug' => '002-image-classifier',
        'name' => 'Image Classifier',
        'example' => 'drop a photo and see what the AI thinks it is',
        'title' => 'Image Recognition in JavaScript: Free AI Image Classifier',
        'desc' => 'Free image classifier in plain JavaScript. Drop a photo and a Vision Transformer model names what is in it, with confidence bars. Runs in the browser with Transformers.js.',
        'keywords' => 'image classification javascript, image recognition js, transformers.js image classifier, vision transformer browser, tensorflow alternative javascript',
        'runs' => 'Your CPU (WebAssembly)',
        'what' => [
            'An image classifier looks at a photo and tells you what is in it: a tiger, a pizza, a sports car. This project uses a well known model called ViT, short for Vision Transformer, which was trained on more than a million photos across 1,000 everyday categories.',
            'The model runs in your browser through Transformers.js and WebAssembly. You drop in a picture, and a few moments later you get the top five guesses, each with a confidence score. The photo is never uploaded.',
        ],
        'when' => [
            'Auto tagging photos in a gallery or shop',
            'Checking uploads before they are saved',
            'Teaching the basics of computer vision',
            'A first AI project for your portfolio',
        ],
        'features' => [
            'Drag and drop, file picker or paste from clipboard',
            'Six sample photos to try right away',
            'Top 5 guesses with confidence bars',
            'Shows how long the model took',
            'Model is cached after the first run',
        ],
        'steps' => [
            [
                'Load the pipeline',
                'Transformers.js downloads the quantized ViT model once and keeps it in the browser cache.',
            ],
            [
                'Prepare the image',
                'The image is resized to 224 by 224 pixels and turned into numbers the model understands.',
            ],
            [
                'Rank the labels',
                'The model scores all 1000 ImageNet labels and the page shows the five highest.',
            ],
        ],
        'code' => 'import { pipeline } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

// 1. Create the classifier (downloads the model once)
const classify = await pipeline("image-classification", "Xenova/vit-base-patch16-224");

// 2. Give it an image URL, a blob URL or a canvas
const results = await classify("tiger.jpg", { top_k: 5 });

// 3. [{ label: "tiger, Panthera tigris", score: 0.94 }, ...]
console.table(results);',
        'browsers' => 'Any current Chrome, Edge, Firefox or Safari on desktop or mobile. Needs about 300 MB of free memory.',
        'faq' => [
            [
                'How accurate is the image classifier?',
                'For clear photos of common things like animals, food and vehicles it is right most of the time. It struggles with unusual objects, since it only knows 1,000 categories.',
            ],
            [
                'Does it upload my photos?',
                'No. The model runs on your device, so the photo stays in your browser. You can even disconnect from the internet after the model loads.',
            ],
            [
                'Can I train it on my own categories?',
                'Not in this project. To recognize your own products or labels you would fine tune a model in Python first, then load the result with Transformers.js the same way.',
            ],
        ],
    ],
    [
        'num' => 3,
        'cat' => '01-ai-in-the-browser',
        'slug' => '003-speech-to-text-notes',
        'name' => 'Speech to Text Notes',
        'example' => 'a voice notes app that writes down what you say',
        'title' => 'Speech to Text in JavaScript with Whisper (Free, Offline)',
        'desc' => 'Free speech to text notes app in plain JavaScript. Record your voice or upload audio and OpenAI Whisper turns it into text, right in the browser. No server, no API key.',
        'keywords' => 'speech to text javascript, whisper javascript, voice to text browser, transcribe audio javascript, offline speech recognition',
        'runs' => 'Your CPU (WebAssembly)',
        'what' => [
            'This project is a notes app you can talk to. Press record, say what is on your mind, and the words appear as a saved note. You can also drop in an audio file, like a voice memo or a short interview, and get a written copy.',
            'The transcription comes from Whisper, the open speech model from OpenAI, running in the browser with Transformers.js. The page records audio with the MediaRecorder API, converts it to the format Whisper expects, and saves every note in your browser.',
        ],
        'when' => [
            'Quick voice memos and meeting notes',
            'Turning short interviews into text',
            'Accessibility features for people who prefer speaking',
            'Learning how audio is processed in JavaScript',
        ],
        'features' => [
            'Record from the microphone with a live level meter',
            'Upload an audio file or try a sample speech',
            'English model or multilingual model',
            'Notes saved in your browser with search',
            'Copy a note or download it as a text file',
        ],
        'steps' => [
            [
                'Record',
                'MediaRecorder captures your microphone while an AnalyserNode drives the level meter.',
            ],
            [
                'Resample',
                'The recording is decoded with the Web Audio API at 16 kHz, the rate Whisper expects.',
            ],
            [
                'Transcribe',
                'Whisper turns the audio into text in 30 second chunks, then the note is saved locally.',
            ],
        ],
        'code' => 'import { pipeline } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

const transcribe = await pipeline("automatic-speech-recognition", "Xenova/whisper-tiny.en");

// Whisper needs mono audio at 16 kHz as a Float32Array
const ctx = new AudioContext({ sampleRate: 16000 });
const buffer = await ctx.decodeAudioData(await blob.arrayBuffer());
const audio = buffer.getChannelData(0);

const { text } = await transcribe(audio, { chunk_length_s: 30, stride_length_s: 5 });
console.log(text);',
        'browsers' => 'Chrome, Edge, Firefox and Safari. Microphone access needs HTTPS or localhost.',
        'faq' => [
            [
                'Is Whisper in the browser as good as the paid API?',
                'This project uses Whisper tiny so it loads fast. It is very good for clear English and decent for other languages. The paid API uses bigger models, which handle noise and accents better.',
            ],
            [
                'Does it work offline?',
                'Yes, after the first visit. The model is cached in the browser, so recording and transcribing work without internet.',
            ],
            [
                'Which languages does it support?',
                'The English model is the most accurate. The multilingual option understands about 100 languages, including Bengali, Hindi, Spanish and Arabic, with lower accuracy on short clips.',
            ],
        ],
    ],
    [
        'num' => 4,
        'cat' => '01-ai-in-the-browser',
        'slug' => '004-ai-text-summarizer',
        'name' => 'AI Text Summarizer',
        'example' => 'paste a long article and get the key points',
        'title' => 'AI Text Summarizer in JavaScript with Chrome Built-in AI',
        'desc' => 'Free AI text summarizer in plain JavaScript. Paste any article and get key points, a TL;DR or a headline using Chrome built-in AI, with a smart fallback for other browsers.',
        'keywords' => 'text summarizer javascript, chrome summarizer api, gemini nano javascript, summarize text ai free, built-in ai chrome',
        'runs' => 'Chrome built-in AI or your CPU',
        'what' => [
            'Paste a long article, report or email thread and this tool gives you the short version: a few key points, a one line summary, a teaser or a headline. You choose the style and the length.',
            'In Chrome it uses the new built-in Summarizer API, which runs Google\'s Gemini Nano model on your own computer. Other browsers get a fallback that scores each sentence and keeps the most important ones, so the tool works everywhere.',
        ],
        'when' => [
            'Reading long articles and reports faster',
            'Writing headlines and social post teasers',
            'Summaries inside note taking or CMS tools',
            'Learning Chrome\'s new built-in AI APIs',
        ],
        'features' => [
            'Four summary types: key points, TL;DR, teaser and headline',
            'Short, medium or long output',
            'Uses Gemini Nano when Chrome has it, a local ranking method otherwise',
            'Word count before and after, with the reduction percentage',
            'Copy the summary with one click',
        ],
        'steps' => [
            [
                'Check availability',
                'The page calls Summarizer.availability() to see if Gemini Nano is ready, downloadable or missing.',
            ],
            [
                'Create a summarizer',
                'It creates one with your type, length and format, showing progress if Chrome needs to download the model.',
            ],
            [
                'Fall back when needed',
                'Without the API, sentences are scored by how many important words they share and the best ones are kept in order.',
            ],
        ],
        'code' => '// Feature-detect, then check if the on-device model is ready
if ("Summarizer" in self) {
  const state = await Summarizer.availability(); // "available", "downloadable", ...

  const summarizer = await Summarizer.create({
    type: "key-points", length: "medium", format: "markdown",
    monitor(m) {
      m.addEventListener("downloadprogress", (e) => console.log(e.loaded));
    },
  });

  const summary = await summarizer.summarize(longText);
}',
        'browsers' => 'Built-in AI: Chrome 138 or newer on Windows, macOS, Linux or ChromeOS with about 22 GB of free disk space. Fallback: every modern browser.',
        'faq' => [
            [
                'What is the Chrome Summarizer API?',
                'It is a new JavaScript API in Chrome 138 and later. It gives web pages a summarizer backed by Gemini Nano, a small model that Chrome downloads once and runs on your device.',
            ],
            [
                'Is it free to use?',
                'Yes. There is no API key and no cost per request, because the model runs on the user\'s computer, not on a server.',
            ],
            [
                'What happens in browsers without built-in AI?',
                'The page switches to a local method that ranks sentences by how many important words they share with the rest of the text. It is less fluent but fast and private.',
            ],
        ],
    ],
    [
        'num' => 5,
        'cat' => '01-ai-in-the-browser',
        'slug' => '005-smart-writing-assistant',
        'name' => 'Smart Writing Assistant',
        'example' => 'a writing helper that drafts, rewrites and checks your text',
        'title' => 'AI Writing Assistant in JavaScript (Rewrite, Draft, Grammar Check)',
        'desc' => 'Free AI writing assistant in plain JavaScript. Draft text, rewrite it more formal or casual, and get a live readability check for long sentences and passive voice.',
        'keywords' => 'ai writing assistant javascript, rewrite text ai, chrome writer api, readability checker javascript, grammarly alternative free',
        'runs' => 'Chrome built-in AI and your CPU',
        'what' => [
            'This is a small writing tool for everyday text like emails, posts and product pages. It can write a first draft from a short prompt, rewrite what you have in a different tone, and check how easy your text is to read.',
            'The drafting and rewriting use Chrome\'s new built-in Writer and Rewriter APIs, which run on the device. The writing check works in every browser. It scores reading ease and highlights long sentences, passive voice and filler words right in your text.',
        ],
        'when' => [
            'Email and message drafts',
            'Product descriptions and blog intros',
            'Checking that copy is easy to read',
            'Adding writing help to your own app',
        ],
        'features' => [
            'Write a draft from a prompt with tone and length options',
            'Rewrite text more formal, more casual, shorter or longer',
            'Live writing check: reading ease score, reading time, long sentences, passive voice and filler words',
            'Highlights problems right in your text',
            'Falls back to the Prompt API when Writer or Rewriter are missing',
        ],
        'steps' => [
            [
                'Pick the best engine',
                'The page checks for the Writer and Rewriter APIs first, then the general Prompt API, and says which one it found.',
            ],
            [
                'Generate or rewrite',
                'Your text and options go to the on-device model. Nothing is sent to a server.',
            ],
            [
                'Check the result',
                'Every edit runs the local writing check, so you see the reading score change as you type.',
            ],
        ],
        'code' => '// Draft new text
const writer = await Writer.create({ tone: "neutral", length: "short", format: "plain-text" });
const draft = await writer.write("An email moving the launch to Wednesday");

// Change the tone of existing text
const rewriter = await Rewriter.create({ tone: "more-formal", length: "as-is" });
const formal = await rewriter.rewrite(draft);

// No Writer or Rewriter? The general Prompt API can do both
const session = await LanguageModel.create();
const reply = await session.prompt("Rewrite this more formally: " + draft);',
        'browsers' => 'AI writing: Chrome 138 or newer with the Writer, Rewriter or Prompt API turned on (chrome://flags or an origin trial). Writing check: every modern browser.',
        'faq' => [
            [
                'What is a good reading ease score?',
                'Most readers are comfortable with a score of 60 or higher. News sites aim for 60 to 70. If your score is under 50, try shorter sentences and simpler words.',
            ],
            [
                'Does the writing check send my text anywhere?',
                'No. The readability check is plain JavaScript on the page, and the AI features run on the device through Chrome.',
            ],
            [
                'Why is the AI part not working in my browser?',
                'The Writer and Rewriter APIs are new and only in recent Chrome versions, sometimes behind a flag. The writing check still works everywhere.',
            ],
        ],
    ],
    [
        'num' => 6,
        'cat' => '01-ai-in-the-browser',
        'slug' => '006-live-translator',
        'name' => 'Live Translator',
        'example' => 'a translator that works as you type, in 15 languages',
        'title' => 'Live Translator in JavaScript with the Chrome Translator API',
        'desc' => 'Free live translator in plain JavaScript. Translate as you type in 15 languages with language detection and read aloud, using Chrome on-device AI with an online fallback.',
        'keywords' => 'translator javascript, chrome translator api, language detection javascript, translate text api free, google translate clone javascript',
        'runs' => 'Chrome on-device AI',
        'what' => [
            'Type or paste text in one language and see it in another as you type. The page also guesses which language you started with, shows how sure it is, and can read the translation out loud.',
            'In recent Chrome it uses the on-device Translator and Language Detector APIs, so translations are private and work offline once a language pack is downloaded. Other browsers use a free online translation service as a fallback.',
        ],
        'when' => [
            'Chat apps and support tools with global users',
            'Travel and study helpers',
            'Translating short product or menu text',
            'Learning Chrome\'s built-in AI APIs',
        ],
        'features' => [
            'Translates while you type',
            'Auto-detects the input language with a confidence score',
            '15 languages including Bengali, Hindi, Arabic and Chinese',
            'Swap languages in one click',
            'Read the translation aloud',
            'Recent translations saved in your browser',
            'Online fallback (MyMemory) for browsers without the API',
        ],
        'steps' => [
            [
                'Detect the language',
                'LanguageDetector returns likely languages with confidence scores. Without it, the page guesses from the script, such as Bengali or Arabic letters.',
            ],
            [
                'Get a translator',
                'Translator.create() prepares the language pair, downloading it once if needed. Each pair is cached for the session.',
            ],
            [
                'Translate on pause',
                'Typing is debounced, so a translation runs half a second after you stop.',
            ],
        ],
        'code' => '// Which language is this?
const detector = await LanguageDetector.create();
const [best] = await detector.detect("Good morning!");
// { detectedLanguage: "en", confidence: 0.98 }

// Translate English to Bengali on the device
const ok = await Translator.availability({ sourceLanguage: "en", targetLanguage: "bn" });
const translator = await Translator.create({ sourceLanguage: "en", targetLanguage: "bn" });
const text = await translator.translate("Good morning!");',
        'browsers' => 'On-device: Chrome 138 or newer on desktop. Fallback: any browser with internet (limited free daily quota).',
        'faq' => [
            [
                'Which languages are supported?',
                'The demo includes 15 languages, including English, Bengali, Hindi, Arabic, Chinese, Spanish and French. Chrome downloads each language pair the first time you use it.',
            ],
            [
                'Is the translation private?',
                'With Chrome\'s on-device API, yes. The text never leaves your computer. The online fallback sends the text to the MyMemory service.',
            ],
            [
                'How good is the translation quality?',
                'It is good for everyday sentences. For legal, medical or marketing text, have a fluent speaker check it.',
            ],
        ],
    ],
    [
        'num' => 7,
        'cat' => '01-ai-in-the-browser',
        'slug' => '007-background-remover',
        'name' => 'Background Remover',
        'example' => 'cut the background out of any photo in seconds',
        'title' => 'Remove Image Background in JavaScript: Free AI Tool',
        'desc' => 'Free AI background remover in plain JavaScript. Drop a photo and get a clean cutout, then add a new color, blur or transparent background. Runs in the browser, no upload.',
        'keywords' => 'remove background javascript, background remover ai free, image segmentation javascript, remove.bg alternative, transparent png javascript',
        'runs' => 'Your CPU (WebAssembly)',
        'what' => [
            'Drop in a photo of a person, a product or a pet, and a few seconds later the background is gone. You can keep it transparent, fill it with a color, or use a blurred copy of the original for a portrait look.',
            'The cutout comes from RMBG 1.4, an image segmentation model that marks every pixel as foreground or background. It runs in your browser with Transformers.js, and the page uses a canvas to build the final PNG at full size.',
        ],
        'when' => [
            'Product photos for online shops',
            'Profile pictures and ID photos',
            'Quick social media graphics',
            'Learning image segmentation in the browser',
        ],
        'features' => [
            'Works on photos of people, products, animals and objects',
            'Before and after comparison slider',
            'New background: transparent, white, black, any color or a blurred copy of the original',
            'Download as PNG at full resolution',
            'Drag and drop, file picker or paste',
        ],
        'steps' => [
            [
                'Find the subject',
                'The image is resized to 1024 by 1024 and the model returns a mask: white for the subject, black for the background.',
            ],
            [
                'Apply the mask',
                'The mask is scaled back to full size and copied into the alpha channel of the original pixels.',
            ],
            [
                'Compose',
                'The cut-out is drawn over the background you picked, then exported as a PNG.',
            ],
        ],
        'code' => 'import { AutoModel, AutoProcessor, RawImage } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

const model = await AutoModel.from_pretrained("briaai/RMBG-1.4", { config: { model_type: "custom" } });
const processor = await AutoProcessor.from_pretrained("briaai/RMBG-1.4", { config: {
  do_normalize: true, do_resize: true, do_rescale: true, rescale_factor: 1 / 255,
  image_mean: [0.5, 0.5, 0.5], image_std: [1, 1, 1], size: { width: 1024, height: 1024 },
  feature_extractor_type: "ImageFeatureExtractor", resample: 2, do_pad: false } });

const image = await RawImage.fromURL(url);
const { pixel_values } = await processor(image);
const { output } = await model({ input: pixel_values });

// Grayscale mask, same size as the photo: use it as the alpha channel
const mask = await RawImage.fromTensor(output[0].mul(255).to("uint8")).resize(image.width, image.height);',
        'browsers' => 'Any current desktop browser. Phones work but are slower on large photos. Note: RMBG 1.4 is licensed for non-commercial use; swap in another model for commercial projects.',
        'faq' => [
            [
                'Is this background remover free for commercial use?',
                'The code is MIT licensed, but the RMBG 1.4 model is licensed for non-commercial use only. For a paid product, swap in a model with a commercial license.',
            ],
            [
                'Are my photos uploaded?',
                'No. The model runs on your device, so the photo stays in your browser the whole time.',
            ],
            [
                'Why does it take longer on the first photo?',
                'The first run downloads the model, about 45 MB, and prepares it. After that it is cached and each photo takes a few seconds.',
            ],
        ],
    ],
    [
        'num' => 8,
        'cat' => '01-ai-in-the-browser',
        'slug' => '008-semantic-search-notes',
        'name' => 'Semantic Search for Notes',
        'example' => 'search your notes by meaning, not exact words',
        'title' => 'Semantic Search in JavaScript with Embeddings (Free Demo)',
        'desc' => 'Free semantic search project in plain JavaScript. Search notes by meaning using text embeddings and cosine similarity, with notes saved in IndexedDB. No server.',
        'keywords' => 'semantic search javascript, text embeddings javascript, vector search browser, cosine similarity javascript, all-minilm-l6-v2',
        'runs' => 'Your CPU (WebAssembly)',
        'what' => [
            'Normal search only finds notes that contain the exact words you typed. Semantic search finds notes that mean the same thing. Search for car trouble and it finds the note about the engine light, even if the word car never appears.',
            'Each note is turned into a list of 384 numbers, called an embedding, by a small model named all MiniLM. Notes with similar meaning get similar numbers. The page compares your search with every note using cosine similarity and shows the closest matches.',
        ],
        'when' => [
            'Personal notes and journals',
            'Help centers and FAQ search',
            'Finding related posts on a blog',
            'Learning how vector search works',
        ],
        'features' => [
            'Search by meaning with a similarity score for every result',
            'Switch to plain keyword search to see the difference',
            'Add and delete notes, stored in IndexedDB',
            'Twelve sample notes to try right away',
            'Export all notes and their vectors as JSON',
        ],
        'steps' => [
            [
                'Turn text into numbers',
                'Each note becomes a list of 384 numbers that describes its meaning. Similar ideas get similar numbers.',
            ],
            [
                'Store the vectors',
                'Notes and their vectors are saved in IndexedDB, so they survive a page reload.',
            ],
            [
                'Compare',
                'Your search is turned into a vector too, and every note is ranked by how close its vector is.',
            ],
        ],
        'code' => 'import { pipeline } from "https://cdn.jsdelivr.net/npm/@huggingface/transformers@3.8.1";

const embed = await pipeline("feature-extraction", "Xenova/all-MiniLM-L6-v2");

// 384 numbers that describe the meaning of the text
const toVec = async (t) => Array.from((await embed(t, { pooling: "mean", normalize: true })).data);

const a = await toVec("Fix CORS error on the staging API");
const b = await toVec("server problem");

// Vectors are normalized, so cosine similarity is just a dot product
const score = a.reduce((sum, x, i) => sum + x * b[i], 0); // about 0.4',
        'browsers' => 'Any current Chrome, Edge, Firefox or Safari on desktop or mobile.',
        'faq' => [
            [
                'What is the difference between semantic search and keyword search?',
                'Keyword search matches words. Semantic search matches meaning. The demo lets you switch between them so you can see the difference on the same notes.',
            ],
            [
                'Do I need a vector database?',
                'Not for a few thousand notes. Comparing vectors in plain JavaScript is fast enough. A vector database helps when you reach hundreds of thousands of items.',
            ],
            [
                'Where are the notes stored?',
                'In IndexedDB, a database built into the browser. They stay on your device, and you can export them as JSON.',
            ],
        ],
    ],
    [
        'num' => 9,
        'cat' => '01-ai-in-the-browser',
        'slug' => '009-voice-command-controller',
        'name' => 'Voice Command Controller',
        'example' => 'control a smart home dashboard with your voice',
        'title' => 'Voice Commands in JavaScript: Web Speech API Smart Home Demo',
        'desc' => 'Free voice command project in plain JavaScript. Control lights, fan, TV and a door lock by speaking, with spoken replies, using the Web Speech API. Live demo included.',
        'keywords' => 'voice commands javascript, web speech api, speech recognition javascript, voice control website, speechsynthesis javascript',
        'runs' => 'Browser speech service',
        'what' => [
            'This demo is a smart home dashboard you control by talking. Say turn on the kitchen light, make it cooler, or switch off everything, and the dashboard updates and answers you out loud.',
            'It uses the Web Speech API, which has two parts. SpeechRecognition turns your voice into text, and speechSynthesis reads replies back. A small set of rules matches phrases to actions, so it understands natural wording, not just fixed commands.',
        ],
        'when' => [
            'Hands free controls for kiosks and dashboards',
            'Accessibility features for your site',
            'Voice search boxes',
            'Prototypes for smart home or car apps',
        ],
        'features' => [
            'Seven devices: two lights, fan, TV, air conditioner, music and door lock',
            'Natural phrases like “switch off everything” or “make it cooler”',
            'Spoken replies with speech synthesis, which you can mute',
            'Keep listening mode for hands-free use',
            'Type a command when you cannot use the microphone',
            'Log of every command and whether it was understood',
        ],
        'steps' => [
            [
                'Listen',
                'SpeechRecognition streams words as you speak, and the final phrase is passed on when you pause.',
            ],
            [
                'Understand',
                'A small parser finds the action (on, off, set, lock), the device and any number in the phrase.',
            ],
            [
                'Act and reply',
                'The device card updates, the log records the command, and the page speaks a short confirmation.',
            ],
        ],
        'code' => 'const SR = window.SpeechRecognition || window.webkitSpeechRecognition;
const rec = new SR();
rec.lang = "en-US";
rec.interimResults = true;

rec.onresult = (e) => {
  const r = e.results[e.results.length - 1];
  if (r.isFinal) handle(r[0].transcript); // "turn on the fan"
};
rec.start();

// Talk back
speechSynthesis.speak(new SpeechSynthesisUtterance("Fan is on"));',
        'browsers' => 'Voice input: Chrome, Edge and Safari (Chrome sends audio to Google\'s speech service). Typed commands and spoken replies: every modern browser.',
        'faq' => [
            [
                'Does the Web Speech API work in all browsers?',
                'Voice input works in Chrome, Edge and Safari. Firefox does not support it yet, so the demo also lets you type commands. Spoken replies work almost everywhere.',
            ],
            [
                'Is my voice sent to a server?',
                'In Chrome, yes: the audio goes to Google\'s speech service to be turned into text. Safari can process it on the device. The spoken replies are made locally.',
            ],
            [
                'Can I add my own commands?',
                'Yes. Commands are simple patterns in the code. Add a new pattern and the action it should run, and the controller picks it up.',
            ],
        ],
    ],
    [
        'num' => 10,
        'cat' => '01-ai-in-the-browser',
        'slug' => '010-barcode-qr-scanner',
        'name' => 'QR and Barcode Scanner',
        'example' => 'scan QR codes and barcodes with your camera',
        'title' => 'QR Code and Barcode Scanner in JavaScript (Camera, Free)',
        'desc' => 'Free QR code and barcode scanner in plain JavaScript. Scan with your camera or a photo, read QR, EAN, UPC and more, and make your own QR codes. Works on phones.',
        'keywords' => 'qr code scanner javascript, barcode scanner javascript, barcodedetector api, scan qr code from camera, qr code generator javascript',
        'runs' => 'Your device',
        'what' => [
            'Point your phone or laptop camera at a QR code or a product barcode and this page reads it instantly, drawing a box around the code it found. You can also upload a screenshot or photo, and there is a small QR maker so you can test it.',
            'It uses the BarcodeDetector API, which is built into Chrome on Android and some other browsers. Where it is missing, the page loads a small WebAssembly version of the ZXing scanner that works the same way.',
        ],
        'when' => [
            'Event check in and ticket scanning',
            'Stock and inventory apps',
            'Menu, payment and link QR codes',
            'Learning camera access in JavaScript',
        ],
        'features' => [
            'Live camera scanning with a box drawn around each code',
            'Scan from an uploaded photo or screenshot',
            'QR, EAN, UPC, Code 128, Data Matrix, PDF417 and more',
            'Built-in QR code maker to test with',
            'Face detection when the browser supports it',
            'Scan history with copy and safe link opening',
        ],
        'steps' => [
            [
                'Pick a detector',
                'The page uses the browser\'s own BarcodeDetector when it exists, otherwise it loads the same API backed by ZXing WebAssembly.',
            ],
            [
                'Scan frames',
                'About five times a second, the current camera frame is passed to detect(), which returns each code with its corner points.',
            ],
            [
                'Show results',
                'Corners are drawn on a canvas over the video, and new codes are added to the history with a short beep.',
            ],
        ],
        'code' => '// Native API, or the same API backed by ZXing WebAssembly
const Detector = "BarcodeDetector" in window
  ? window.BarcodeDetector
  : (await import("https://cdn.jsdelivr.net/npm/barcode-detector@3.2.2/dist/es/ponyfill.js")).BarcodeDetector;

const detector = new Detector({ formats: ["qr_code", "ean_13", "code_128"] });

// Works with <video>, <img>, <canvas>, ImageBitmap or a Blob
const codes = await detector.detect(videoElement);
for (const c of codes) console.log(c.format, c.rawValue, c.cornerPoints);',
        'browsers' => 'Native: Chrome and Edge on Android and macOS, Samsung Internet. Fallback: every modern browser. Camera needs HTTPS or localhost.',
        'faq' => [
            [
                'How do I scan a QR code with JavaScript?',
                'Get the camera with getUserMedia, show it in a video element, and pass frames to BarcodeDetector.detect(). This project shows the full loop with a fallback for browsers that lack the API.',
            ],
            [
                'Which barcode types can it read?',
                'QR, EAN 13, EAN 8, UPC A, UPC E, Code 128, Code 39, Data Matrix, PDF417, Aztec and more, depending on the browser.',
            ],
            [
                'Why does the camera not start?',
                'Browsers only allow the camera on HTTPS or localhost. On GitHub Pages it works, but opening the file straight from your disk will block it.',
            ],
        ],
    ],
    [
        'num' => 11,
        'cat' => '02-modern-ui',
        'slug' => '011-ui-component-library',
        'name' => 'UI Component Library',
        'example' => 'six reusable Web Components you can drop into any page',
        'title' => 'Web Components Tutorial: Build a UI Component Library in JavaScript',
        'desc' => 'Free UI component library in plain JavaScript. Six Web Components with Shadow DOM: button, toggle, tabs, rating, progress ring and accordion. Works with any framework.',
        'keywords' => 'web components tutorial, custom elements javascript, shadow dom example, ui component library, framework free components',
        'runs' => 'Custom Elements v1',
        'what' => [
            'Web Components let you make your own HTML tags, like <ui-toggle> or <ui-rating>, that work in any page and any framework. This project builds six of them: a button, a toggle switch, tabs, a star rating, a progress ring and an accordion.',
            'Each component is a JavaScript class that keeps its markup and styles inside a Shadow DOM, so nothing leaks in or out. They react when you change an attribute and fire normal events, which is why the same tag works in React, Vue or plain HTML.',
        ],
        'when' => [
            'Design systems shared across several apps',
            'Widgets you embed on other people\'s sites',
            'Teams that use more than one framework',
            'Learning how browsers build components',
        ],
        'features' => [
            'ui-button, ui-toggle, ui-tabs, ui-rating, ui-progress and ui-accordion',
            'Every component reacts to attribute changes',
            'Custom events you can listen to from any framework',
            'Theme with CSS custom properties that pierce the shadow root',
            'Keyboard and screen reader friendly',
        ],
        'steps' => [
            [
                'Define a class',
                'Each component extends HTMLElement and builds its markup inside an open shadow root.',
            ],
            [
                'Watch attributes',
                'observedAttributes lists what to watch, and attributeChangedCallback re-renders when one changes.',
            ],
            [
                'Talk to the page',
                'Components fire CustomEvents such as change, so any framework can listen with a normal event listener.',
            ],
        ],
        'code' => 'class UiToggle extends HTMLElement {
  static observedAttributes = ["checked", "label"];
  constructor() {
    super();
    this.attachShadow({ mode: "open" });
  }
  attributeChangedCallback() { this.render(); }
  toggle() {
    this.toggleAttribute("checked");
    this.dispatchEvent(new CustomEvent("change", { detail: this.hasAttribute("checked") }));
  }
  render() { /* build markup inside this.shadowRoot */ }
}
customElements.define("ui-toggle", UiToggle);',
        'browsers' => 'Every modern browser. Custom Elements and Shadow DOM have been supported everywhere since 2020.',
        'faq' => [
            [
                'Can I use Web Components in React?',
                'Yes. They are real HTML elements, so React can render them. Pass values as attributes and listen to their events with a ref or the onChange style props in React 19.',
            ],
            [
                'Do Web Components work in all browsers?',
                'Yes. Custom Elements and Shadow DOM have worked in Chrome, Edge, Firefox and Safari since 2020. No polyfill is needed.',
            ],
            [
                'How do I style a component from outside?',
                'Use CSS custom properties, like --ui-accent in this project. They pass through the Shadow DOM, so you can theme every component from one place.',
            ],
        ],
    ],
    [
        'num' => 12,
        'cat' => '02-modern-ui',
        'slug' => '012-view-transitions-gallery',
        'name' => 'View Transitions Gallery',
        'example' => 'a photo gallery where images grow smoothly into the detail page',
        'title' => 'View Transitions API Example: Smooth Photo Gallery in JavaScript',
        'desc' => 'Free View Transitions API gallery in plain JavaScript. Click a photo and it morphs into the detail view, with filters, back button support and a fallback.',
        'keywords' => 'view transitions api, page transition javascript, startviewtransition example, shared element transition css, spa animation',
        'runs' => 'View Transitions',
        'what' => [
            'Click a photo in the grid and it grows into the big detail view instead of just popping in. Press back and it shrinks home again. This kind of animation used to need a heavy library, and now the browser does it with one function call.',
            'The View Transitions API takes a picture of the page before and after a change, then animates between them. Give the small photo and the big photo the same view-transition-name and the browser moves one into the other.',
        ],
        'when' => [
            'Photo galleries and portfolios',
            'Online shops, from product list to product page',
            'Single page apps that feel smoother',
            'Filters that rearrange a grid',
        ],
        'features' => [
            'Shared element morph from grid to detail',
            'Filter the grid by category with animated reflow',
            'Back button and deep links work',
            'Instant fallback in browsers without the API',
            'Respects reduced motion settings',
        ],
        'steps' => [
            [
                'Name the element',
                'The clicked photo gets view-transition-name: hero, and so does the big photo on the detail view.',
            ],
            [
                'Swap the DOM',
                'The page calls startViewTransition and changes the DOM inside the callback. The browser snapshots before and after.',
            ],
            [
                'Let CSS animate',
                'The browser morphs the named element between its two positions. Everything else cross-fades.',
            ],
        ],
        'code' => '// Swap the view inside a transition
function open(photo) {
  const img = document.querySelector(`[data-id="${photo.id}"] img`);
  img.style.viewTransitionName = "hero"; // name it before

  document.startViewTransition(() => {
    img.style.viewTransitionName = "";
    renderDetail(photo); // big <img> also has view-transition-name: hero
  });
}
// CSS: ::view-transition-group(hero) { animation-duration: .45s; }',
        'browsers' => 'Chrome and Edge 111+, Safari 18+ and recent Firefox. Older browsers switch views instantly.',
        'faq' => [
            [
                'What is the View Transitions API?',
                'It is a browser feature that animates between two states of a page. You call document.startViewTransition() and change the page inside it, and the browser handles the animation.',
            ],
            [
                'Does it work in Firefox and Safari?',
                'Safari 18 and newer support it, and recent Firefox versions do too. In older browsers the page changes instantly, which is a safe fallback.',
            ],
            [
                'Can I control the animation?',
                'Yes. Use the ::view-transition pseudo elements in CSS to change the timing, easing or effect, just like normal CSS animations.',
            ],
        ],
    ],
    [
        'num' => 13,
        'cat' => '02-modern-ui',
        'slug' => '013-client-side-router',
        'name' => 'Client-side Router',
        'example' => 'a tiny single page app router with real URLs',
        'title' => 'JavaScript Router Tutorial: SPA Routing with the Navigation API',
        'desc' => 'Free client-side router in plain JavaScript using the Navigation API, with route parameters, a 404 page, loading states and a History API fallback.',
        'keywords' => 'javascript router, spa routing vanilla js, navigation api example, history api routing, single page app without framework',
        'runs' => 'Navigation API',
        'what' => [
            'A router lets a single page app change screens without reloading, while every screen still has its own URL. Links, the back button and bookmarks all work. This project builds a small router in about 60 lines.',
            'It uses the Navigation API, a newer browser feature made for exactly this job. One navigate event catches every link click and back button press, and the router decides what to show. Older browsers fall back to the History API.',
        ],
        'when' => [
            'Small apps that do not need a framework',
            'Docs sites and dashboards',
            'Learning how React Router and others work',
            'Static sites on GitHub Pages',
        ],
        'features' => [
            'Routes with parameters like /post/:id',
            'Loading state for slow pages, with cancel on fast clicks',
            '404 page for unknown routes',
            'Active link styling and document title per page',
            'Works on static hosting because routes live in the query string',
        ],
        'steps' => [
            [
                'Catch navigations',
                'The navigate event fires for link clicks, form submits and back or forward. The router checks if it can handle the URL.',
            ],
            [
                'Intercept',
                'event.intercept() stops the full page load and runs the route handler instead. The URL still updates.',
            ],
            [
                'Render',
                'The matching route renders into the page. If the user clicks again quickly, the signal aborts the old load.',
            ],
        ],
        'code' => 'navigation.addEventListener("navigate", (event) => {
  const url = new URL(event.destination.url);
  if (!event.canIntercept || url.origin !== location.origin) return;

  event.intercept({
    async handler() {
      const page = await loadRoute(url, { signal: event.signal });
      outlet.replaceChildren(page); // URL already updated
    },
  });
});',
        'browsers' => 'Navigation API: Chrome and Edge 102+, plus the newest Safari and Firefox releases. Older browsers use the History API fallback.',
        'faq' => [
            [
                'What is the Navigation API?',
                'It is a modern replacement for the History API. It gives you one navigate event for every kind of navigation, and event.intercept() to handle it in JavaScript.',
            ],
            [
                'Why are routes in the query string?',
                'Static hosts like GitHub Pages return 404 for unknown paths. Keeping routes in ?r= means a refresh always loads the same file, so it works anywhere.',
            ],
            [
                'Can it load data for a route?',
                'Yes. Route handlers can be async. The demo waits for a fake API, and a fast second click cancels the first load with the event\'s AbortSignal.',
            ],
        ],
    ],
    [
        'num' => 14,
        'cat' => '02-modern-ui',
        'slug' => '014-popover-anchor-ui',
        'name' => 'Popovers Without Libraries',
        'example' => 'tooltips, menus, toasts and a side sheet with no library',
        'title' => 'Popover API and CSS Anchor Positioning: Tooltips and Menus Without JS',
        'desc' => 'Free popover examples in plain HTML, CSS and JavaScript. Dropdown menu, tooltips, toasts and a side sheet using the Popover API and CSS anchor positioning.',
        'keywords' => 'popover api, css anchor positioning, tooltip without javascript, dropdown menu html, popovertarget example',
        'runs' => 'Popover API',
        'what' => [
            'Dropdowns, tooltips and toasts are on almost every site, and they used to need a positioning library. The new popover attribute handles showing, hiding, the Esc key and clicks outside. CSS anchor positioning places the popup right next to its button.',
            'This project shows four common patterns built that way, with only a little JavaScript for the parts that need it. Browsers without anchor positioning get a tiny script that places things by hand.',
        ],
        'when' => [
            'Dropdown and context menus',
            'Help tooltips on forms',
            'Notifications and toasts',
            'Settings panels and side sheets',
        ],
        'features' => [
            'Dropdown menu that flips when it hits the screen edge',
            'Hover and focus tooltips',
            'Toast notifications that stack and dismiss themselves',
            'Side sheet with light dismiss (click outside or Esc)',
            'JavaScript fallback placement when CSS anchors are missing',
        ],
        'steps' => [
            [
                'Mark it as a popover',
                'Add popover to any element. It starts hidden and appears in the top layer, above everything, when opened.',
            ],
            [
                'Connect a button',
                'popovertarget on a button opens and closes it, with Esc and outside clicks handled by the browser.',
            ],
            [
                'Anchor it',
                'anchor-name on the button and position-anchor on the popover place it right next to the button, flipping if needed.',
            ],
        ],
        'code' => '<!-- Opens and closes with no JavaScript -->
<button id="menuBtn" popovertarget="menu">Options</button>
<div id="menu" popover>…</div>

<style>
  #menuBtn { anchor-name: --menu; }
  #menu {
    position-anchor: --menu;
    position-area: bottom span-right;          /* below, aligned left */
    position-try-fallbacks: flip-block;        /* flip up near the bottom edge */
  }
</style>',
        'browsers' => 'Popover: every modern browser. CSS anchor positioning: Chrome and Edge 125+, Safari 26+. Others get a small JavaScript fallback.',
        'faq' => [
            [
                'What is the Popover API?',
                'It is an HTML attribute, popover, that turns any element into a popup shown in the top layer. A button with popovertarget opens and closes it, with no JavaScript needed.',
            ],
            [
                'What is CSS anchor positioning?',
                'It lets you tie one element\'s position to another, like a menu to its button, in pure CSS. It can also flip the menu when it would go off screen.',
            ],
            [
                'Which browsers support it?',
                'Popover works in every modern browser. Anchor positioning is in Chrome, Edge and Safari 26. The project falls back to JavaScript placement elsewhere.',
            ],
        ],
    ],
    [
        'num' => 15,
        'cat' => '02-modern-ui',
        'slug' => '015-signals-state-library',
        'name' => 'Signals State Library',
        'example' => 'a 40 line reactive state library running a shopping cart',
        'title' => 'JavaScript Signals Tutorial: Build Reactive State from Scratch',
        'desc' => 'Free signals library in plain JavaScript. Build signal, computed and effect in about 40 lines, the idea behind Solid, Vue and Angular, with a live shopping cart demo.',
        'keywords' => 'javascript signals, reactive state management, signal computed effect, fine grained reactivity, build your own framework',
        'runs' => 'Signals, computed, effect',
        'what' => [
            'Signals are how many modern frameworks know exactly what to update when data changes. Instead of redrawing the whole page, only the numbers that depend on a change are updated. Solid, Preact, Vue and Angular all use this idea.',
            'This project writes a complete signals library in about 40 lines, then uses it to run a shopping cart. A counter next to each effect shows how many times it ran, so you can see that only the right parts update.',
        ],
        'when' => [
            'Small apps that need reactive state',
            'Understanding how frameworks work inside',
            'Job interviews about reactivity',
            'Adding live updates to plain HTML',
        ],
        'features' => [
            'signal(), computed() and effect() with automatic dependency tracking',
            'Batched updates so effects run once per change',
            'Live counter of how many times each effect ran',
            'Shopping cart demo: quantities, discount code, totals',
            'The whole library source shown on the page',
        ],
        'steps' => [
            [
                'Track reads',
                'When an effect runs, every signal it reads adds that effect to its subscriber list.',
            ],
            [
                'Notify on write',
                'Setting a signal schedules each subscriber once, in a microtask, so many writes cause one update.',
            ],
            [
                'Derive values',
                'computed() is an effect that writes into its own signal, so it caches and updates only when its inputs change.',
            ],
        ],
        'code' => 'let current = null;
export function signal(value) {
  const subs = new Set();
  const read = () => { if (current) subs.add(current); return value; };
  read.set = (v) => { if (v !== value) { value = v; subs.forEach(schedule); } };
  return read;
}
export function effect(fn) {
  const run = () => { const prev = current; current = run; try { fn(); } finally { current = prev; } };
  run();
}
export function computed(fn) {
  const s = signal(); effect(() => s.set(fn())); return s;
}',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'What is a signal in JavaScript?',
                'A signal is a value that remembers who reads it. When you change it, everything that read it runs again. computed() builds values from other signals, and effect() runs code when they change.',
            ],
            [
                'Are signals coming to JavaScript itself?',
                'There is a TC39 proposal to add signals to the language. Until then, small libraries like this one, or Preact Signals, give you the same idea.',
            ],
            [
                'Is this fast enough for real apps?',
                'For small and medium apps, yes. Updates are batched in a microtask, so ten writes in a row cause one update.',
            ],
        ],
    ],
    [
        'num' => 16,
        'cat' => '02-modern-ui',
        'slug' => '016-infinite-scroll-feed',
        'name' => 'Infinite Scroll Feed',
        'example' => 'a photo feed that loads more posts as you scroll',
        'title' => 'Infinite Scroll in JavaScript with Intersection Observer (Lazy Loading)',
        'desc' => 'Free infinite scroll feed in plain JavaScript. Load posts as you scroll, lazy load images and track seen posts with Intersection Observer. Skeleton loaders included.',
        'keywords' => 'infinite scroll javascript, intersection observer example, lazy load images javascript, skeleton loader css, social media feed ui',
        'runs' => 'Intersection Observer',
        'what' => [
            'This is a social style photo feed that keeps loading new posts as you scroll down. Images load only when they are about to appear, placeholder cards show while posts load, and a counter tracks which posts you actually saw.',
            'All three tricks use the Intersection Observer API, which tells you when an element enters the screen without constant scroll checks. It is faster and simpler than the old scroll event approach.',
        ],
        'when' => [
            'Social feeds and news sites',
            'Product lists in online shops',
            'Image galleries',
            'Tracking which items users really viewed',
        ],
        'features' => [
            'Loads the next page when a sentinel nears the viewport',
            'Skeleton cards while loading',
            'Images lazy load with a fade in',
            'Seen counter: a post counts once it is 60% visible',
            'Back to top button that appears after the first screen',
        ],
        'steps' => [
            [
                'Watch a sentinel',
                'An empty element sits under the last post. When it gets within 600 px of the screen, the next page loads.',
            ],
            [
                'Lazy load images',
                'A second observer swaps data-src into src only when an image is about to be seen.',
            ],
            [
                'Track views',
                'A third observer with threshold 0.6 marks each post as seen the first time most of it is visible.',
            ],
        ],
        'code' => 'const loadMore = new IntersectionObserver(([entry]) => {
  if (entry.isIntersecting) fetchNextPage();
}, { rootMargin: "600px" });           // start 600px before the end
loadMore.observe(document.querySelector("#sentinel"));

const lazy = new IntersectionObserver((entries) => {
  for (const e of entries) if (e.isIntersecting) {
    e.target.src = e.target.dataset.src;  // swap in the real image
    lazy.unobserve(e.target);
  }
}, { rootMargin: "300px" });',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'Is infinite scroll bad for SEO?',
                'It can be if content only loads on scroll. Give each page of results its own URL too, so search engines can reach every item.',
            ],
            [
                'Why use Intersection Observer instead of the scroll event?',
                'The scroll event fires many times a second and forces layout checks. Intersection Observer only tells you when something crosses into view, so it is much lighter.',
            ],
            [
                'How do I connect it to a real API?',
                'Replace the fakeApi function with a fetch call that takes a page number and returns posts. The rest of the code stays the same.',
            ],
        ],
    ],
    [
        'num' => 17,
        'cat' => '02-modern-ui',
        'slug' => '017-responsive-dashboard-widgets',
        'name' => 'Responsive Dashboard Widgets',
        'example' => 'dashboard widgets that change layout when you resize them',
        'title' => 'CSS Container Queries Example: Responsive Dashboard Widgets',
        'desc' => 'Free responsive dashboard in HTML, CSS and JavaScript. Resize any widget and it switches layout with container queries, while ResizeObserver redraws the charts.',
        'keywords' => 'container queries css, responsive dashboard template, resizeobserver javascript, container query units, canvas charts javascript',
        'runs' => 'CSS Container Queries',
        'what' => [
            'Drag the corner of any widget on this dashboard and watch it change: a small widget shows just the number, a wider one adds a chart, and a big one adds details. Each widget decides its layout from its own width, not the screen width.',
            'That is what CSS container queries do. The same widget works in a narrow sidebar or a wide main area without extra code. ResizeObserver tells JavaScript the new size so the canvas charts stay sharp.',
        ],
        'when' => [
            'Admin and analytics dashboards',
            'Reusable cards in design systems',
            'Sidebars and layouts users can resize',
            'Learning container queries',
        ],
        'features' => [
            'Four widgets: revenue, visitors, tasks and weather',
            'Three layouts per widget: small, medium and large',
            'Drag handles to resize, plus preset layouts',
            'Charts redraw crisply at any size and pixel density',
            'Live size readout on each widget',
        ],
        'steps' => [
            [
                'Make it a container',
                'Each widget has container-type: inline-size, so its children can ask how wide the widget is.',
            ],
            [
                'Style by size',
                '@container rules switch the layout at 260 px and 440 px of widget width, whatever the page width.',
            ],
            [
                'Redraw on resize',
                'ResizeObserver reports the new size and the canvas chart is redrawn to fit, sharp on high density screens.',
            ],
        ],
        'code' => '.widget { container-type: inline-size; resize: both; overflow: hidden; }

/* The widget, not the screen, decides the layout */
@container (min-width: 260px) { .widget canvas { display: block; } }
@container (min-width: 440px) { .widget .body { display: grid; grid-template-columns: auto 1fr; } }

// Keep the canvas sharp at every size
new ResizeObserver(([entry]) => {
  const { width, height } = entry.contentRect;
  canvas.width = width * devicePixelRatio;
  canvas.height = height * devicePixelRatio;
  draw();
}).observe(canvas);',
        'browsers' => 'Every modern browser (container queries since 2023).',
        'faq' => [
            [
                'What is the difference between media queries and container queries?',
                'Media queries look at the screen size. Container queries look at the size of a parent element, so a component adapts to wherever you place it.',
            ],
            [
                'Do container queries work everywhere?',
                'Yes. All major browsers have supported them since 2023.',
            ],
            [
                'Why do the charts need JavaScript?',
                'Canvas has a fixed pixel size. ResizeObserver reports the new size, and the chart is redrawn at the right resolution for sharp lines.',
            ],
        ],
    ],
    [
        'num' => 18,
        'cat' => '02-modern-ui',
        'slug' => '018-kanban-board',
        'name' => 'Kanban Board',
        'example' => 'a Trello style task board with drag and drop',
        'title' => 'Kanban Board in JavaScript: Drag and Drop Trello Clone (Free)',
        'desc' => 'Free kanban board in plain JavaScript. Drag cards between columns, add labels and due dates, search, and save automatically with localStorage. Keyboard friendly.',
        'keywords' => 'kanban board javascript, trello clone javascript, drag and drop javascript, task board html css js, todo app localstorage',
        'runs' => 'HTML Drag and Drop',
        'what' => [
            'A kanban board shows work as cards moving through columns: To do, In progress and Done. This one lets you drag cards between columns, add new ones with labels and due dates, search every column, and it saves everything in your browser.',
            'It uses the built in HTML Drag and Drop API, with a line that shows where a card will land. Every card also has move buttons and arrow key support, so it works for keyboard users and on phones.',
        ],
        'when' => [
            'Personal task lists',
            'Small team planning',
            'Content calendars',
            'A classic portfolio project done well',
        ],
        'features' => [
            'Drag cards within and between columns, with a drop indicator',
            'Move cards with buttons or the keyboard for accessibility',
            'Colored labels and due dates, overdue cards stand out',
            'Search filters every column at once',
            'Export and import the board as JSON',
        ],
        'steps' => [
            [
                'Start the drag',
                'dragstart stores the card id in dataTransfer and dims the card.',
            ],
            [
                'Find the spot',
                'dragover compares the mouse position with the middle of each card to show where it will land.',
            ],
            [
                'Drop and save',
                'drop moves the card in the data, renders the board again and saves it to localStorage.',
            ],
        ],
        'code' => 'card.addEventListener("dragstart", (e) => {
  e.dataTransfer.setData("text/plain", card.dataset.id);
});
column.addEventListener("dragover", (e) => {
  e.preventDefault();                                   // allow dropping
  const after = [...list.children].find((c) => e.clientY < c.getBoundingClientRect().top + c.offsetHeight / 2);
  list.insertBefore(marker, after ?? null);             // show where it lands
});
column.addEventListener("drop", (e) => {
  moveCard(e.dataTransfer.getData("text/plain"), column.dataset.id, indexOf(marker));
});',
        'browsers' => 'Drag and drop: desktop browsers. On phones, use the move buttons on each card.',
        'faq' => [
            [
                'How does drag and drop work in plain JavaScript?',
                'Set draggable on the card, save its id in dragstart, call preventDefault in dragover to allow a drop, and move the card in the drop handler.',
            ],
            [
                'Does drag and drop work on phones?',
                'The HTML Drag and Drop API is weak on touch screens, so each card has move buttons as well. They work everywhere.',
            ],
            [
                'Where is my board saved?',
                'In localStorage in your browser. Use Export to save a JSON copy, and Import to load it on another computer.',
            ],
        ],
    ],
    [
        'num' => 19,
        'cat' => '02-modern-ui',
        'slug' => '019-color-picker-palette',
        'name' => 'Color Picker and Palette Tool',
        'example' => 'a color picker that pulls palettes from photos and checks contrast',
        'title' => 'Color Palette Generator in JavaScript with EyeDropper and Contrast Checker',
        'desc' => 'Free color tool in plain JavaScript. Pick any color on screen with the EyeDropper API, get a palette from a photo, make shades and check WCAG contrast.',
        'keywords' => 'color palette generator, eyedropper api javascript, color picker javascript, wcag contrast checker, palette from image',
        'runs' => 'EyeDropper',
        'what' => [
            'This tool helps you choose colors that look good and stay readable. Pick a color from anywhere on your screen, pull the main colors out of a photo, make matching harmonies and shades, and check whether text on each color passes accessibility rules.',
            'The screen picker uses the EyeDropper API. The photo palette shrinks the image on a canvas and groups similar pixels. The contrast check uses the same formula as the WCAG guidelines.',
        ],
        'when' => [
            'Choosing brand colors',
            'Building a palette from a product photo',
            'Checking button and text contrast',
            'Generating CSS color variables',
        ],
        'features' => [
            'Screen color picker with the EyeDropper API',
            'Palette from any photo using color quantization',
            'Complementary, analogous and triadic harmonies plus 9 shades',
            'WCAG AA and AAA contrast check for text on any background',
            'Copy as HEX, RGB, HSL or a block of CSS variables',
        ],
        'steps' => [
            [
                'Pick a color',
                'The EyeDropper returns the hex value of any pixel on screen, even outside the browser window.',
            ],
            [
                'Read a photo',
                'The photo is shrunk to 64 by 64 pixels, then the pixels are grouped into buckets to find the main colors.',
            ],
            [
                'Check contrast',
                'Each color\'s luminance is compared with the text color to get a ratio, and the page marks AA and AAA passes.',
            ],
        ],
        'code' => '// Pick any pixel on screen (Chrome, Edge)
const { sRGBHex } = await new EyeDropper().open(); // "#c2255c"

// WCAG contrast ratio between two colors
const lum = ([r, g, b]) => {
  const f = (c) => (c /= 255) <= 0.03928 ? c / 12.92 : ((c + 0.055) / 1.055) ** 2.4;
  return 0.2126 * f(r) + 0.7152 * f(g) + 0.0722 * f(b);
};
const ratio = (a, b) => (Math.max(lum(a), lum(b)) + 0.05) / (Math.min(lum(a), lum(b)) + 0.05);
// 4.5 or more passes AA for body text',
        'browsers' => 'EyeDropper: Chrome and Edge on desktop. Everything else works in every modern browser.',
        'faq' => [
            [
                'What contrast ratio do I need?',
                'WCAG asks for at least 4.5 to 1 for normal text and 3 to 1 for large text. 7 to 1 meets the stricter AAA level.',
            ],
            [
                'Which browsers have the EyeDropper API?',
                'Chrome and Edge on desktop. The other features work in every modern browser.',
            ],
            [
                'How is the palette taken from a photo?',
                'The photo is drawn at 64 by 64 pixels, pixels are grouped into color buckets, and the most common distinct buckets become the palette.',
            ],
        ],
    ],
    [
        'num' => 20,
        'cat' => '02-modern-ui',
        'slug' => '020-accessible-dialog-forms',
        'name' => 'Accessible Modal and Form Kit',
        'example' => 'an accessible sign up form inside a native dialog',
        'title' => 'Accessible Modal Dialog and Form Validation in JavaScript (dialog Element)',
        'desc' => 'Free accessible modal and form kit in plain JavaScript. Native dialog with focus handling, live error messages and custom validation with the Constraint Validation API.',
        'keywords' => 'accessible modal javascript, dialog element showmodal, form validation javascript, constraint validation api, aria live errors',
        'runs' => 'dialog, showModal()',
        'what' => [
            'Pop up forms are where many sites fail keyboard and screen reader users. This kit shows a sign up form in a modal, a confirm dialog and a slide in drawer, all built on the native dialog element so the browser handles focus and the Esc key.',
            'The form uses the built in Constraint Validation API with friendly messages under each field. Errors are announced by screen readers, the first bad field gets focus, and focus returns to the button that opened the dialog.',
        ],
        'when' => [
            'Sign up and login forms',
            'Delete and confirm prompts',
            'Filter drawers in shops',
            'Meeting accessibility rules',
        ],
        'features' => [
            'Sign-up form in a modal with focus trap and Esc to close',
            'Errors appear under each field and are read out by screen readers',
            'Custom rules: password strength and matching passwords',
            'Confirm dialog that returns the user\'s choice',
            'Slide-in drawer built on the same dialog element',
        ],
        'steps' => [
            [
                'Open as modal',
                'showModal() puts the dialog in the top layer, makes the page behind inert and moves focus inside.',
            ],
            [
                'Validate on the fly',
                'Each field is checked on blur and on submit using the browser\'s own ValidityState, with friendly messages.',
            ],
            [
                'Close and return focus',
                'When the dialog closes, focus goes back to the button that opened it, and returnValue says which button was used.',
            ],
        ],
        'code' => 'dialog.showModal();                         // focus moves in, page behind is inert

input.addEventListener("blur", () => {
  const v = input.validity;                 // built-in ValidityState
  const msg = v.valueMissing ? "Enter your email"
            : v.typeMismatch ? "That does not look like an email" : "";
  input.setAttribute("aria-invalid", !!msg);
  errorEl.textContent = msg;                // aria-live reads it out
});

dialog.addEventListener("close", () => {
  console.log(dialog.returnValue);          // "create" or "cancel"
  openButton.focus();                       // give focus back
});',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'Why use the dialog element instead of a div?',
                'showModal() makes the rest of the page inert, puts the dialog on top and moves focus into it. With a div you have to build all of that yourself.',
            ],
            [
                'How do I show custom error messages?',
                'Check the field\'s validity object, like validity.valueMissing, and write your own message into an element linked with aria-describedby.',
            ],
            [
                'Is the form accessible for screen readers?',
                'Yes. Errors are in aria-live regions, invalid fields get aria-invalid, and every input has a real label.',
            ],
        ],
    ],
    [
        'num' => 21,
        'cat' => '03-pwa-and-offline',
        'slug' => '021-offline-todo-pwa',
        'name' => 'Offline-first Todo PWA',
        'example' => 'a todo app you can install that works with no internet',
        'title' => 'Offline Todo App PWA in JavaScript with a Service Worker (Free)',
        'desc' => 'Free offline todo PWA in plain JavaScript. A service worker caches the app so it works with no internet, tasks are saved in IndexedDB, and you can install it.',
        'keywords' => 'pwa tutorial, service worker example, offline web app javascript, installable pwa, indexeddb todo app',
        'runs' => 'Service Worker, Cache',
        'what' => [
            'This todo list works like an app on your phone or computer. You can install it, open it with Wi-Fi off, and keep adding tasks. Nothing is lost, and there is no server at all.',
            'A service worker saves the page files on the first visit and answers from that cache afterward. Tasks are stored in IndexedDB. The page also shows when you are offline and offers an update button when a new version is ready.',
        ],
        'when' => [
            'Learning how PWAs work',
            'Apps used on trains, planes and bad networks',
            'Simple internal tools',
            'A base for any offline first app',
        ],
        'features' => [
            'Works offline after the first visit',
            'Install button using the beforeinstallprompt event',
            'Online and offline status badge',
            'Filters: all, active, done, plus clear completed',
            'Update banner when a new version of the service worker is ready',
        ],
        'steps' => [
            [
                'Install the worker',
                'On first load, sw.js caches index.html, the manifest and the fonts.',
            ],
            [
                'Serve from cache',
                'Every later request is answered from the cache first, so the page opens instantly and works with no network.',
            ],
            [
                'Keep data local',
                'Tasks live in IndexedDB. There is no server, so offline and online behave the same.',
            ],
        ],
        'code' => '// sw.js: cache the app shell, then answer from cache first
const CACHE = "todo-v1";
self.addEventListener("install", (e) => {
  e.waitUntil(caches.open(CACHE).then((c) => c.addAll(["./", "./index.html", "./manifest.webmanifest"])));
});
self.addEventListener("fetch", (e) => {
  e.respondWith(caches.match(e.request).then((hit) => hit || fetch(e.request).then((res) => {
    const copy = res.clone(); caches.open(CACHE).then((c) => c.put(e.request, copy)); return res;
  })));
});
// index.html
navigator.serviceWorker.register("sw.js");',
        'browsers' => 'Every modern browser. Install prompt: Chrome, Edge and Samsung Internet. On iPhone use Share, then Add to Home Screen.',
        'faq' => [
            [
                'What makes a web app a PWA?',
                'A web app manifest, a service worker and HTTPS. Together they let the browser install the app and run it offline.',
            ],
            [
                'How do I test offline mode?',
                'Load the page once, then open DevTools, go to Network and choose Offline, or turn off Wi-Fi. Reload and the app still opens.',
            ],
            [
                'Can I install it on an iPhone?',
                'Yes. Open it in Safari, tap Share, then Add to Home Screen.',
            ],
        ],
    ],
    [
        'num' => 22,
        'cat' => '03-pwa-and-offline',
        'slug' => '022-expense-tracker-pwa',
        'name' => 'Expense Tracker PWA',
        'example' => 'a spending tracker with charts that syncs when back online',
        'title' => 'Expense Tracker in JavaScript with Charts, IndexedDB and Background Sync',
        'desc' => 'Free expense tracker PWA in plain JavaScript. Log spending, see a donut chart and a 7 day bar chart, set a budget and sync offline entries with Background Sync.',
        'keywords' => 'expense tracker javascript, budget app pwa, background sync api, indexeddb example, canvas chart javascript',
        'runs' => 'Background Sync',
        'what' => [
            'Log what you spend by category and see where the money goes, with a donut chart by category, a bar chart for the last seven days and a monthly budget bar. You can export everything to CSV.',
            'Entries are saved in IndexedDB first. If you are offline, they are marked as waiting, and the Background Sync API wakes the service worker to send them once you are online, even if the tab is closed.',
        ],
        'when' => [
            'Personal budgeting',
            'Apps used on poor mobile networks',
            'Learning Background Sync',
            'Canvas charts without a library',
        ],
        'features' => [
            'Add expenses with amount, category, note and date',
            'Donut chart by category and bar chart for the last 7 days',
            'Monthly budget with a progress bar',
            'Offline entries show as waiting, then sync automatically',
            'Export to CSV',
        ],
        'steps' => [
            [
                'Save locally first',
                'Every expense goes into IndexedDB right away, marked as not yet synced.',
            ],
            [
                'Ask for a sync',
                'The page registers a sync tag. The browser wakes the service worker when it is online, even if the tab is closed.',
            ],
            [
                'Flush the outbox',
                'The worker sends waiting entries to the server (simulated here) and tells the page, which marks them synced.',
            ],
        ],
        'code' => '// Page: save locally, then ask the browser to sync when online
await db.put("expenses", { ...expense, synced: false });
const reg = await navigator.serviceWorker.ready;
await reg.sync.register("sync-expenses");

// sw.js: runs when the connection is back, even if the tab is closed
self.addEventListener("sync", (event) => {
  if (event.tag === "sync-expenses") event.waitUntil(sendUnsynced());
});',
        'browsers' => 'App and charts: every modern browser. Background Sync: Chrome, Edge and Samsung Internet. Other browsers sync when the page is open and online.',
        'faq' => [
            [
                'What is the Background Sync API?',
                'It lets a web app ask the browser to run a task when the connection comes back. The service worker gets a sync event and can send saved data.',
            ],
            [
                'Which browsers support Background Sync?',
                'Chrome, Edge and Samsung Internet. In other browsers this app syncs when the page is open and online.',
            ],
            [
                'Are the charts made with a library?',
                'No. Both charts are drawn with the Canvas 2D API in about 20 lines each.',
            ],
        ],
    ],
    [
        'num' => 23,
        'cat' => '03-pwa-and-offline',
        'slug' => '023-reminder-notifications',
        'name' => 'Reminder Notifications',
        'example' => 'a reminder app with Done and Snooze buttons in the notification',
        'title' => 'Web Push Notifications in JavaScript: Reminder App with Service Worker',
        'desc' => 'Free reminder app in plain JavaScript. Set reminders that show as system notifications with Done and Snooze buttons, handled by a service worker, plus push setup code.',
        'keywords' => 'push notifications javascript, notifications api example, service worker notification actions, web push tutorial, reminder app pwa',
        'runs' => 'Notifications, Push',
        'what' => [
            'Set a reminder, switch to another app, and a real system notification appears on time. You can tap Done or Snooze right inside the notification, and the page updates to match.',
            'The page asks for notification permission, and the service worker shows the notification with action buttons and handles the tap. For reminders when the app is closed, the project includes the Push API subscription code your server would use.',
        ],
        'when' => [
            'Reminder and habit apps',
            'Order and delivery updates',
            'Learning notification actions',
            'The starting point for web push',
        ],
        'features' => [
            'Quick reminders: 10 seconds, 1 minute, 5 minutes or a custom time',
            'Done and Snooze 5 min buttons inside the notification',
            'Notification click brings this page to the front',
            'Push subscription button that prints the JSON your server needs',
            'Reminders are saved, so a reload keeps them',
        ],
        'steps' => [
            [
                'Ask permission',
                'The browser asks once. Without permission, reminders still show inside the page.',
            ],
            [
                'Show from the worker',
                'registration.showNotification() creates a system notification with action buttons.',
            ],
            [
                'Handle the tap',
                'The service worker gets notificationclick, snoozes or completes the reminder, and focuses the page.',
            ],
        ],
        'code' => 'const reg = await navigator.serviceWorker.register("sw.js");
await Notification.requestPermission();                // "granted"

reg.showNotification("Stand up and stretch", {
  body: "Reminder from your to-do app",
  actions: [{ action: "done", title: "Done" }, { action: "snooze", title: "Snooze 5 min" }],
  tag: "reminder-42", requireInteraction: true,
});

// sw.js
self.addEventListener("notificationclick", (e) => {
  e.notification.close();
  if (e.action === "snooze") { /* tell the page to reschedule */ }
});',
        'browsers' => 'Notifications: every modern desktop browser, Android, and iPhone once the app is added to the Home Screen. Timers only run while the page is open; use Push for closed apps.',
        'faq' => [
            [
                'How do I show a notification from JavaScript?',
                'Ask with Notification.requestPermission(), then call registration.showNotification() on your service worker registration. That version supports action buttons.',
            ],
            [
                'Do notifications work on iPhone?',
                'Yes, on iOS 16.4 and later, but only after the web app is added to the Home Screen.',
            ],
            [
                'Why do timed reminders need the page open?',
                'Browsers do not let pages set timers that fire after they close. For that you need server push, which is why the Push API code is included.',
            ],
        ],
    ],
    [
        'num' => 24,
        'cat' => '03-pwa-and-offline',
        'slug' => '024-markdown-editor',
        'name' => 'Local Markdown Editor',
        'example' => 'a Markdown editor that saves real files on your disk',
        'title' => 'Markdown Editor in JavaScript with File System Access API (Save Files)',
        'desc' => 'Free Markdown editor in plain JavaScript. Open and save real .md files with the File System Access API, see a live preview, and keep drafts. Includes a small parser.',
        'keywords' => 'markdown editor javascript, file system access api, save file javascript, markdown to html javascript, live preview editor',
        'runs' => 'File System Access',
        'what' => [
            'Open a .md file from your computer, edit it with a live preview next to it, and press Ctrl S to save straight back to the same file. It feels like a desktop app, but it is a single web page.',
            'Saving uses the File System Access API, which gives the page a handle to a real file after you pick it. The preview comes from a small Markdown parser in the project that escapes HTML first for safety.',
        ],
        'when' => [
            'Writing notes and docs',
            'Editing README files',
            'Learning how Markdown parsers work',
            'Offline writing tools',
        ],
        'features' => [
            'Open, Save and Save as, straight to files on your disk',
            'Ctrl+S saves to the same file after the first save',
            'Live preview with headings, lists, links, images, code, quotes and tables',
            'Draft autosave in the browser',
            'Word count and reading time',
        ],
        'steps' => [
            [
                'Get a file handle',
                'The picker returns a handle to the real file. The page keeps it so later saves need no dialog.',
            ],
            [
                'Render as you type',
                'Each keystroke runs the parser, which escapes HTML first and then adds Markdown formatting.',
            ],
            [
                'Write back',
                'handle.createWritable() streams the new text into the same file on disk.',
            ],
        ],
        'code' => '// Open a real file and keep its handle
const [handle] = await showOpenFilePicker({
  types: [{ description: "Markdown", accept: { "text/markdown": [".md"] } }],
});
editor.value = await (await handle.getFile()).text();

// Later: save back to the same file, no dialog
const writable = await handle.createWritable();
await writable.write(editor.value);
await writable.close();',
        'browsers' => 'Direct file saving: Chrome and Edge on desktop. Other browsers download a copy instead.',
        'faq' => [
            [
                'What is the File System Access API?',
                'It lets a web page open and save files on your computer after you pick them, so you can edit a file in place instead of downloading copies.',
            ],
            [
                'Which browsers can save files directly?',
                'Chrome and Edge on desktop. In other browsers Save downloads a copy of the file instead.',
            ],
            [
                'Which Markdown features are supported?',
                'Headings, bold, italic, links, images, lists, quotes, code blocks, tables and horizontal lines. That covers most READMEs and notes.',
            ],
        ],
    ],
    [
        'num' => 25,
        'cat' => '03-pwa-and-offline',
        'slug' => '025-share-target-link-saver',
        'name' => 'Share Target Link Saver',
        'example' => 'a reading list app that appears in your phone\'s share menu',
        'title' => 'Web Share API and Share Target in JavaScript: Link Saver PWA',
        'desc' => 'Free link saver PWA in plain JavaScript. Install it and it appears in your phone\'s share menu, saving any link you share. Share links back out with the Web Share API.',
        'keywords' => 'web share target api, web share api example, navigator share javascript, pwa share sheet, reading list app',
        'runs' => 'Web Share, Share Target',
        'what' => [
            'Install this app on Android and it shows up next to WhatsApp and email when you share a link from any app. Pick it, and the link lands in your reading list with its title.',
            'The manifest declares a share_target, so the system opens the page with the shared title, text and URL in the address. The Web Share API sends saved links back out through the normal share sheet.',
        ],
        'when' => [
            'Reading lists and bookmark tools',
            'Apps that collect links or photos',
            'Making a PWA feel native on Android',
            'Learning the Web Share API',
        ],
        'features' => [
            'Appears in the system share sheet once installed',
            'Saves the title, text and URL that other apps share',
            'Share any saved link back out, or the whole list as a text file',
            'Tags and search',
            'Test the share target right here with the simulate button',
        ],
        'steps' => [
            [
                'Register as a target',
                'The manifest declares share_target with an action URL and the names of the title, text and url parameters.',
            ],
            [
                'Receive a share',
                'When you share to the app, the OS opens index.html?title=...&text=...&url=... and the page saves it.',
            ],
            [
                'Share back out',
                'navigator.share() opens the native share sheet with a saved link, or with a file when canShare allows it.',
            ],
        ],
        'code' => '// manifest.webmanifest
"share_target": {
  "action": "./index.html",
  "method": "GET",
  "params": { "title": "title", "text": "text", "url": "url" }
}

// index.html: read what was shared
const p = new URLSearchParams(location.search);
if (p.has("url") || p.has("text")) saveLink(p.get("title"), p.get("url") || p.get("text"));

// Share back out
await navigator.share({ title: link.title, url: link.url });',
        'browsers' => 'Share target: installed PWA on Android (Chrome, Edge, Samsung Internet) and ChromeOS. Web Share: Android, iPhone, Safari, Edge and Chrome on Windows and ChromeOS.',
        'faq' => [
            [
                'What is a Web Share Target?',
                'It is a manifest setting that lets an installed web app receive shares from other apps, the same way native apps do.',
            ],
            [
                'Does it work on iPhone?',
                'The Web Share API for sending works in Safari. Receiving shares as a target is not supported on iOS yet.',
            ],
            [
                'How do I test it without a phone?',
                'Use the Simulate a share button. It opens the page with the same address parameters the system would send.',
            ],
        ],
    ],
    [
        'num' => 26,
        'cat' => '03-pwa-and-offline',
        'slug' => '026-multi-tab-sync',
        'name' => 'Multi-tab Sync',
        'example' => 'open it in several tabs and watch them stay in sync',
        'title' => 'Sync Browser Tabs in JavaScript with BroadcastChannel and Web Locks',
        'desc' => 'Free multi-tab sync demo in plain JavaScript. A shared note, counter, theme and list of open tabs stay in sync with BroadcastChannel, with leader election by Web Locks.',
        'keywords' => 'broadcastchannel api, sync tabs javascript, web locks api, cross tab communication, leader election javascript',
        'runs' => 'BroadcastChannel',
        'what' => [
            'Open this page in two or three tabs and type in one. The others update right away: a shared note, a counter, the theme and a live list of open tabs. No server is involved.',
            'Tabs talk through BroadcastChannel, which sends messages between pages from the same site. The Web Locks API picks one tab as the leader, which is useful when only one tab should poll a server or play a sound.',
        ],
        'when' => [
            'Keeping login state the same in every tab',
            'Shopping carts across tabs',
            'Only one tab polling a server',
            'Logging out everywhere at once',
        ],
        'features' => [
            'Shared note that updates in every tab as you type',
            'Shared counter with a history of who changed it',
            'Theme switch that applies to all tabs',
            'Live list of open tabs with a heartbeat',
            'Leader election: exactly one tab is the leader, and another takes over when it closes',
        ],
        'steps' => [
            [
                'Join the channel',
                'Every tab opens a BroadcastChannel with the same name and announces itself with a random id.',
            ],
            [
                'Broadcast changes',
                'Edits are sent as small messages. Other tabs apply them and save the latest state to localStorage.',
            ],
            [
                'Elect a leader',
                'Each tab asks for the same Web Lock. Only one gets it. When that tab closes, the lock passes to the next tab.',
            ],
        ],
        'code' => 'const channel = new BroadcastChannel("my-app");
channel.postMessage({ type: "note", text: "Hello from tab A" });
channel.onmessage = (e) => { if (e.data.type === "note") note.value = e.data.text; };

// Only one tab at a time holds this lock: that tab is the leader
navigator.locks.request("leader", () => {
  becomeLeader();
  return new Promise(() => {});   // hold the lock until the tab closes
});',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'What is BroadcastChannel?',
                'It is a simple message channel between tabs, windows and workers from the same origin. You post a message and every other listener receives it.',
            ],
            [
                'What does leader election mean?',
                'It means one tab is chosen to do a job for all of them. Here, each tab asks for the same Web Lock and only one gets it at a time.',
            ],
            [
                'Does it work across different browsers?',
                'No. BroadcastChannel only connects tabs in the same browser profile. For different devices you need a server.',
            ],
        ],
    ],
    [
        'num' => 27,
        'cat' => '03-pwa-and-offline',
        'slug' => '027-instant-blog-speculation-rules',
        'name' => 'Instant-loading Blog',
        'example' => 'a blog where the next page is ready before you click',
        'title' => 'Speculation Rules API: Instant Page Loads with Prerender (JavaScript Demo)',
        'desc' => 'Free instant-loading blog in plain JavaScript. The Speculation Rules API prerenders posts while you hover, so they open almost instantly. Timing shows the difference.',
        'keywords' => 'speculation rules api, prerender pages, instant page load, core web vitals lcp, prefetch on hover',
        'runs' => 'Speculation Rules',
        'what' => [
            'Hover over a post title for a moment, then click. The page opens almost instantly because the browser already built it in the background. A timer at the top shows how fast the page appeared and whether it was prerendered.',
            'This uses the Speculation Rules API, a small JSON block that tells the browser which links it may prerender and how eager to be. You can switch between eager, moderate and conservative to see the trade off.',
        ],
        'when' => [
            'Blogs and news sites',
            'Product pages in shops',
            'Improving Largest Contentful Paint',
            'Multi page sites that want app like speed',
        ],
        'features' => [
            'Prerenders post pages when you hover or press on a link',
            'Timer shows how fast this page appeared and whether it was prerendered',
            'Choose eagerness: conservative, moderate or eager',
            'Works on static hosting, posts live in the query string',
            'No effect in browsers without support, links work as normal',
        ],
        'steps' => [
            [
                'Declare the rules',
                'A JSON script tag says which links may be prerendered and how eager the browser should be.',
            ],
            [
                'Prerender on hover',
                'With moderate eagerness, holding the pointer on a link for about 200 ms starts building that page in a hidden tab.',
            ],
            [
                'Swap on click',
                'Clicking activates the finished page. activationStart shows it was prerendered and how much time was saved.',
            ],
        ],
        'code' => '<script type="speculationrules">
{
  "prerender": [{
    "where": { "href_matches": "/*\\\\?post=*" },
    "eagerness": "moderate"
  }]
}
</script>
<script>
  const nav = performance.getEntriesByType("navigation")[0];
  const wasPrerendered = nav.activationStart > 0;
</script>',
        'browsers' => 'Prerendering: Chrome and Edge 109+. Other browsers load pages normally.',
        'faq' => [
            [
                'What are speculation rules?',
                'A script tag of type speculationrules with JSON inside. It lists URLs the browser may prefetch or prerender before the user clicks.',
            ],
            [
                'Does prerendering waste data?',
                'It can, which is why moderate eagerness waits for a short hover. Only pages people are likely to open get prerendered.',
            ],
            [
                'Which browsers support it?',
                'Chrome and Edge. Other browsers ignore the rules and load pages normally, so nothing breaks.',
            ],
        ],
    ],
    [
        'num' => 28,
        'cat' => '04-security-and-auth',
        'slug' => '028-passkey-login',
        'name' => 'Passkey Login Demo',
        'example' => 'sign up and sign in with your fingerprint instead of a password',
        'title' => 'Passkeys Tutorial: WebAuthn Login Demo in JavaScript (No Password)',
        'desc' => 'Free passkey login demo in plain JavaScript. Register and sign in with fingerprint, face or PIN using WebAuthn, and see the signature checked step by step.',
        'keywords' => 'passkeys javascript, webauthn tutorial, passwordless login, navigator credentials create, fido2 example',
        'runs' => 'WebAuthn (passkeys)',
        'what' => [
            'Passkeys replace passwords with your phone or laptop\'s screen lock. This demo lets you create one and sign in with it, and shows every step of what happens in between.',
            'It uses the WebAuthn API. Your device makes a key pair, keeps the private key and shares only the public key. At sign in it signs a random challenge, and the page checks that signature with the Web Crypto API.',
        ],
        'when' => [
            'Learning how passkeys really work',
            'Adding passwordless login to a site',
            'Security talks and workshops',
            'Testing authenticators and password managers',
        ],
        'features' => [
            'Register a passkey with the device\'s screen lock',
            'Sign in with it, with or without typing a username',
            'Signature verified with the stored public key, in the browser',
            'Step log showing challenge, client data and authenticator data',
            'Delete local accounts to start over',
        ],
        'steps' => [
            [
                'Register',
                'The page sends a random challenge. Your device makes a new key pair, keeps the private key, and returns the public key.',
            ],
            [
                'Sign in',
                'A new challenge goes to the device, which signs it after you unlock with your fingerprint, face or PIN.',
            ],
            [
                'Verify',
                'The signature is checked against the saved public key. In a real app your server does this step, never the browser.',
            ],
        ],
        'code' => '// Register: the device makes a key pair and returns the public key
const cred = await navigator.credentials.create({ publicKey: {
  challenge: crypto.getRandomValues(new Uint8Array(32)),
  rp: { name: "My App" },
  user: { id: userId, name: "rafi@example.com", displayName: "Rafi" },
  pubKeyCredParams: [{ type: "public-key", alg: -7 }],   // ES256
  authenticatorSelection: { residentKey: "required", userVerification: "preferred" },
}});
// Sign in: the device signs a new challenge
const assertion = await navigator.credentials.get({ publicKey: { challenge, userVerification: "preferred" } });
// Server: verify assertion.response.signature with the saved public key',
        'browsers' => 'Chrome, Edge, Safari and Firefox on devices with a screen lock, plus password managers that store passkeys. Needs HTTPS or localhost.',
        'faq' => [
            [
                'Are passkeys safer than passwords?',
                'Yes. There is no shared secret to steal or reuse, and they only work on the real site, so phishing pages cannot use them.',
            ],
            [
                'Is this demo enough for a real app?',
                'No. In a real app the server makes the challenge and checks the signature. This demo does it in the browser so you can see each step.',
            ],
            [
                'Which devices support passkeys?',
                'Almost all current phones and computers with a screen lock, in Chrome, Edge, Safari and Firefox, plus password managers that store passkeys.',
            ],
        ],
    ],
    [
        'num' => 29,
        'cat' => '04-security-and-auth',
        'slug' => '029-password-manager',
        'name' => 'Client-side Password Manager',
        'example' => 'an encrypted password vault that only your master password opens',
        'title' => 'Build a Password Manager in JavaScript with Web Crypto (AES-GCM)',
        'desc' => 'Free password manager in plain JavaScript. An encrypted vault with AES-GCM and PBKDF2, a password generator, strength meter, auto lock and encrypted export.',
        'keywords' => 'password manager javascript, web crypto api example, aes gcm javascript, pbkdf2 javascript, password generator javascript',
        'runs' => 'AES-GCM 256',
        'what' => [
            'This is a small password vault that lives in your browser. Everything is encrypted before it is saved, so the stored data is useless without your master password. It also makes strong passwords and locks itself after two minutes.',
            'Your master password is stretched with PBKDF2 600,000 times to make a key, and the vault is encrypted with AES-GCM. A wrong password fails the built in integrity check, so nothing is ever shown by mistake.',
        ],
        'when' => [
            'Learning real browser encryption',
            'Storing secrets in a local tool',
            'Understanding how password managers work',
            'Security coursework',
        ],
        'features' => [
            'Vault encrypted with AES-GCM, key derived with PBKDF2 SHA-256',
            'Password generator with length and character options',
            'Strength meter with an estimated crack time',
            'Auto lock after 2 minutes of no activity',
            'Search, copy, and export the encrypted vault',
        ],
        'steps' => [
            [
                'Stretch the password',
                'Your master password and a random salt go through PBKDF2 600,000 times to make a 256-bit key.',
            ],
            [
                'Encrypt the vault',
                'The whole list is turned into JSON and encrypted with AES-GCM and a fresh random IV on every save.',
            ],
            [
                'Unlock',
                'Only the salt, IV and ciphertext are stored. A wrong password fails the AES-GCM integrity check, so nothing is shown.',
            ],
        ],
        'code' => 'const salt = crypto.getRandomValues(new Uint8Array(16));
const base = await crypto.subtle.importKey("raw", new TextEncoder().encode(master), "PBKDF2", false, ["deriveKey"]);
const key = await crypto.subtle.deriveKey(
  { name: "PBKDF2", salt, iterations: 600_000, hash: "SHA-256" },
  base, { name: "AES-GCM", length: 256 }, false, ["encrypt", "decrypt"]);

const iv = crypto.getRandomValues(new Uint8Array(12));   // new IV every save
const data = await crypto.subtle.encrypt({ name: "AES-GCM", iv }, key,
  new TextEncoder().encode(JSON.stringify(vault)));
// Store salt + iv + data. A wrong password makes decrypt() throw.',
        'browsers' => 'Every modern browser. This is a learning project: for real passwords use an audited password manager.',
        'faq' => [
            [
                'Is it safe to use for my real passwords?',
                'It is a learning project. The encryption is strong, but use an audited password manager for real accounts.',
            ],
            [
                'Why 600,000 PBKDF2 rounds?',
                'It makes each guess slow. That is the current OWASP advice for PBKDF2 with SHA-256, and it takes under a second on a normal laptop.',
            ],
            [
                'What happens if I forget the master password?',
                'The vault cannot be opened. There is no reset, because nobody else holds a copy of the key.',
            ],
        ],
    ],
    [
        'num' => 30,
        'cat' => '04-security-and-auth',
        'slug' => '030-file-encryptor',
        'name' => 'Secure File Encryptor',
        'example' => 'lock any file with a password, right in your browser',
        'title' => 'Encrypt Files in the Browser with JavaScript (AES-GCM, Password)',
        'desc' => 'Free file encryptor in plain JavaScript. Lock any file with a password using AES-GCM 256 and PBKDF2, and unlock it later. No upload, the file never leaves your computer.',
        'keywords' => 'encrypt file javascript, aes gcm file encryption, password protect file online, web crypto api, decrypt file browser',
        'runs' => 'AES-GCM 256',
        'what' => [
            'Drop any file, like a PDF, photo or zip, pick a password and download a locked copy. Only someone with the password can open it again. The file never leaves your computer.',
            'The page stretches your password with PBKDF2, encrypts the file with AES-GCM and saves a small header with the salt and IV. Unlocking reads that header, rebuilds the key and checks the file was not changed.',
        ],
        'when' => [
            'Sending private files by email or chat',
            'Backups on cloud storage',
            'Learning file encryption',
            'Tools for teams that handle sensitive data',
        ],
        'features' => [
            'Works with any file type: PDFs, photos, zips, documents',
            'Keeps the original file name inside the locked file',
            'Password strength check and a matching confirm field',
            'Integrity check: a wrong password or a changed file is detected',
            'Shows the file format byte by byte so you can learn it',
        ],
        'steps' => [
            [
                'Make a key',
                'A random 16 byte salt and your password go through PBKDF2 to make an AES key.',
            ],
            [
                'Encrypt',
                'The file name and bytes are encrypted together with AES-GCM and a random 12 byte IV.',
            ],
            [
                'Pack the file',
                'Output is a header (magic word, version, salt, IV) followed by the ciphertext. Unlocking reads the header back.',
            ],
        ],
        'code' => 'const MAGIC = new TextEncoder().encode("VJLENC");
const salt = crypto.getRandomValues(new Uint8Array(16));
const iv = crypto.getRandomValues(new Uint8Array(12));
const key = await deriveKey(password, salt);          // PBKDF2, 600k rounds

const plain = new Uint8Array(await file.arrayBuffer());
const cipher = await crypto.subtle.encrypt({ name: "AES-GCM", iv }, key, plain);

const locked = new Blob([MAGIC, new Uint8Array([1]), salt, iv, cipher]);
// Unlock: read the header back, derive the same key, decrypt()',
        'browsers' => 'Every modern browser. Large files (over about 1 GB) may run out of memory.',
        'faq' => [
            [
                'How strong is AES-GCM 256?',
                'It is the same encryption used by banks and messaging apps. With a strong password, the locked file cannot be opened by guessing.',
            ],
            [
                'Can I unlock the file on another computer?',
                'Yes. Open this page anywhere, drop the .locked file and enter the password.',
            ],
            [
                'Is there a file size limit?',
                'The file is read into memory, so very large files, over about 1 GB, may fail on some devices.',
            ],
        ],
    ],
    [
        'num' => 31,
        'cat' => '04-security-and-auth',
        'slug' => '031-totp-authenticator',
        'name' => 'TOTP 2FA Authenticator',
        'example' => 'an authenticator app that makes six digit 2FA codes',
        'title' => 'TOTP in JavaScript: Build a Google Authenticator Style 2FA App',
        'desc' => 'Free TOTP authenticator in plain JavaScript. Make six digit 2FA codes with HMAC-SHA1, add accounts from a secret or otpauth link, make QR codes and verify codes.',
        'keywords' => 'totp javascript, two factor authentication javascript, google authenticator clone, rfc 6238, otpauth qr code',
        'runs' => 'TOTP, RFC 6238',
        'what' => [
            'The six digit codes in apps like Google Authenticator come from a shared secret and the current time. This project does that math live for as many accounts as you like, with a countdown ring for each code.',
            'It follows RFC 6238. The current time is split into 30 second steps, the step number is signed with HMAC-SHA1 using your secret, and a short part of the result becomes the code. The page is tested against the official test values.',
        ],
        'when' => [
            'Learning how 2FA codes work',
            'Adding 2FA to your own app',
            'Testing login flows',
            'Security interviews and courses',
        ],
        'features' => [
            'Live codes with a 30 second countdown ring',
            'Add accounts by secret or by pasting an otpauth:// link',
            'Generate a new secret with a QR code to scan into any app',
            'Check a code against a secret with a time window of plus or minus one step',
            'Copy a code with one click',
        ],
        'steps' => [
            [
                'Count time steps',
                'The current Unix time is divided by 30 to get a counter that changes every 30 seconds.',
            ],
            [
                'Sign the counter',
                'The counter, as 8 bytes, is signed with HMAC SHA-1 using the account\'s secret as the key.',
            ],
            [
                'Truncate',
                'Four bytes are picked from the signature using its last nibble, turned into a number, and cut to 6 digits.',
            ],
        ],
        'code' => 'async function totp(base32Secret, step = 30, digits = 6) {
  const counter = Math.floor(Date.now() / 1000 / step);
  const msg = new DataView(new ArrayBuffer(8));
  msg.setUint32(4, counter);                              // 8 byte big-endian counter
  const key = await crypto.subtle.importKey("raw", base32Decode(base32Secret),
    { name: "HMAC", hash: "SHA-1" }, false, ["sign"]);
  const h = new Uint8Array(await crypto.subtle.sign("HMAC", key, msg.buffer));
  const o = h[19] & 0xf;                                  // dynamic truncation
  const n = ((h[o] & 0x7f) << 24) | (h[o + 1] << 16) | (h[o + 2] << 8) | h[o + 3];
  return String(n % 10 ** digits).padStart(digits, "0");
}',
        'browsers' => 'Every modern browser. Secrets are stored unencrypted in this demo, so do not use it for real accounts.',
        'faq' => [
            [
                'How does TOTP work?',
                'The server and your app share a secret. Both sign the current 30 second time step with it, so they get the same six digit code without talking to each other.',
            ],
            [
                'Can I use this instead of Google Authenticator?',
                'It is a learning project and stores secrets without encryption, so keep using a real authenticator for your accounts.',
            ],
            [
                'Why was my code rejected?',
                'Usually the device clock is off. This project accepts one step before and after to allow for small drift.',
            ],
        ],
    ],
    [
        'num' => 32,
        'cat' => '05-media-and-realtime',
        'slug' => '032-webrtc-video-call',
        'name' => 'Video Call App',
        'example' => 'a peer to peer video call between two browsers',
        'title' => 'WebRTC Video Call in JavaScript: Peer to Peer, No Server (Free)',
        'desc' => 'Free WebRTC video call in plain JavaScript. Camera, mute, screen share and live stats. Connect two tabs automatically or two devices by copying a code.',
        'keywords' => 'webrtc video call javascript, peer to peer video chat, rtcpeerconnection example, screen sharing webrtc, webrtc without server',
        'runs' => 'WebRTC',
        'what' => [
            'This is a real video call where audio and video go straight from one browser to the other. Test it with two tabs on the same computer, or send a short code to a friend to connect two devices.',
            'WebRTC handles the camera, the connection and the media. The two sides only need to swap a description of the call once, and here that happens through a tab channel or through codes you copy and paste.',
        ],
        'when' => [
            'Learning how WebRTC works',
            'Support and tutoring apps',
            'Screen sharing tools',
            'Private one to one calls',
        ],
        'features' => [
            'Two-tab mode connects automatically over BroadcastChannel',
            'Two-device mode: copy the offer code, paste back the answer code',
            'Mute, camera off and screen share (switches the track without reconnecting)',
            'Live stats: bitrate, resolution, frame rate and round trip time',
            'Uses a public STUN server to find a direct route between networks',
        ],
        'steps' => [
            [
                'Get media',
                'getUserMedia turns on the camera and microphone and shows your own video.',
            ],
            [
                'Swap descriptions',
                'One side makes an offer, the other an answer. They reach each other through a tab channel or through codes you copy.',
            ],
            [
                'Connect directly',
                'ICE finds a network path, then audio and video flow peer to peer with no server in the middle.',
            ],
        ],
        'code' => 'const pc = new RTCPeerConnection({ iceServers: [{ urls: "stun:stun.l.google.com:19302" }] });
stream.getTracks().forEach((t) => pc.addTrack(t, stream));
pc.ontrack = (e) => (remoteVideo.srcObject = e.streams[0]);

// Caller
await pc.setLocalDescription(await pc.createOffer());
send(pc.localDescription);                 // any channel: tabs, codes, WebSocket...

// Callee
await pc.setRemoteDescription(offer);
await pc.setLocalDescription(await pc.createAnswer());
send(pc.localDescription);',
        'browsers' => 'Every modern browser. Needs HTTPS or localhost. Some strict company or mobile networks need a TURN server, which this demo does not include.',
        'faq' => [
            [
                'Do I need a server for WebRTC?',
                'Only to swap the first connection details, called signaling. This demo avoids a server by using copy and paste or a tab channel.',
            ],
            [
                'Why does the call fail on some networks?',
                'Strict company or mobile networks block direct connections. Real apps add a TURN server to relay the media in those cases.',
            ],
            [
                'How does screen sharing work here?',
                'getDisplayMedia gets the screen, and replaceTrack swaps it into the call without reconnecting.',
            ],
        ],
    ],
    [
        'num' => 33,
        'cat' => '05-media-and-realtime',
        'slug' => '033-screen-recorder',
        'name' => 'Screen Recorder',
        'example' => 'record your screen with your voice and your face in the corner',
        'title' => 'Screen Recorder in JavaScript with MediaRecorder and getDisplayMedia',
        'desc' => 'Free screen recorder in plain JavaScript. Record a screen, window or tab with your microphone and a webcam bubble, then preview and download the video.',
        'keywords' => 'screen recorder javascript, getdisplaymedia example, mediarecorder api, record screen with audio, webcam overlay',
        'runs' => 'Screen Capture, MediaRecorder',
        'what' => [
            'Record your whole screen, one window or one tab, talk over it and add your face in a round bubble in the corner. When you stop, watch it back and save the file. Nothing is uploaded.',
            'getDisplayMedia opens the browser\'s own picker for what to share. The screen and webcam are drawn onto one canvas, the microphone and screen audio are mixed with Web Audio, and MediaRecorder turns it all into a video file.',
        ],
        'when' => [
            'Tutorials and bug reports',
            'Product demos',
            'Recording lessons',
            'Learning browser media APIs',
        ],
        'features' => [
            'Record the whole screen, one window or one tab',
            'Mix microphone and system or tab audio together',
            'Webcam bubble drawn into the corner of the video',
            'Pause and resume, with a live timer and file size',
            'Preview and download as WebM or MP4 where supported',
        ],
        'steps' => [
            [
                'Pick what to share',
                'The browser shows its own picker for screens, windows and tabs. The page never sees anything you did not pick.',
            ],
            [
                'Mix the sources',
                'Screen video and webcam are drawn onto one canvas. Microphone and screen audio are mixed with an AudioContext.',
            ],
            [
                'Record',
                'MediaRecorder turns the combined stream into video chunks. On stop they become one file you can play or save.',
            ],
        ],
        'code' => 'const screen = await navigator.mediaDevices.getDisplayMedia({ video: true, audio: true });
const mic = await navigator.mediaDevices.getUserMedia({ audio: true });

// Mix screen audio and microphone into one track
const ctx = new AudioContext(), out = ctx.createMediaStreamDestination();
[screen, mic].forEach((s) => s.getAudioTracks().length && ctx.createMediaStreamSource(s).connect(out));

const stream = new MediaStream([...screen.getVideoTracks(), ...out.stream.getAudioTracks()]);
const rec = new MediaRecorder(stream, { mimeType: "video/webm;codecs=vp9,opus" });
rec.ondataavailable = (e) => chunks.push(e.data);
rec.onstop = () => download(new Blob(chunks, { type: rec.mimeType }));
rec.start(1000);',
        'browsers' => 'Chrome, Edge and Firefox on desktop. Safari records screens but not tab audio. Phones cannot share their screen from a web page.',
        'faq' => [
            [
                'What format are the recordings?',
                'WebM in most browsers, and MP4 where the browser supports recording it. Both play in modern browsers and editors.',
            ],
            [
                'Can it record system sound?',
                'Tab audio works in Chrome and Edge when you share a tab. Full system audio depends on the operating system.',
            ],
            [
                'Does it work on phones?',
                'No. Mobile browsers do not let web pages share the screen yet.',
            ],
        ],
    ],
    [
        'num' => 34,
        'cat' => '05-media-and-realtime',
        'slug' => '034-browser-video-editor',
        'name' => 'Browser Video Editor',
        'example' => 'trim a clip, add a filter and a title, and export an MP4',
        'title' => 'Video Editor in JavaScript: Trim and Export MP4 with WebCodecs',
        'desc' => 'Free browser video editor in plain JavaScript. Trim a clip, add a filter and a title, and export a real MP4 with the WebCodecs VideoEncoder. No upload.',
        'keywords' => 'webcodecs api, video editor javascript, trim video browser, export mp4 javascript, videoencoder example',
        'runs' => 'WebCodecs VideoEncoder',
        'what' => [
            'Load a video, drag two handles to trim it, pick a color filter, add a title and export an MP4. Every frame is processed and encoded inside your browser, so the video is never uploaded.',
            'The page plays the clip and grabs each frame, draws it on a canvas with the filter and title, and sends it to the WebCodecs VideoEncoder. The mp4-muxer library packs the encoded frames into an MP4 file.',
        ],
        'when' => [
            'Quick social clips',
            'Trimming screen recordings',
            'Learning WebCodecs',
            'Building a custom video tool',
        ],
        'features' => [
            'Timeline with 10 thumbnails and trim handles',
            'Filters: grayscale, sepia, vivid, fade, blur',
            'Title text burned into the video',
            'Export as MP4 with H.264, VP9 or AV1, whichever your browser can encode',
            'Export progress and final file size',
        ],
        'steps' => [
            [
                'Pick frames',
                'The video plays from the in point to the out point. requestVideoFrameCallback hands over each frame as it is shown.',
            ],
            [
                'Edit the frame',
                'Each frame is drawn on a canvas with the filter and title, then wrapped in a VideoFrame with its timestamp.',
            ],
            [
                'Encode and pack',
                'VideoEncoder compresses the frames. mp4-muxer puts the chunks into an MP4 file you can download.',
            ],
        ],
        'code' => 'import { Muxer, ArrayBufferTarget } from "https://cdn.jsdelivr.net/npm/mp4-muxer@5.2.2/+esm";

const muxer = new Muxer({ target: new ArrayBufferTarget(), video: { codec: "avc", width, height }, fastStart: "in-memory" });
const encoder = new VideoEncoder({ output: (chunk, meta) => muxer.addVideoChunk(chunk, meta), error: console.error });
encoder.configure({ codec: "avc1.42001f", width, height, bitrate: 4e6, framerate: 30 });

video.requestVideoFrameCallback(function onFrame(now, info) {
  ctx.drawImage(video, 0, 0);                                   // plus filter and title
  const frame = new VideoFrame(canvas, { timestamp: (info.mediaTime - start) * 1e6 });
  encoder.encode(frame, { keyFrame: n++ % 60 === 0 }); frame.close();
  video.requestVideoFrameCallback(onFrame);
});',
        'browsers' => 'WebCodecs: Chrome, Edge, Safari 17+ and Firefox 130+ on desktop. Audio is not included in the export in this version.',
        'faq' => [
            [
                'What is WebCodecs?',
                'It is a browser API that gives JavaScript direct access to video and audio encoders and decoders. It is much faster than older canvas recording tricks.',
            ],
            [
                'Is audio included in the export?',
                'Not in this version. The video track is exported. Audio can be added with AudioEncoder in the same way.',
            ],
            [
                'Which codec does it use?',
                'It picks the first your browser can encode: H.264, then VP9, then AV1.',
            ],
        ],
    ],
    [
        'num' => 35,
        'cat' => '05-media-and-realtime',
        'slug' => '035-collaborative-whiteboard',
        'name' => 'Collaborative Whiteboard',
        'example' => 'a shared drawing board with live cursors',
        'title' => 'Collaborative Whiteboard in JavaScript: Canvas Drawing with Live Cursors',
        'desc' => 'Free real time whiteboard in plain JavaScript. Pen, shapes, eraser, undo and live cursors, synced between tabs instantly or across devices with a tiny WebSocket server.',
        'keywords' => 'collaborative whiteboard javascript, canvas drawing app, real time drawing websocket, live cursors, pointer events',
        'runs' => 'Canvas 2D, Pointer Events',
        'what' => [
            'Sketch, write and draw shapes on a board that other people see live. Open a second tab and every line appears there as you draw it, with a named cursor for each person.',
            'Drawing uses Canvas and Pointer Events, with pen pressure on tablets. The board is stored as a list of strokes, sent as small messages over BroadcastChannel between tabs or over a WebSocket between devices.',
        ],
        'when' => [
            'Team brainstorming',
            'Online tutoring',
            'Learning real time sync',
            'Multiplayer canvas apps',
        ],
        'features' => [
            'Pen, highlighter, line, rectangle, ellipse and eraser',
            'Pressure-sensitive strokes on pens and tablets',
            'Undo and redo your own strokes',
            'Live cursors with names for everyone on the board',
            'Export the board as PNG, and it survives a reload',
        ],
        'steps' => [
            [
                'Capture strokes',
                'Pointer events are collected into a stroke: tool, color, width and a list of points with pressure.',
            ],
            [
                'Share strokes',
                'Each new point is sent to the others as a small message, so they see the line as it is being drawn.',
            ],
            [
                'Redraw from data',
                'The board is a list of strokes. Undo removes one and the canvas is redrawn from the list.',
            ],
        ],
        'code' => 'board.addEventListener("pointermove", (e) => {
  if (!drawing) return sendCursor(e);
  for (const p of e.getCoalescedEvents()) {          // every point, not just one per frame
    stroke.points.push([p.offsetX, p.offsetY, p.pressure || 0.5]);
  }
  drawSegment(stroke);
  send({ type: "points", id: stroke.id, points: stroke.points.slice(-3) });
});
// Others apply the same data and redraw
channel.onmessage = ({ data }) => apply(data);',
        'browsers' => 'Every modern browser, with touch, mouse and pen. For devices on different networks, run the included server.js.',
        'faq' => [
            [
                'How do I use it across different devices?',
                'Run the included server.js with Node, then enter its ws:// address in the page on each device.',
            ],
            [
                'Does it support pens and tablets?',
                'Yes. Pointer Events give pressure data, and pen strokes get thicker when you press harder.',
            ],
            [
                'How does undo work with several people?',
                'Undo removes your own last stroke only, and tells the others to remove it too.',
            ],
        ],
    ],
    [
        'num' => 36,
        'cat' => '05-media-and-realtime',
        'slug' => '036-music-visualizer',
        'name' => 'Music Visualizer',
        'example' => 'turn music into moving bars, waves and a glowing ring',
        'title' => 'Audio Visualizer in JavaScript with the Web Audio API and Canvas',
        'desc' => 'Free music visualizer in plain JavaScript. Bars, waveform and a glowing ring react to a built in synth loop, your own songs or your microphone, using Web Audio.',
        'keywords' => 'audio visualizer javascript, web audio api example, analysernode, canvas music visualizer, microphone visualizer',
        'runs' => 'Web Audio AnalyserNode',
        'what' => [
            'Play the built in beat, drop in a song or sing into your microphone, and the screen moves with the sound. Pick bars, a waveform or a glowing ring, and change the colors and sensitivity.',
            'The Web Audio API sends the sound through an AnalyserNode, which splits it into frequency bands many times a second. Canvas turns those numbers into shapes. Even the demo beat is made in code with oscillators.',
        ],
        'when' => [
            'Music players and podcasts',
            'Live event screens',
            'Learning Web Audio',
            'Fun portfolio projects',
        ],
        'features' => [
            'Built-in synth loop made with oscillators, so no audio file is needed',
            'Play your own MP3, WAV or OGG files, or use the microphone',
            'Three styles: frequency bars, waveform and radial ring',
            'Beat pulse that reacts to the bass',
            'Color themes, sensitivity and a fullscreen button',
        ],
        'steps' => [
            [
                'Route the sound',
                'The source (synth, file or mic) goes through an AnalyserNode on its way to the speakers.',
            ],
            [
                'Read frequencies',
                'Every frame, the analyser runs a fast Fourier transform and returns loudness for 128 frequency bands.',
            ],
            [
                'Draw',
                'Each band becomes a bar, a point on a wave or a spoke on the ring. The average of the lowest bands drives the beat pulse.',
            ],
        ],
        'code' => 'const ctx = new AudioContext();
const analyser = ctx.createAnalyser();
analyser.fftSize = 256;                               // 128 frequency bands
source.connect(analyser).connect(ctx.destination);

const bins = new Uint8Array(analyser.frequencyBinCount);
(function draw() {
  analyser.getByteFrequencyData(bins);                // 0 to 255 per band
  bins.forEach((v, i) => canvas.fillRect(i * w, H - v, w - 2, v));
  requestAnimationFrame(draw);
})();',
        'browsers' => 'Every modern browser. Sound starts only after you click, as browsers require.',
        'faq' => [
            [
                'How does an audio visualizer work?',
                'An AnalyserNode runs a fast Fourier transform on the sound and returns loudness per frequency band. You draw each band as a bar or point.',
            ],
            [
                'Why does nothing play until I click?',
                'Browsers block sound until the user interacts with the page. The first click starts the audio.',
            ],
            [
                'Is the microphone sound played back?',
                'No. It is only analyzed, so there is no echo or feedback.',
            ],
        ],
    ],
    [
        'num' => 37,
        'cat' => '05-media-and-realtime',
        'slug' => '037-webgpu-particles',
        'name' => 'WebGPU Particle Playground',
        'example' => 'up to a million glowing particles that follow your mouse',
        'title' => 'WebGPU Tutorial: Particle Simulation with Compute Shaders in JavaScript',
        'desc' => 'Free WebGPU particle simulation in plain JavaScript. Move up to 1,000,000 particles with a compute shader and your mouse, with gravity and color controls and a fallback.',
        'keywords' => 'webgpu tutorial, wgsl compute shader, particle system javascript, gpu simulation browser, webgpu example',
        'runs' => 'WebGPU',
        'what' => [
            'Move your mouse over the canvas and a cloud of glowing particles follows it. With WebGPU you can push up to a million of them, and your graphics card moves every one each frame.',
            'A compute shader written in WGSL updates each particle\'s position and speed. A render pass reads the same buffer and draws the particles with additive blending. Browsers without WebGPU get a smaller Canvas 2D version.',
        ],
        'when' => [
            'Learning WebGPU and WGSL',
            'Hero backgrounds and art pieces',
            'GPU simulation basics',
            'Showing off in a portfolio',
        ],
        'features' => [
            'Up to 1,000,000 particles on WebGPU, 20,000 on the fallback',
            'Mouse or touch attraction, hold Shift or right click to push away',
            'Gravity, particle size and color controls',
            'Live frames per second and particle count',
            'Burst button to throw particles from the center',
        ],
        'steps' => [
            [
                'Fill a buffer',
                'Each particle is 4 floats: position and velocity. They all live in one GPU storage buffer.',
            ],
            [
                'Simulate on the GPU',
                'A compute shader runs once per particle, in groups of 64, adding gravity and the pull toward the pointer.',
            ],
            [
                'Draw',
                'The render pass reads the same buffer and draws a small glowing quad per particle, colored by speed.',
            ],
        ],
        'code' => '@compute @workgroup_size(64)
fn simulate(@builtin(global_invocation_id) id: vec3u) {
  let i = id.x;
  if (i >= u.count) { return; }
  var p = particles[i];
  let d = u.mouse - p.pos;
  p.vel += normalize(d) * u.pull / (dot(d, d) + 0.05) * u.dt;  // pull to pointer
  p.vel.y -= u.gravity * u.dt;
  p.vel *= 0.995;
  p.pos += p.vel * u.dt;
  particles[i] = p;
}',
        'browsers' => 'WebGPU: Chrome and Edge 113+, Safari 26+, Firefox 141+ on Windows. Other browsers get the Canvas 2D version.',
        'faq' => [
            [
                'What is WebGPU?',
                'It is the modern graphics and compute API for the web. It is faster and more flexible than WebGL, and it can run general math on the GPU.',
            ],
            [
                'What is a compute shader?',
                'A small program that runs on the GPU for many items at once, here once per particle, in groups of 64.',
            ],
            [
                'Which browsers support WebGPU?',
                'Chrome and Edge 113 and newer, Safari 26, and Firefox 141 on Windows. Others get the Canvas 2D fallback.',
            ],
        ],
    ],
    [
        'num' => 38,
        'cat' => '05-media-and-realtime',
        'slug' => '038-image-compressor',
        'name' => 'Image Compressor',
        'example' => 'shrink photos in bulk without uploading them',
        'title' => 'Image Compressor in JavaScript: Resize and Convert to WebP in the Browser',
        'desc' => 'Free bulk image compressor in plain JavaScript. Resize and convert photos to WebP, AVIF or JPEG in a Web Worker with OffscreenCanvas, and compare before and after.',
        'keywords' => 'image compressor javascript, convert to webp javascript, offscreencanvas web worker, resize image browser, compress images online free',
        'runs' => 'OffscreenCanvas in a Worker',
        'what' => [
            'Drop a batch of photos, pick a size and quality, and get smaller files back in seconds, with a before and after slider on each one. Nothing is uploaded.',
            'The heavy work runs in a Web Worker so the page never freezes. Each photo becomes an ImageBitmap, is drawn at the new size on an OffscreenCanvas, and is encoded to the format you picked.',
        ],
        'when' => [
            'Shrinking photos before upload',
            'Faster pages and better Core Web Vitals',
            'Making WebP versions of images',
            'Learning Web Workers',
        ],
        'features' => [
            'Batch: drop many images at once',
            'Max width, quality and output format controls',
            'Before and after slider on each image',
            'Shows size saved per file and in total',
            'Download one file or all of them',
        ],
        'steps' => [
            [
                'Decode',
                'Each file becomes an ImageBitmap with createImageBitmap, which decodes off the main thread.',
            ],
            [
                'Resize in a worker',
                'The bitmap is sent to the worker, drawn at the new size on an OffscreenCanvas with high quality smoothing.',
            ],
            [
                'Encode',
                'convertToBlob encodes to the chosen format and quality. The page gets back the new file and its size.',
            ],
        ],
        'code' => '// worker.js (created from a Blob so the page stays a single file)
self.onmessage = async ({ data: { id, bitmap, width, type, quality } }) => {
  const scale = width ? Math.min(1, width / bitmap.width) : 1;
  const canvas = new OffscreenCanvas(Math.round(bitmap.width * scale), Math.round(bitmap.height * scale));
  const ctx = canvas.getContext("2d");
  ctx.imageSmoothingQuality = "high";
  ctx.drawImage(bitmap, 0, 0, canvas.width, canvas.height);
  const blob = await canvas.convertToBlob({ type, quality });
  self.postMessage({ id, blob, w: canvas.width, h: canvas.height });
};
// page
worker.postMessage({ id, bitmap, width: 1920, type: "image/webp", quality: 0.75 }, [bitmap]);',
        'browsers' => 'Every modern browser. AVIF output: Chrome and Edge. Safari encodes JPEG and PNG; its WebP output may fall back to PNG.',
        'faq' => [
            [
                'Is WebP or AVIF better?',
                'AVIF files are usually smaller at the same quality, but encoding is slower and fewer browsers can create them. WebP is a safe default.',
            ],
            [
                'Does compressing lose quality?',
                'A little, depending on the quality slider. Around 0.75 is hard to tell apart from the original for most photos.',
            ],
            [
                'Why use a Web Worker?',
                'Encoding big images takes time. Doing it in a worker keeps scrolling and clicking smooth.',
            ],
        ],
    ],
    [
        'num' => 39,
        'cat' => '05-media-and-realtime',
        'slug' => '039-live-chat',
        'name' => 'Live Chat App',
        'example' => 'a real time chat with rooms and typing indicators',
        'title' => 'Real Time Chat App in JavaScript with WebSocket (Rooms, Typing)',
        'desc' => 'Free real time chat in plain JavaScript. Rooms, nicknames, typing indicators and reactions, working between tabs with no server or across devices with a WebSocket server.',
        'keywords' => 'websocket chat javascript, real time chat app, chat rooms node ws, typing indicator javascript, broadcastchannel chat',
        'runs' => 'WebSocket',
        'what' => [
            'Open two tabs and chat between them right away. Run the tiny included server and people on other phones and laptops can join the same rooms, see who is typing and react to messages.',
            'Messages are small JSON events. Without a server they travel over BroadcastChannel. With one, they go over a WebSocket, and the 20 line server.js simply passes each event to everyone else.',
        ],
        'when' => [
            'Support chat widgets',
            'Team and community rooms',
            'Learning WebSocket',
            'Real time features in any app',
        ],
        'features' => [
            'Rooms: general, random and dev, with unread counts',
            'Typing indicator and who is online',
            'Emoji reactions on any message',
            'Message history per room saved in the browser',
            'Auto reconnect with backoff when the server drops',
        ],
        'steps' => [
            [
                'Pick a transport',
                'With no server address, messages go over BroadcastChannel between tabs. With one, they go over a WebSocket.',
            ],
            [
                'Send events',
                'Messages, typing, joins and reactions are small JSON events with a room name and a sender id.',
            ],
            [
                'Render',
                'Each tab applies events to its local state and redraws the room. The server only relays events, it keeps nothing.',
            ],
        ],
        'code' => 'const ws = new WebSocket("wss://chat.example.com");
ws.onmessage = (e) => handle(JSON.parse(e.data));

function send(type, data) {
  ws.send(JSON.stringify({ type, room, from: me.id, name: me.name, ...data }));
}
input.addEventListener("input", throttle(() => send("typing"), 1500));
form.addEventListener("submit", () => send("message", { text: input.value, id: crypto.randomUUID() }));
// server.js relays every message to everyone else
wss.on("connection", (s) => s.on("message", (d) => wss.clients.forEach((c) => c !== s && c.send(d.toString()))));',
        'browsers' => 'Every modern browser. For devices on different networks, host server.js somewhere with wss:// (HTTPS pages need secure WebSockets).',
        'faq' => [
            [
                'How do I run the chat server?',
                'Install Node, run npm install ws, then node server.js. Enter ws://your-ip:8788 in the page on each device.',
            ],
            [
                'Are messages saved?',
                'Each browser keeps the last 200 messages per room. The server keeps nothing, it only relays.',
            ],
            [
                'Can I host it online?',
                'Yes. Deploy server.js to any Node host and use a wss:// address, since HTTPS pages need secure WebSockets.',
            ],
        ],
    ],
    [
        'num' => 40,
        'cat' => '05-media-and-realtime',
        'slug' => '040-code-playground',
        'name' => 'Online Code Playground',
        'example' => 'a CodePen style editor with live preview and share links',
        'title' => 'Build a CodePen Clone in JavaScript: Live Code Playground (Free)',
        'desc' => 'Free online code playground in plain JavaScript. HTML, CSS and JS editors, a live sandboxed preview, a working console, templates and share links stored in the URL.',
        'keywords' => 'code playground javascript, codepen clone, live html editor, iframe sandbox srcdoc, share code url',
        'runs' => 'Sandboxed iframe',
        'what' => [
            'Type HTML, CSS and JavaScript and see the result as you type. Console logs and errors show under the preview, and one click makes a link that holds the whole project.',
            'The code runs in a sandboxed iframe using srcdoc, so it cannot touch this page. A small bridge script forwards console calls with postMessage. Share links gzip the project with CompressionStream and put it after the #.',
        ],
        'when' => [
            'Teaching HTML, CSS and JavaScript',
            'Quick experiments and bug demos',
            'Embedding live examples in docs',
            'Learning how CodePen works',
        ],
        'features' => [
            'Three editors with tab indent and line numbers',
            'Live preview that updates as you type, or on Ctrl+Enter',
            'Console panel that shows logs, warnings and errors from the preview',
            'Starter templates: counter, canvas animation, fetch demo',
            'Share link: the project is gzipped and stored in the URL hash',
        ],
        'steps' => [
            [
                'Build the page',
                'The three editors are joined into one HTML document with a small console bridge script at the top.',
            ],
            [
                'Run it safely',
                'The document goes into an iframe with sandbox="allow-scripts", so it cannot touch this page, its storage or cookies.',
            ],
            [
                'Share',
                'The project JSON is gzipped with CompressionStream, base64url encoded and placed after the # in the link.',
            ],
        ],
        'code' => 'const bridge = `<script>
  for (const k of ["log", "warn", "error", "info"]) {
    const orig = console[k];
    console[k] = (...a) => { parent.postMessage({ k, a: a.map(String) }, "*"); orig(...a); };
  }
  onerror = (m, s, line) => parent.postMessage({ k: "error", a: [m + " (line " + line + ")"] }, "*");
<\\/script>`;
iframe.srcdoc = bridge + html + `<style>${css}</style><script>${js}<\\/script>`;
addEventListener("message", (e) => { if (e.source === iframe.contentWindow) showInConsole(e.data); });',
        'browsers' => 'Every modern browser. CompressionStream share links need Chrome 80+, Safari 16.4+ or Firefox 113+.',
        'faq' => [
            [
                'Is running code in an iframe safe?',
                'With sandbox set to allow-scripts only, the code cannot reach this page, its cookies or its storage.',
            ],
            [
                'Where is my code saved?',
                'In localStorage, and in the share link itself. No server stores anything.',
            ],
            [
                'How long can a share link be?',
                'Browsers handle very long URLs, and gzip keeps small projects to a few hundred characters.',
            ],
        ],
    ],
    [
        'num' => 41,
        'cat' => '06-hardware-and-performance',
        'slug' => '041-bluetooth-dashboard',
        'name' => 'Bluetooth Device Dashboard',
        'example' => 'read live heart rate and battery from a Bluetooth device',
        'title' => 'Web Bluetooth API Example: Heart Rate Dashboard in JavaScript',
        'desc' => 'Free Web Bluetooth dashboard in plain JavaScript. Connect a heart rate strap or watch, see a live chart, battery and device info, or try the demo mode.',
        'keywords' => 'web bluetooth api, ble heart rate javascript, bluetooth low energy browser, web bluetooth example, fitness dashboard',
        'runs' => 'Web Bluetooth',
        'what' => [
            'Pair a heart rate strap, fitness watch or sensor straight from the browser and see live readings with a 60 second chart, min, max and average, plus the battery level. No app to install.',
            'The Web Bluetooth API opens the browser\'s device picker, connects to the device\'s GATT server and subscribes to notifications. Each heart rate reading arrives as a few bytes that the page decodes.',
        ],
        'when' => [
            'Fitness and health dashboards',
            'IoT sensor tools',
            'Hardware hack days',
            'Learning Bluetooth Low Energy',
        ],
        'features' => [
            'Scan and pair with devices that offer the heart rate service',
            'Live heart rate with a 60 second chart, min, max and average',
            'Battery level with change notifications',
            'Manufacturer and model from the Device Information service',
            'Demo mode that simulates a workout',
        ],
        'steps' => [
            [
                'Ask for a device',
                'The browser shows its own picker, filtered to devices with the heart rate service. The page only gets the one you choose.',
            ],
            [
                'Subscribe',
                'The page connects to the GATT server and starts notifications on the heart rate characteristic.',
            ],
            [
                'Decode',
                'Each notification is a few bytes. The first byte says if the value is 8 or 16 bit, then the reading follows.',
            ],
        ],
        'code' => 'const device = await navigator.bluetooth.requestDevice({
  filters: [{ services: ["heart_rate"] }], optionalServices: ["battery_service"],
});
const server = await device.gatt.connect();
const hr = await (await server.getPrimaryService("heart_rate"))
  .getCharacteristic("heart_rate_measurement");

hr.addEventListener("characteristicvaluechanged", (e) => {
  const v = e.target.value;                            // DataView
  const bpm = v.getUint8(0) & 1 ? v.getUint16(1, true) : v.getUint8(1);
  show(bpm);
});
await hr.startNotifications();',
        'browsers' => 'Chrome and Edge on desktop and Android, and Opera. Not available in Safari or Firefox. Needs HTTPS or localhost.',
        'faq' => [
            [
                'Which browsers support Web Bluetooth?',
                'Chrome and Edge on desktop and Android, and Opera. Safari and Firefox do not support it.',
            ],
            [
                'What devices can I connect?',
                'Any Bluetooth Low Energy device with a standard heart rate or battery service, including most chest straps and many watches.',
            ],
            [
                'Can I try it without a device?',
                'Yes. Demo mode simulates a workout so you can see the chart and numbers move.',
            ],
        ],
    ],
    [
        'num' => 42,
        'cat' => '06-hardware-and-performance',
        'slug' => '042-serial-monitor',
        'name' => 'Arduino Serial Monitor',
        'example' => 'read and plot data from an Arduino or ESP32 over USB',
        'title' => 'Web Serial API: Arduino Serial Monitor and Plotter in the Browser',
        'desc' => 'Free serial monitor and plotter in plain JavaScript. Talk to an Arduino, ESP32 or Pico over USB with the Web Serial API, send commands and plot numbers live.',
        'keywords' => 'web serial api, arduino serial monitor browser, esp32 web serial, serial plotter javascript, usb serial javascript',
        'runs' => 'Web Serial',
        'what' => [
            'Plug in an Arduino or ESP32, pick the port and read everything it prints, with timestamps. Numbers in each line are drawn on a live chart like the Arduino IDE plotter, and you can send commands back.',
            'The Web Serial API opens the USB port at the baud rate you choose. Bytes flow through a TextDecoderStream and a small line splitter, and a simulator lets you try it without a board.',
        ],
        'when' => [
            'Arduino and ESP32 projects',
            'Classroom electronics',
            'Sensor logging',
            'Tools for makers without installing an app',
        ],
        'features' => [
            'Pick any USB serial port and baud rate',
            'Line by line output with timestamps and auto scroll',
            'Send text with a choice of line ending',
            'Live plotter for up to 4 numbers per line, like 23.5,61',
            'Simulator that acts like a board sending sensor data',
        ],
        'steps' => [
            [
                'Open the port',
                'You choose the port in the browser\'s picker. The page opens it at the baud rate your board uses.',
            ],
            [
                'Read lines',
                'Bytes flow through a TextDecoderStream and a small TransformStream that splits on new lines.',
            ],
            [
                'Plot',
                'Each line is checked for numbers. If it has any, they are added to the chart as separate colored lines.',
            ],
        ],
        'code' => 'const port = await navigator.serial.requestPort();
await port.open({ baudRate: 115200 });

const lines = port.readable
  .pipeThrough(new TextDecoderStream())
  .pipeThrough(new TransformStream({
    transform(chunk, ctl) { (this.buf = (this.buf ?? "") + chunk).split("\\n").slice(0, -1).forEach((l) => ctl.enqueue(l)); this.buf = this.buf.slice(this.buf.lastIndexOf("\\n") + 1); },
  }));
for await (const line of lines) show(line);

const writer = port.writable.getWriter();
await writer.write(new TextEncoder().encode("LED ON\\n"));',
        'browsers' => 'Chrome and Edge on desktop, and Opera. Not in Safari, Firefox or mobile browsers. Needs HTTPS or localhost.',
        'faq' => [
            [
                'Which browsers support Web Serial?',
                'Chrome, Edge and Opera on desktop. It is not in Safari, Firefox or mobile browsers.',
            ],
            [
                'What baud rate should I use?',
                'The same one as Serial.begin() in your sketch. 115200 is the most common.',
            ],
            [
                'How do I plot values?',
                'Print numbers on one line, like temp:24.5 humidity:61. The plotter draws up to four values per line.',
            ],
        ],
    ],
    [
        'num' => 43,
        'cat' => '06-hardware-and-performance',
        'slug' => '043-wasm-image-filters',
        'name' => 'WebAssembly Image Filters',
        'example' => 'photo filters in hand written WebAssembly, raced against JavaScript',
        'title' => 'WebAssembly Tutorial: Image Filters in WAT vs JavaScript (Speed Test)',
        'desc' => 'Free WebAssembly image filters in plain JavaScript. Grayscale, sepia, invert and brightness in a 491 byte hand written WASM module, with a speed race against JS.',
        'keywords' => 'webassembly tutorial, wat webassembly, wasm image processing, wasm vs javascript, webassembly example',
        'runs' => 'WebAssembly',
        'what' => [
            'Four photo filters written by hand in WebAssembly text format and compiled to just 491 bytes. Apply them to a photo, then race the same filters written in plain JavaScript to see which is faster.',
            'The photo\'s pixels are copied into WebAssembly memory, the exported function changes them in place with integer math, and the result is copied back to the canvas. The readable filters.wat source is in the folder.',
        ],
        'when' => [
            'Learning WebAssembly from the ground up',
            'Image and audio processing',
            'Performance experiments',
            'Understanding linear memory',
        ],
        'features' => [
            'Grayscale, sepia, invert and brightness with contrast',
            'The same filters written in JavaScript for a fair race',
            'Timing for both, with a bar chart over repeated runs',
            'Works on your own photos of any size (memory grows as needed)',
            'The .wat source is included and readable',
        ],
        'steps' => [
            [
                'Copy pixels in',
                'The photo\'s RGBA bytes are copied into the WebAssembly memory. Memory grows in 64 KB pages to fit.',
            ],
            [
                'Run the filter',
                'The exported function loops over every pixel in place, using only integer math.',
            ],
            [
                'Copy pixels out',
                'The page reads the bytes back from the same memory and paints them on the canvas.',
            ],
        ],
        'code' => 'const bytes = Uint8Array.from(atob(WASM_BASE64), (c) => c.charCodeAt(0));
const { instance } = await WebAssembly.instantiate(bytes);
const { memory, grayscale } = instance.exports;

const img = ctx.getImageData(0, 0, w, h);
const need = Math.ceil(img.data.length / 65536) - memory.buffer.byteLength / 65536;
if (need > 0) memory.grow(need);                           // 64 KB pages

new Uint8Array(memory.buffer).set(img.data);                // copy in
grayscale(img.data.length);                                 // run in place
img.data.set(new Uint8Array(memory.buffer, 0, img.data.length));  // copy out
ctx.putImageData(img, 0, 0);',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'Is WebAssembly always faster than JavaScript?',
                'No. For simple loops like these, modern JavaScript is close. WebAssembly wins on heavier math and gives steadier timing.',
            ],
            [
                'What is WAT?',
                'WebAssembly Text format, the human readable version of WebAssembly. A tool like wat2wasm turns it into the binary file.',
            ],
            [
                'Can I use WebAssembly from other languages?',
                'Yes. Rust, C, C++ and Go all compile to WebAssembly. Writing WAT by hand shows what they produce.',
            ],
        ],
    ],
    [
        'num' => 44,
        'cat' => '06-hardware-and-performance',
        'slug' => '044-performance-monitor',
        'name' => 'Performance Monitor Widget',
        'example' => 'a live panel for Core Web Vitals on any page',
        'title' => 'Measure Core Web Vitals in JavaScript: LCP, CLS and INP Monitor',
        'desc' => 'Free performance monitor in plain JavaScript. Measure LCP, CLS, INP, FCP, TTFB, long tasks and FPS live with PerformanceObserver, and trigger issues to learn.',
        'keywords' => 'core web vitals javascript, measure lcp cls inp, performanceobserver example, web performance monitor, long tasks api',
        'runs' => 'PerformanceObserver',
        'what' => [
            'Watch this page\'s Core Web Vitals update live: loading speed, layout shifts and how fast it responds to clicks. Buttons let you cause a layout shift or a slow task so you can see exactly how the scores react.',
            'Every number comes from PerformanceObserver. CLS groups layout shifts into session windows, INP takes the slowest interaction, and each value is rated with Google\'s official good and poor thresholds.',
        ],
        'when' => [
            'SEO and site speed audits',
            'Debugging slow pages',
            'Teaching Core Web Vitals',
            'Adding a speed panel to your own site',
        ],
        'features' => [
            'LCP, CLS and INP rated good, needs work or poor with Google\'s thresholds',
            'FCP, TTFB and a navigation timing waterfall',
            'Long tasks list with durations',
            'Live frames per second graph and JS memory where available',
            'Floating mini widget you can copy into your own site',
        ],
        'steps' => [
            [
                'Observe entries',
                'A PerformanceObserver subscribes to each entry type. buffered: true replays what happened before the script ran.',
            ],
            [
                'Compute the metric',
                'CLS groups shifts into session windows. INP takes the slowest interaction. LCP takes the last large paint.',
            ],
            [
                'Rate it',
                'Each value is compared with the official thresholds, for example LCP is good under 2.5 seconds.',
            ],
        ],
        'code' => 'new PerformanceObserver((list) => {
  const last = list.getEntries().at(-1);
  report("LCP", last.startTime);                        // good under 2500 ms
}).observe({ type: "largest-contentful-paint", buffered: true });

let cls = 0;
new PerformanceObserver((list) => {
  for (const e of list.getEntries()) if (!e.hadRecentInput) cls += e.value;
  report("CLS", cls);                                   // good under 0.1
}).observe({ type: "layout-shift", buffered: true });

new PerformanceObserver((list) => {
  for (const e of list.getEntries()) if (e.interactionId) inp = Math.max(inp, e.duration);
}).observe({ type: "event", durationThreshold: 16, buffered: true });',
        'browsers' => 'All metrics: Chrome and Edge. Safari and Firefox support FCP, TTFB and LCP (Firefox and Safari 26+), with INP and CLS in the newest versions or not at all.',
        'faq' => [
            [
                'What are good Core Web Vitals scores?',
                'LCP under 2.5 seconds, CLS under 0.1 and INP under 200 milliseconds count as good.',
            ],
            [
                'Why is INP empty at first?',
                'INP measures interactions, so it needs you to click or type something first.',
            ],
            [
                'Can I add this to my own site?',
                'Yes. Copy the observer code and send the values to your analytics instead of showing them.',
            ],
        ],
    ],
    [
        'num' => 45,
        'cat' => '06-hardware-and-performance',
        'slug' => '045-file-compressor',
        'name' => 'Browser File Compressor',
        'example' => 'gzip any file or unpack a .gz right in the browser',
        'title' => 'Gzip Files in JavaScript with CompressionStream (Compress and Unzip)',
        'desc' => 'Free file compressor in plain JavaScript. Gzip or deflate any file and unpack .gz files with the native CompressionStream API, with streaming progress and size charts.',
        'keywords' => 'compressionstream api, gzip javascript, decompressionstream, compress file browser, streams api example',
        'runs' => 'CompressionStream',
        'what' => [
            'Drop a file to gzip it, or drop a .gz file to unpack it. You also get a text box that shows how well your text compresses, with before and after size bars.',
            'The browser\'s own CompressionStream does the work, and the file is read as a stream, piece by piece, so big files never sit fully in memory. A small counting stream drives the progress bar.',
        ],
        'when' => [
            'Shrinking logs, CSV and JSON exports',
            'Unpacking .gz downloads',
            'Learning the Streams API',
            'Tools that must work offline',
        ],
        'features' => [
            'Compress any file to .gz, or decompress .gz back',
            'Text mode to see how well your text compresses',
            'Streams the file in chunks with a progress bar',
            'Before and after size bars and the compression ratio',
            'Choose gzip, deflate or deflate-raw',
        ],
        'steps' => [
            [
                'Stream the file',
                'file.stream() gives a ReadableStream, so the file is read piece by piece instead of all at once.',
            ],
            [
                'Pipe through gzip',
                'pipeThrough(new CompressionStream("gzip")) compresses each piece as it passes. A small TransformStream counts bytes for the progress bar.',
            ],
            [
                'Collect',
                'new Response(stream).blob() gathers the output into a file you can download.',
            ],
        ],
        'code' => 'async function gzip(file, onProgress) {
  let done = 0;
  const counter = new TransformStream({
    transform(chunk, ctl) { done += chunk.byteLength; onProgress(done / file.size); ctl.enqueue(chunk); },
  });
  const stream = file.stream()
    .pipeThrough(counter)
    .pipeThrough(new CompressionStream("gzip"));
  return new Response(stream).blob();                  // collect the output
}
// Unpack: file.stream().pipeThrough(new DecompressionStream("gzip"))',
        'browsers' => 'Chrome and Edge 80+, Safari 16.4+, Firefox 113+.',
        'faq' => [
            [
                'What is CompressionStream?',
                'A built in browser API that compresses or decompresses a stream with gzip, deflate or deflate raw. No library is needed.',
            ],
            [
                'Why do photos barely shrink?',
                'JPEG, PNG, MP4 and zip files are already compressed. Text, CSV, JSON and code shrink the most.',
            ],
            [
                'Can it make .zip files?',
                'No. Gzip works on one file at a time. Zip archives need a library such as fflate.',
            ],
        ],
    ],
    [
        'num' => 46,
        'cat' => '06-hardware-and-performance',
        'slug' => '046-scheduler-api-demo',
        'name' => 'Scheduler API Demo',
        'example' => 'see why long tasks freeze a page and how to fix it',
        'title' => 'Scheduler API: Fix UI Jank with scheduler.yield() and postTask()',
        'desc' => 'Free Scheduler API demo in plain JavaScript. Run the same heavy job blocking, chunked with setTimeout and with scheduler.yield(), and watch the jank.',
        'keywords' => 'scheduler api javascript, scheduler yield, scheduler posttask, long tasks javascript, improve inp',
        'runs' => 'Scheduler API',
        'what' => [
            'A moving ball and a text box show how smooth the page feels. Run the same heavy job three ways and watch which one freezes the page, which one keeps it moving, and how long each takes.',
            'scheduler.yield() lets a long loop pause so the browser can handle clicks and paint, then continue ahead of other waiting work. scheduler.postTask() runs tasks by priority, and a second demo shows the order.',
        ],
        'when' => [
            'Fixing poor INP scores',
            'Apps with heavy data work',
            'Learning how the main thread works',
            'Performance talks and workshops',
        ],
        'features' => [
            'Same 2 second job run three ways: blocking, setTimeout chunks and scheduler.yield()',
            'Live animation and typing box to feel the jank',
            'Frame drop counter and a timeline of long frames',
            'Task priority demo: user-blocking, user-visible and background',
            'Fallback to setTimeout when the API is missing',
        ],
        'steps' => [
            [
                'Break the work',
                'The heavy job is a loop. Every few milliseconds it stops to let the browser handle input and paint.',
            ],
            [
                'Yield smartly',
                'await scheduler.yield() pauses and then continues ahead of other queued tasks, so the job still finishes quickly.',
            ],
            [
                'Prioritize',
                'postTask runs callbacks by priority, so user-blocking work jumps ahead of background work.',
            ],
        ],
        'code' => 'async function processAll(items) {
  let last = performance.now();
  for (const item of items) {
    doWork(item);
    if (performance.now() - last > 10) {         // every 10 ms...
      await scheduler.yield();                   // ...let input and paint happen
      last = performance.now();
    }
  }
}
scheduler.postTask(() => saveDraft(), { priority: "background" });
scheduler.postTask(() => showMenu(), { priority: "user-blocking" });  // runs first',
        'browsers' => 'scheduler.postTask: Chrome, Edge and Firefox 142+. scheduler.yield: Chrome and Edge 129+. Others use a setTimeout fallback.',
        'faq' => [
            [
                'What is scheduler.yield()?',
                'A function that pauses your code and lets the browser do other work, then resumes your task first. It is the easiest way to break up long tasks.',
            ],
            [
                'How is it different from setTimeout?',
                'After setTimeout your code waits at the back of the queue. After scheduler.yield() it continues sooner, so the job finishes faster.',
            ],
            [
                'Which browsers support it?',
                'scheduler.postTask is in Chrome, Edge and recent Firefox. scheduler.yield is in Chrome and Edge 129 and newer. The demo falls back to setTimeout.',
            ],
        ],
    ],
    [
        'num' => 47,
        'cat' => '07-developer-tools',
        'slug' => '047-json-formatter',
        'name' => 'JSON Formatter and Validator',
        'example' => 'format, check and browse JSON, even large files',
        'title' => 'JSON Formatter and Validator in JavaScript (Tree View, Free)',
        'desc' => 'Free JSON formatter in plain JavaScript. Format, minify, sort keys and validate JSON with the exact error line, browse a collapsible tree and search. Large files use a worker.',
        'keywords' => 'json formatter, json validator, json viewer online, pretty print json javascript, json tree view',
        'runs' => 'JSON.parse in a Worker',
        'what' => [
            'Paste messy JSON and get it clean, checked and easy to read. Mistakes point to the exact line and column, and big files open in a tree you can fold, search and copy paths from.',
            'Parsing uses JSON.parse, moved to a Web Worker for large inputs so typing stays smooth. When the browser\'s error has no position, a small scanner finds where the JSON breaks.',
        ],
        'when' => [
            'Reading API responses',
            'Fixing broken config files',
            'Exploring big data exports',
            'A private tool that works offline',
        ],
        'features' => [
            'Format with 2 or 4 spaces or tabs, minify, and sort keys',
            'Error message with line, column and a pointer to the problem',
            'Collapsible tree with type colors and item counts',
            'Search keys and values, click any node to copy its path',
            'Stats: size, depth, number of keys, arrays and objects',
        ],
        'steps' => [
            [
                'Parse',
                'The text goes to JSON.parse. Big inputs go to a Worker first so typing stays smooth.',
            ],
            [
                'Point to the error',
                'If parsing fails, the error position is turned into a line and column and the line is shown with a marker.',
            ],
            [
                'Build the tree',
                'Objects and arrays become folding details elements. Children render only when a branch is opened.',
            ],
        ],
        'code' => 'try {
  const data = JSON.parse(text);
  output.textContent = JSON.stringify(data, null, 2);
} catch (err) {
  // "Unexpected token } in JSON at position 812" becomes a line and column
  const pos = +(/position (\\d+)/.exec(err.message)?.[1] ?? 0);
  const before = text.slice(0, pos).split("\\n");
  showError(err.message, before.length, before.at(-1).length + 1);
}
// Large inputs: parse in a worker so the page never freezes
const worker = new Worker(URL.createObjectURL(new Blob([`onmessage = (e) => postMessage(JSON.parse(e.data))`])));',
        'browsers' => 'Every modern browser.',
        'faq' => [
            [
                'Is my JSON sent anywhere?',
                'No. Everything runs in your browser, so it is safe for private data.',
            ],
            [
                'How big a file can it handle?',
                'Files of several megabytes parse fine in the worker. The tree shows 500 items per level so the page stays fast.',
            ],
            [
                'How do I copy the path to a value?',
                'Click the value in the tree view. A path like $.users[3].email is copied.',
            ],
        ],
    ],
    [
        'num' => 48,
        'cat' => '07-developer-tools',
        'slug' => '048-regex-tester',
        'name' => 'Regex Tester',
        'example' => 'test regular expressions with live highlights and groups',
        'title' => 'Regex Tester in JavaScript with Live Highlight, Groups and Cheat Sheet',
        'desc' => 'Free regex tester in plain JavaScript. See matches highlighted live, groups in a table, flags as toggles, a replace preview, a plain English explanation and common patterns.',
        'keywords' => 'regex tester, regular expression tester javascript, regex online, named capture groups, regex cheat sheet',
        'runs' => 'JavaScript RegExp',
        'what' => [
            'Type a pattern and every match lights up in your text. Capture groups and named groups fill a table, the replace box shows the result, and a plain English list explains what each part of the pattern means.',
            'Matching runs in a Web Worker with a one second limit, so a runaway pattern stops instead of freezing the page. There is a cheat sheet and ten ready patterns for emails, URLs, dates, phones and more.',
        ],
        'when' => [
            'Writing validation rules',
            'Search and replace in data',
            'Learning regular expressions',
            'Checking patterns before shipping',
        ],
        'features' => [
            'Live highlight of every match, with alternating colors',
            'Table of matches with index, capture groups and named groups',
            'Flag toggles, including d for match indices and v for sets',
            'Replace preview with $1, $<name> and $& support',
            'Plain-English explanation, cheat sheet and 10 common patterns',
        ],
        'steps' => [
            [
                'Build the RegExp',
                'The pattern and flags make a new RegExp. A syntax error is shown instead of crashing.',
            ],
            [
                'Find matches safely',
                'matchAll runs inside a Worker. If a pattern takes more than a second, the worker is stopped so the page never hangs.',
            ],
            [
                'Show results',
                'Match positions become highlighted spans. Groups fill the table and the replace preview runs on the same text.',
            ],
        ],
        'code' => 'const re = new RegExp(pattern, "gd");            // d = give match indices
for (const m of text.matchAll(re)) {
  console.log(m[0], m.index, m.groups);           // full match, where, named groups
  console.log(m.indices[1]);                      // start and end of group 1
}
// Stop runaway patterns like /(a+)+$/ from freezing the page
const w = new Worker(url); w.postMessage({ pattern, flags, text });
const t = setTimeout(() => { w.terminate(); showError("Too slow, stopped"); }, 1000);',
        'browsers' => 'Every modern browser. The v flag needs Chrome 112+, Safari 17+ or Firefox 116+.',
        'faq' => [
            [
                'Which regex engine does it use?',
                'Your browser\'s JavaScript RegExp, so what works here works in your JavaScript code.',
            ],
            [
                'What is catastrophic backtracking?',
                'Some patterns, like (a+)+$, take exponential time on certain text. The tester stops those after one second.',
            ],
            [
                'How do named groups work?',
                'Write (?<year>\\d{4}) and the match has groups.year. Use $<year> in the replace box to reuse it.',
            ],
        ],
    ],
    [
        'num' => 49,
        'cat' => '07-developer-tools',
        'slug' => '049-mini-postman',
        'name' => 'Mini Postman API Client',
        'example' => 'send API requests and read clean responses',
        'title' => 'Build a Postman Alternative in JavaScript: REST API Client (Free)',
        'desc' => 'Free API client in plain JavaScript. Send GET, POST, PUT, PATCH and DELETE with params, headers and body, see status, time and pretty JSON, save collections and copy cURL.',
        'keywords' => 'postman alternative, rest api client javascript, api tester online, fetch api example, curl export',
        'runs' => 'Fetch with AbortController',
        'what' => [
            'Test any API from the browser. Build a request with query params, headers and a body, send it, and read a clean response with status, time and size. Save the ones you use often and copy them as cURL.',
            'Requests use fetch with an AbortSignal for the timeout and the Cancel button. The response body is streamed to count bytes, and variables like {{baseUrl}} are filled in before sending.',
        ],
        'when' => [
            'Testing your own APIs',
            'Learning how HTTP requests work',
            'Sharing requests as cURL',
            'A lightweight tool with no account',
        ],
        'features' => [
            'Methods, params table, headers table and JSON, form or raw body',
            'Response status, time, size, headers and highlighted JSON',
            'Timeout and a Cancel button',
            'History of the last 30 requests and named collections',
            'Environment variables like {{baseUrl}} and cURL export',
        ],
        'steps' => [
            [
                'Build the request',
                'The URL, params, headers and body are combined, and {{variables}} are filled in from the environment.',
            ],
            [
                'Send with limits',
                'fetch runs with a signal that aborts on your timeout or when you press Cancel.',
            ],
            [
                'Read the response',
                'The body is streamed to count bytes and show progress, then shown as pretty JSON or plain text.',
            ],
        ],
        'code' => 'const controller = new AbortController();
const signal = AbortSignal.any([controller.signal, AbortSignal.timeout(15000)]);
const t0 = performance.now();
const res = await fetch(url, { method, headers, body, signal });

let bytes = 0; const chunks = [];
const reader = res.body.getReader();
for (let r; !(r = await reader.read()).done; ) { chunks.push(r.value); bytes += r.value.length; }
const text = new TextDecoder().decode(await new Blob(chunks).arrayBuffer());
show(res.status, performance.now() - t0, bytes, text, [...res.headers]);
// Cancel button: controller.abort()',
        'browsers' => 'Every modern browser. The API you call must allow CORS; many public APIs do, private ones often need a proxy.',
        'faq' => [
            [
                'Why do some APIs fail with a CORS error?',
                'Browsers block requests to sites that do not allow them. Public APIs usually allow it, private ones often need a proxy.',
            ],
            [
                'Where are my requests saved?',
                'History and collections are stored in localStorage in your browser.',
            ],
            [
                'Can I use environment variables?',
                'Yes. Add them in the Variables tab and use {{name}} in the URL, params, headers or body.',
            ],
        ],
    ],
    [
        'num' => 50,
        'cat' => '07-developer-tools',
        'slug' => '050-temporal-datetime',
        'name' => 'Temporal Date and Time Toolkit',
        'example' => 'time zones, date math and Unix time with the new Temporal API',
        'title' => 'JavaScript Temporal API Examples: Time Zone Converter and Date Calculator',
        'desc' => 'Free date and time toolkit in plain JavaScript with the Temporal API. Convert time zones, count days between dates, add durations, decode Unix timestamps and see a world clock.',
        'keywords' => 'temporal api javascript, time zone converter, date difference calculator, unix timestamp converter, javascript date',
        'runs' => 'Temporal',
        'what' => [
            'Convert a meeting time across cities, count the days until a deadline, add a month to a date or decode a Unix timestamp. There is also a live world clock with day and night markers.',
            'Everything uses Temporal, the new JavaScript date API that fixes the old Date object\'s time zone and month math problems. Browsers without Temporal load a small polyfill automatically.',
        ],
        'when' => [
            'Scheduling across time zones',
            'Deadline and age calculators',
            'Debugging timestamps in logs',
            'Learning the Temporal API',
        ],
        'features' => [
            'Time zone converter for any number of cities, with daylight saving shifts',
            'Difference between two dates in years, months, days and business days',
            'Add or subtract a duration from any date',
            'Unix timestamp to date and back, in seconds or milliseconds',
            'Live world clock with day and night markers',
        ],
        'steps' => [
            [
                'Use the right type',
                'PlainDate for calendar days, ZonedDateTime for a moment in a place, Instant for an exact point on the timeline.',
            ],
            [
                'Convert zones',
                'One ZonedDateTime is moved to other zones with withTimeZone(). The clock time changes, the moment does not.',
            ],
            [
                'Do math safely',
                'until() and add() understand months of different lengths and daylight saving, so 1 month after 31 January is 28 or 29 February.',
            ],
        ],
        'code' => 'import { Temporal } from "https://cdn.jsdelivr.net/npm/temporal-polyfill@1.0.5/+esm"; // only if not built in

const meeting = Temporal.ZonedDateTime.from("2026-10-26T09:00[America/New_York]");
meeting.withTimeZone("Asia/Dhaka").toString();   // 2026-10-26T19:00:00+06:00[Asia/Dhaka]

const until = Temporal.PlainDate.from("2026-09-23").until("2026-12-25", { largestUnit: "month" });
until.toString();                                // "P3M2D": 3 months, 2 days

Temporal.PlainDate.from("2026-01-31").add({ months: 1 }).toString(); // "2026-02-28"',
        'browsers' => 'Native Temporal: Firefox 139+ and the newest Chrome and Edge. Other browsers load a small polyfill automatically.',
        'faq' => [
            [
                'What is the Temporal API?',
                'A new built in JavaScript API for dates and times. It has clear types for calendar dates, times with a zone and exact moments.',
            ],
            [
                'Why not use the Date object?',
                'Date mixes local and UTC time, months start at zero and time zone math is easy to get wrong. Temporal handles those cases correctly.',
            ],
            [
                'What is 31 January plus one month?',
                'Temporal gives 28 February, or 29 in a leap year, instead of spilling into March.',
            ],
        ],
    ],
    [
        'num' => 51,
        'cat' => '08-website-sections',
        'slug' => '051-mega-menu-navigation',
        'name' => 'Mega Menu Navigation',
        'example' => 'a big dropdown menu with columns, keyboard support and a mobile drawer',
        'title' => 'Vanilla JavaScript Mega Menu: Accessible Dropdown Navigation with Mobile Drawer',
        'desc' => 'Free mega menu in plain JavaScript. Multi-column dropdowns, keyboard arrows and Escape, hover intent, and a slide-in mobile drawer. One HTML file, no library.',
        'keywords' => 'mega menu javascript, dropdown navigation, accessible menu, mobile menu drawer, vanilla js navbar, responsive navigation',
        'runs' => 'DOM events',
        'what' => [
            'A full mega menu for a shop or content site. Each top item opens a wide panel with columns of links and a promo card with a photo.',
            'It works with a mouse, a keyboard and on phones, where the menu turns into a slide-in drawer with folding sections.',
        ],
        'when' => [
            'Online shops with many categories',
            'News and magazine sites',
            'Company sites with lots of pages',
            'Any header that has outgrown a simple list',
        ],
        'features' => [
            'Multi-column dropdown panels with a promo card',
            'Hover intent timer so menus do not flicker',
            'Keyboard support: arrows, Down to open, Escape to close',
            'Mobile drawer with folding sections',
            'Closes when you click outside',
        ],
        'steps' => [
            [
                'Buttons, not links',
                'Each top item is a button with aria-expanded, so screen readers announce open and closed.',
            ],
            [
                'Hover with a delay',
                'A short timer stops menus flickering open when the mouse just passes over.',
            ],
            [
                'One key map',
                'Arrow keys move between items, Down opens a panel and Escape closes it and returns focus.',
            ],
        ],
        'code' => 'btn.addEventListener("keydown", (e) => {
  if (e.key === "ArrowDown") { open(btn); panel.querySelector("a").focus(); }
  if (e.key === "Escape") { close(); btn.focus(); }
});
item.addEventListener("pointerenter", () => {
  clearTimeout(timer);
  timer = setTimeout(() => open(btn), 120); // hover intent
});',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Should menu items be links or buttons?',
                'If the item opens a panel, use a button. Links should go to a page.',
            ],
            [
                'How do I stop the menu closing too fast?',
                'Add a short delay on pointer leave, around 250 ms, and cancel it when the pointer enters the panel.',
            ],
            [
                'Is hover enough?',
                'No. Touch and keyboard users need click and key support too, which this project includes.',
            ],
        ],
    ],
    [
        'num' => 52,
        'cat' => '08-website-sections',
        'slug' => '052-sticky-header-scroll-progress',
        'name' => 'Sticky Header and Scroll Progress',
        'example' => 'a header that shrinks on scroll with a reading progress bar and back to top button',
        'title' => 'Sticky Header on Scroll in JavaScript: Shrinking Navbar, Reading Progress Bar, Back to Top',
        'desc' => 'Free sticky header in plain JavaScript. The header shrinks and hides on scroll down, shows on scroll up, with a reading progress bar and a back to top button.',
        'keywords' => 'sticky header javascript, shrink navbar on scroll, reading progress bar, back to top button, hide header on scroll, vanilla js scroll',
        'runs' => 'Scroll events and requestAnimationFrame',
        'what' => [
            'A sticky header that shrinks after you start scrolling, hides when you scroll down and slides back as soon as you scroll up.',
            'It also shows a reading progress bar and a round back to top button that appears halfway down the page.',
        ],
        'when' => [
            'Blogs and long articles',
            'Documentation pages',
            'Landing pages with a sticky call to action',
            'Any site where the header takes too much space',
        ],
        'features' => [
            'Shrinking header after 40 pixels',
            'Hide on scroll down, show on scroll up',
            'Reading progress bar',
            'Back to top button that appears when needed',
            'Passive listener with requestAnimationFrame for smooth scrolling',
        ],
        'steps' => [
            [
                'Read scroll once per frame',
                'The scroll handler only asks for a frame. The real work runs in requestAnimationFrame, so scrolling stays smooth.',
            ],
            [
                'Compare with last position',
                'If the new position is lower than the last one, the reader is going down, so the header hides.',
            ],
            [
                'Progress is a fraction',
                'scrollTop divided by the scrollable height gives 0 to 1, which becomes the bar width.',
            ],
        ],
        'code' => 'let last = 0, ticking = false;
window.addEventListener("scroll", () => {
  if (ticking) return; ticking = true;
  requestAnimationFrame(() => {
    const y = scrollY, max = document.documentElement.scrollHeight - innerHeight;
    header.classList.toggle("small", y > 40);
    header.classList.toggle("hide", y > 160 && y > last);
    bar.style.width = (y / max) * 100 + "%";
    last = y; ticking = false;
  });
}, { passive: true });',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why not use position sticky alone?',
                'Sticky keeps the header in place, but it cannot shrink or hide it. A little JavaScript adds that behaviour.',
            ],
            [
                'Will this slow my page down?',
                'No. The listener is passive and the work runs at most once per frame.',
            ],
            [
                'Can I use it on the whole window?',
                'Yes. Swap the frame element for window and scrollTop for scrollY, as shown in the code.',
            ],
        ],
    ],
    [
        'num' => 53,
        'cat' => '08-website-sections',
        'slug' => '053-touch-image-slider',
        'name' => 'Touch Image Slider',
        'example' => 'a photo slider with swipe, autoplay, dots and keyboard control',
        'title' => 'Vanilla JavaScript Image Slider with Swipe, Autoplay and Dots (No Library)',
        'desc' => 'Free image slider in plain JavaScript. Swipe on touch screens, drag with a mouse, autoplay that pauses on hover, dots, arrows and keyboard control. No library needed.',
        'keywords' => 'javascript image slider, carousel without library, swipe slider, touch carousel, autoplay slider, vanilla js carousel',
        'runs' => 'Pointer events and CSS transforms',
        'what' => [
            'A photo slider with big images and captions. Swipe it on a phone, drag it with a mouse, or use arrows, dots and the keyboard.',
            'Autoplay moves to the next photo on a timer, pauses when you hover or tab into it, and switches off for people who prefer less motion.',
        ],
        'when' => [
            'Hero banners on home pages',
            'Hotel, travel and property photos',
            'Product galleries in shops',
            'Portfolio projects',
        ],
        'features' => [
            'Swipe and drag with pointer events',
            'Arrows, dots and keyboard arrows',
            'Autoplay with a progress line, paused on hover and focus',
            'Loop on or off',
            'Respects reduced motion settings',
        ],
        'steps' => [
            [
                'Move the whole track',
                'All slides sit in one row. Showing slide n just means moving the row by n times 100 percent.',
            ],
            [
                'Follow the finger',
                'Pointer events work for touch, pen and mouse. While dragging, the track follows the finger with no transition.',
            ],
            [
                'Decide on release',
                'If the drag was more than 15 percent of the width, go to the next slide. Otherwise snap back.',
            ],
        ],
        'code' => 'slider.addEventListener("pointerdown", (e) => { startX = e.clientX; track.classList.add("drag"); });
slider.addEventListener("pointermove", (e) => {
  if (startX == null) return;
  dx = e.clientX - startX;
  track.style.transform = `translateX(calc(${-index * 100}% + ${dx}px))`;
});
slider.addEventListener("pointerup", () => {
  track.classList.remove("drag");
  go(Math.abs(dx) > width * 0.15 ? index + (dx < 0 ? 1 : -1) : index);
  startX = null;
});',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Do I need a slider library?',
                'Not for most sites. This whole slider is about 40 lines of JavaScript.',
            ],
            [
                'Is autoplay bad for accessibility?',
                'It can be. This slider pauses on hover and focus and turns autoplay off when the user asks for reduced motion.',
            ],
            [
                'How do I add more slides?',
                'Add another item to the list at the top of the script. Dots and counts update by themselves.',
            ],
        ],
    ],
    [
        'num' => 54,
        'cat' => '08-website-sections',
        'slug' => '054-lightbox-gallery-zoom',
        'name' => 'Lightbox Gallery with Zoom',
        'example' => 'a photo grid that opens a full screen viewer with zoom and pan',
        'title' => 'JavaScript Lightbox Gallery with Zoom and Pan: Native Dialog, Keyboard and Swipe',
        'desc' => 'Free lightbox gallery in plain JavaScript. Click a photo to open a full screen viewer with zoom, pan, arrow keys, swipe, captions and a counter. Built on the native dialog element.',
        'keywords' => 'javascript lightbox, image gallery zoom, photo viewer, dialog lightbox, pinch zoom gallery, vanilla js gallery',
        'runs' => 'dialog element and pointer events',
        'what' => [
            'A photo grid where any image opens in a full screen viewer. You can zoom in up to five times, drag around the zoomed photo and move between photos.',
            'It uses the built in dialog element, so keyboard focus, Escape to close and returning focus to the photo you clicked all work without extra code.',
        ],
        'when' => [
            'Photography and portfolio sites',
            'Property and hotel galleries',
            'Product photos in shops',
            'Event and wedding albums',
        ],
        'features' => [
            'Masonry style grid with a large first photo',
            'Native dialog viewer with focus handling',
            'Zoom with buttons, mouse wheel, double click and keys',
            'Drag to pan when zoomed, swipe to change photo',
            'Captions, counter and preloading of the next photo',
        ],
        'steps' => [
            [
                'Use the native dialog',
                'showModal() gives a real modal: focus is trapped, the page behind is inert and Escape closes it for free.',
            ],
            [
                'Zoom with transform',
                'Zoom and pan are one CSS transform, translate then scale, so it stays sharp and fast.',
            ],
            [
                'Swipe when not zoomed',
                'When the photo is at 100 percent a horizontal drag changes photo. When zoomed, dragging pans instead.',
            ],
        ],
        'code' => 'grid.onclick = (e) => {
  const btn = e.target.closest("button");
  show(+btn.dataset.i);
  dialog.showModal(); // focus trap + Escape for free
};
view.addEventListener("wheel", (e) => {
  e.preventDefault();
  zoom = Math.min(5, Math.max(1, zoom * (e.deltaY < 0 ? 1.15 : 0.87)));
  img.style.transform = `translate(${x}px,${y}px) scale(${zoom})`;
}, { passive: false });',
        'browsers' => 'Works in all modern browsers. The dialog element is supported in Chrome, Edge, Firefox and Safari 15.4+.',
        'faq' => [
            [
                'Why use the dialog element?',
                'It handles the hard parts of a modal for you: focus trapping, Escape to close and making the page behind inert.',
            ],
            [
                'Does it load full size photos up front?',
                'No. Thumbnails load in the grid, and the large version loads only when you open a photo. The next one is preloaded.',
            ],
            [
                'Can I pinch to zoom on phones?',
                'This version uses buttons and double tap to zoom on phones. You can add pinch by tracking two pointers.',
            ],
        ],
    ],
    [
        'num' => 55,
        'cat' => '08-website-sections',
        'slug' => '055-tabs-accordion-kit',
        'name' => 'Tabs and Accordion Kit',
        'example' => 'accessible tabs and accordions with keyboard support and smooth height animation',
        'title' => 'Accessible Tabs and Accordion in Vanilla JavaScript: ARIA, Keyboard and Animation',
        'desc' => 'Free accessible tabs and accordion in plain JavaScript. Correct ARIA roles, arrow key navigation, one or many panels open, smooth height animation and deep links.',
        'keywords' => 'accessible tabs javascript, accordion javascript, aria tabs, keyboard tabs, collapsible sections, vanilla js accordion',
        'runs' => 'ARIA roles and the Web Animations API',
        'what' => [
            'A tabs component and an accordion that follow the official accessibility patterns. They work with a mouse, a keyboard and screen readers.',
            'Tabs support arrow keys, Home and End, and remember the selected tab in the address bar. The accordion can allow one or many open items and animates smoothly.',
        ],
        'when' => [
            'Product pages with specs and reviews',
            'FAQ sections',
            'Pricing and plan comparisons',
            'Settings pages',
        ],
        'features' => [
            'ARIA tabs with roving tabindex',
            'Arrow keys, Home and End',
            'Deep link to a tab with the URL hash',
            'Accordion with one or many open mode',
            'Smooth height animation that respects reduced motion',
        ],
        'steps' => [
            [
                'Roving tabindex',
                'Only the selected tab is in the Tab order. Arrow keys move selection, so one Tab press takes you into the panel.',
            ],
            [
                'Link tabs and panels',
                'aria-controls and aria-labelledby connect each tab to its panel, so screen readers announce them together.',
            ],
            [
                'Animate real height',
                'The accordion measures scrollHeight and animates from 0 to that height with element.animate().',
            ],
        ],
        'code' => 'tabs.forEach((tab, i) => tab.onkeydown = (e) => {
  const next = { ArrowRight: i + 1, ArrowLeft: i - 1, Home: 0, End: tabs.length - 1 }[e.key];
  if (next === undefined) return;
  select(tabs[(next + tabs.length) % tabs.length]);
});
function select(tab) {
  tabs.forEach((t) => {
    const on = t === tab;
    t.setAttribute("aria-selected", on);
    t.tabIndex = on ? 0 : -1;
    document.getElementById(t.getAttribute("aria-controls")).hidden = !on;
  });
  tab.focus();
}',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why not use details and summary for the accordion?',
                'You can for simple cases. This version adds a one-at-a-time mode and smooth animation, which details cannot do on its own.',
            ],
            [
                'Should tab panels be hidden or removed?',
                'Hidden. The content stays in the page, which is better for search engines and for find in page.',
            ],
            [
                'Do tabs change the URL?',
                'Yes, the hash updates, so you can link straight to the Reviews tab.',
            ],
        ],
    ],
    [
        'num' => 56,
        'cat' => '08-website-sections',
        'slug' => '056-pricing-table-toggle',
        'name' => 'Pricing Table with Toggle',
        'example' => 'a pricing table with a monthly and yearly switch, currencies and a seat slider',
        'title' => 'Pricing Table in JavaScript: Monthly and Yearly Toggle, Currency Switch and Seat Slider',
        'desc' => 'Free pricing table in plain JavaScript. Switch monthly and yearly billing, change currency, pick team size with a slider and compare features. One HTML file.',
        'keywords' => 'pricing table javascript, monthly yearly toggle, pricing page template, saas pricing, currency switcher, pricing calculator',
        'runs' => 'Intl.NumberFormat',
        'what' => [
            'A three column pricing table with a highlighted middle plan. Switch between monthly and yearly billing and the prices and totals update straight away.',
            'Choose a currency and drag the team size slider to see the price per person and the total, formatted correctly for that currency.',
        ],
        'when' => [
            'SaaS and app pricing pages',
            'Agency and service packages',
            'Membership sites',
            'Online course plans',
        ],
        'features' => [
            'Monthly and yearly switch with a savings badge',
            'Currency switcher with proper number formatting',
            'Team size slider with live totals',
            'Highlighted most popular plan',
            'Included and not included features',
        ],
        'steps' => [
            [
                'Keep prices in one place',
                'Plans live in one small array with a base price in dollars. Everything on screen is worked out from it.',
            ],
            [
                'Convert and discount',
                'The price is multiplied by the exchange rate and by 0.8 for yearly billing, then by team size for the total.',
            ],
            [
                'Format for the currency',
                'Intl.NumberFormat shows the right symbol, separators and decimals for each currency.',
            ],
        ],
        'code' => 'const fmt = (v, cur) => new Intl.NumberFormat(undefined, {
  style: "currency", currency: cur
}).format(v);

const perSeat = plan.price * rates[cur] * (yearly ? 0.8 : 1);
const total = perSeat * seats * (yearly ? 12 : 1);
priceEl.textContent = fmt(perSeat, cur);   // $23.20
totalEl.textContent = fmt(total, cur) + " billed yearly";',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Where do the exchange rates come from?',
                'They are fixed numbers in the demo. In a real site, load them from your payment provider or an exchange rate API.',
            ],
            [
                'How is the yearly discount worked out?',
                'The monthly price is multiplied by 0.8, which is a 20 percent saving. Change the number to set your own discount.',
            ],
            [
                'Does Intl.NumberFormat need a library?',
                'No. It is built into every modern browser.',
            ],
        ],
    ],
    [
        'num' => 57,
        'cat' => '08-website-sections',
        'slug' => '057-testimonial-carousel',
        'name' => 'Testimonial Carousel',
        'example' => 'a customer reviews slider that shows one, two or three cards depending on space',
        'title' => 'Testimonial Slider in Vanilla JavaScript: Responsive Review Carousel with Star Ratings',
        'desc' => 'Free testimonial carousel in plain JavaScript. Shows one, two or three review cards depending on space, with star ratings, autoplay progress, pause on hover and dots.',
        'keywords' => 'testimonial slider javascript, review carousel, customer reviews section, responsive carousel, resizeobserver, star rating display',
        'runs' => 'ResizeObserver and scroll snap',
        'what' => [
            'A customer review carousel with photos, names, star ratings and quotes. It shows three cards on wide screens, two on tablets and one on phones.',
            'You can swipe, scroll, use the arrows or dots. Autoplay moves on every six seconds with a small progress ring, and stops when you interact.',
        ],
        'when' => [
            'Home page social proof',
            'Service and agency sites',
            'Product landing pages',
            'Course and coaching sites',
        ],
        'features' => [
            '1, 2 or 3 cards based on available width',
            'Native scroll snap for smooth swiping',
            'Star ratings with screen reader labels',
            'Autoplay progress ring with a Pause button',
            'Dots that follow manual scrolling',
        ],
        'steps' => [
            [
                'Let CSS do the scrolling',
                'The rail uses scroll snap, so swiping on a phone lands neatly on a card with no custom touch code.',
            ],
            [
                'Measure the space',
                'ResizeObserver watches the rail. Wide shows 3 cards, medium 2 and narrow 1, and the dots update to match.',
            ],
            [
                'Autoplay with a ring',
                'A progress ring shows time to the next page. It pauses on hover, focus, the Pause button and reduced motion.',
            ],
        ],
        'code' => '.rail { display: flex; overflow-x: auto; scroll-snap-type: x mandatory; }
.card { flex: 0 0 var(--w); scroll-snap-align: start; }

new ResizeObserver(() => {
  const w = rail.clientWidth;
  perView = w > 900 ? 3 : w > 560 ? 2 : 1;
  rail.style.setProperty("--w", `calc((100% - ${(perView - 1) * 16}px) / ${perView})`);
}).observe(rail);',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why use ResizeObserver instead of media queries?',
                'The carousel responds to its own width, so it works in a sidebar, a full-width band or a narrow column.',
            ],
            [
                'Can I show real reviews?',
                'Yes. Replace the array with reviews from your database or a review platform export.',
            ],
            [
                'Is it accessible?',
                'Stars have text labels, controls have names and autoplay pauses on focus and for reduced motion.',
            ],
        ],
    ],
    [
        'num' => 58,
        'cat' => '08-website-sections',
        'slug' => '058-cookie-consent-banner',
        'name' => 'Cookie Consent Banner',
        'example' => 'a GDPR style cookie banner with categories, saved choices and blocked scripts',
        'title' => 'Cookie Consent Banner in JavaScript: GDPR Categories, Saved Choices and Script Blocking',
        'desc' => 'Free cookie consent banner in plain JavaScript. Accept, reject or choose categories, save the choice with a date and version, and only load analytics and ads after consent.',
        'keywords' => 'cookie consent javascript, gdpr cookie banner, cookie popup, consent manager, block scripts until consent, cookie preferences',
        'runs' => 'localStorage and dialog',
        'what' => [
            'A cookie banner with Accept all, Reject all and Choose buttons. The settings panel lets people switch analytics, marketing and preference cookies on or off.',
            'The choice is saved with a date and version, and the demo shows which scripts are loaded or blocked so you can see consent working.',
        ],
        'when' => [
            'Any site with analytics or ads',
            'Shops using marketing pixels',
            'Sites with visitors from the EU or UK',
            'Client sites that need a simple consent tool',
        ],
        'features' => [
            'Accept, reject and custom choice',
            'Four categories with necessary always on',
            'Saved choice with date and version',
            'Scripts blocked until their category is allowed',
            'Settings link to change your mind later',
        ],
        'steps' => [
            [
                'Nothing loads before consent',
                'Analytics and ad scripts are only added to the page when their category is switched on.',
            ],
            [
                'Save a version and date',
                'The choice is stored with a version number. Change your cookie list, bump the version and everyone is asked again.',
            ],
            [
                'Reject is one click',
                'Reject all sits next to Accept all with the same size, which is what regulators expect.',
            ],
        ],
        'code' => 'function loadIfAllowed(src, category) {
  const c = JSON.parse(localStorage.getItem("consent-v1") || "null");
  if (!c || !c.choices[category]) return;          // blocked until consent
  const s = document.createElement("script");
  s.src = src; s.async = true; document.head.append(s);
}
localStorage.setItem("consent-v1", JSON.stringify({
  version: 2, date: new Date().toISOString(),
  choices: { necessary: true, analytics: true, marketing: false }
}));',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Is this enough for GDPR?',
                'It covers the main technical parts: real choice, easy reject, no tracking before consent and a record of the choice. Check the wording with your own legal adviser.',
            ],
            [
                'How do I block Google Analytics until consent?',
                'Do not put the script tag in the HTML. Call a loader function like the one shown only when analytics is allowed.',
            ],
            [
                'When should I ask again?',
                'When you add new cookies, raise the version number. Many sites also ask again after 12 months.',
            ],
        ],
    ],
    [
        'num' => 59,
        'cat' => '08-website-sections',
        'slug' => '059-scrollspy-table-of-contents',
        'name' => 'Scrollspy Table of Contents',
        'example' => 'an automatic table of contents that highlights the section you are reading',
        'title' => 'Scrollspy Table of Contents in JavaScript: Auto TOC with IntersectionObserver',
        'desc' => 'Free scrollspy table of contents in plain JavaScript. Builds the TOC from your headings, highlights the section you are reading, shows progress and scrolls smoothly.',
        'keywords' => 'scrollspy javascript, table of contents generator, intersectionobserver toc, sticky sidebar navigation, docs sidebar, vanilla js scrollspy',
        'runs' => 'IntersectionObserver',
        'what' => [
            'A table of contents that builds itself from the headings on the page and highlights the section you are reading as you scroll.',
            'It includes nested items, a progress bar, smooth scrolling and focus handling, and it uses no scroll listener for the highlight.',
        ],
        'when' => [
            'Documentation sites',
            'Long blog posts and guides',
            'Legal and policy pages',
            'Course lessons',
        ],
        'features' => [
            'Automatic TOC from h3 and h4 headings',
            'Current section highlight with IntersectionObserver',
            'Nested items for sub headings',
            'Reading progress bar',
            'Smooth scroll with keyboard focus',
        ],
        'steps' => [
            [
                'Build from headings',
                'The script finds every h3 and h4, gives each a clean id and writes the list of links.',
            ],
            [
                'Watch a reading zone',
                'rootMargin shrinks the viewport to its top 30 percent. The heading that enters that zone is the current section.',
            ],
            [
                'Scroll and focus',
                'Clicking a link scrolls smoothly and moves keyboard focus to the heading, so screen readers follow too.',
            ],
        ],
        'code' => 'const io = new IntersectionObserver((entries) => {
  const visible = entries.filter((e) => e.isIntersecting);
  if (visible[0]) highlight(visible[0].target.id);
}, { rootMargin: "0px 0px -70% 0px" }); // top 30% of the screen

document.querySelectorAll("h2, h3").forEach((h) => {
  h.id ||= h.textContent.toLowerCase().replace(/[^a-z0-9]+/g, "-");
  io.observe(h);
});',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why IntersectionObserver instead of a scroll listener?',
                'The browser does the work and only tells you when something changes, which is cheaper and smoother.',
            ],
            [
                'How do I change when a section counts as active?',
                'Change the rootMargin. -70% at the bottom means the heading must reach the top 30 percent of the screen.',
            ],
            [
                'Does it work on the whole page?',
                'Yes. Remove the root option and it watches the browser window.',
            ],
        ],
    ],
    [
        'num' => 60,
        'cat' => '08-website-sections',
        'slug' => '060-theme-switcher',
        'name' => 'Theme Switcher',
        'example' => 'a light, dark and system theme switch that remembers the choice with no flash',
        'title' => 'Dark Mode Toggle in JavaScript: Light, Dark and System Theme with No Flash',
        'desc' => 'Free theme switcher in plain JavaScript. Light, dark and system modes, an accent colour picker, saved choice, live system change and a tiny script that stops the white flash.',
        'keywords' => 'dark mode toggle javascript, theme switcher, prefers-color-scheme, no flash dark mode, css variables theme, light dark system',
        'runs' => 'CSS variables and matchMedia',
        'what' => [
            'A theme switcher with light, dark and system options plus an accent colour picker. The preview dashboard card changes instantly.',
            'The choice is saved, system mode updates live when your computer switches, and a three line head script prevents the white flash on page load.',
        ],
        'when' => [
            'Any website or web app with dark mode',
            'Dashboards and admin panels',
            'Blogs and documentation',
            'Client sites with brand accent choices',
        ],
        'features' => [
            'Light, dark and system modes',
            'Live update when the system theme changes',
            'Accent colour picker with CSS variables',
            'Saved choice in localStorage',
            'No flash script for the head',
        ],
        'steps' => [
            [
                'Colours are variables',
                'Every colour is a CSS variable. Dark mode just swaps the values, so no element needs its own dark rule.',
            ],
            [
                'Three choices, one rule',
                'Light and dark are fixed. System follows prefers-color-scheme and updates live when the operating system changes.',
            ],
            [
                'Decide before paint',
                'A tiny script in the head sets the theme before the CSS loads, so there is no white flash on reload.',
            ],
        ],
        'code' => 'const mq = matchMedia("(prefers-color-scheme: dark)");
function apply(mode) {
  const dark = mode === "dark" || (mode === "system" && mq.matches);
  document.documentElement.dataset.theme = dark ? "dark" : "light";
  localStorage.setItem("theme", mode);
}
mq.addEventListener("change", () => apply(localStorage.getItem("theme") || "system"));

/* CSS */
:root { --bg: #fff; --ink: #111; }
[data-theme="dark"] { --bg: #111; --ink: #eee; }',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why offer a system option?',
                'Many people set dark mode for their whole device. System respects that without making them choose again.',
            ],
            [
                'What causes the white flash?',
                'The page paints before your JavaScript runs. Setting the theme in a small script at the top of the head fixes it.',
            ],
            [
                'Do I need two stylesheets?',
                'No. Use CSS variables and change their values for the dark theme.',
            ],
        ],
    ],
    [
        'num' => 61,
        'cat' => '09-forms-input',
        'slug' => '061-multi-step-form-wizard',
        'name' => 'Multi-step Form Wizard',
        'example' => 'a sign up form split into steps with checks, a progress bar and a saved draft',
        'title' => 'Multi-step Form in Vanilla JavaScript: Wizard with Validation, Progress Bar and Saved Draft',
        'desc' => 'Free multi-step form in plain JavaScript. Split a long form into steps, check each step before moving on, show progress, save a draft and review everything before sending.',
        'keywords' => 'multi step form javascript, form wizard, step by step form, form validation, progress bar form, save form draft',
        'runs' => 'Constraint Validation API',
        'what' => [
            'A long sign up form split into four short steps: personal details, address, plan and a final review. You cannot move on until the current step is filled in correctly.',
            'Your answers are saved as you type, so closing the tab or reloading keeps your progress. The last step shows everything before you send it.',
        ],
        'when' => [
            'Sign up and onboarding flows',
            'Checkout and booking forms',
            'Job and school applications',
            'Quote and survey forms',
        ],
        'features' => [
            'Four steps with a numbered progress bar',
            'Built in browser validation per step',
            'Clear error message and focus on the first problem',
            'Draft saved and restored automatically',
            'Review step before sending',
        ],
        'steps' => [
            [
                'Use the browser checks',
                'required, type="email" and pattern do the checking. checkValidity() on each field of the current step decides if you can move on.',
            ],
            [
                'Show one step at a time',
                'Every step is a fieldset. Only the current one is visible, and the progress bar follows the step number.',
            ],
            [
                'Save as you type',
                'FormData turns the form into an object that is saved to localStorage on every change and restored on reload.',
            ],
        ],
        'code' => 'next.onclick = () => {
  const fields = [...steps[current].querySelectorAll("input, select")];
  const bad = fields.find((f) => !f.checkValidity());
  if (bad) { error.textContent = bad.validationMessage; bad.focus(); return; }
  current++;
  localStorage.setItem("draft", JSON.stringify(Object.fromEntries(new FormData(form))));
  show(current);
};',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why split a form into steps?',
                'People are more likely to finish a form when each part looks short and they can see how far they have come.',
            ],
            [
                'Do I still need server side checks?',
                'Yes. Browser checks help people fill the form in, but always check the data again on your server.',
            ],
            [
                'Where is the draft stored?',
                'In localStorage on the visitor\'s own device. It is removed after the form is sent.',
            ],
        ],
    ],
    [
        'num' => 62,
        'cat' => '09-forms-input',
        'slug' => '062-file-upload-dropzone',
        'name' => 'File Upload Dropzone',
        'example' => 'a drag and drop uploader with previews, size limits and progress bars',
        'title' => 'Drag and Drop File Upload in JavaScript: Previews, Progress Bars and Size Limits',
        'desc' => 'Free file upload dropzone in plain JavaScript. Drag files in or pick them, see image previews, reject wrong types and big files, watch progress bars and remove files.',
        'keywords' => 'drag and drop file upload javascript, file uploader, image upload preview, upload progress bar, dropzone without library, multiple file upload',
        'runs' => 'File API and drag and drop events',
        'what' => [
            'A drag and drop upload box. Drop images or PDFs in, click to choose, or paste an image from the clipboard, and see each file listed with a preview.',
            'Files that are too big or the wrong type are refused with a clear reason. Press Upload to see progress bars for each file.',
        ],
        'when' => [
            'Contact forms with attachments',
            'Job applications with a CV',
            'Profile and product photo uploads',
            'Support tickets with screenshots',
        ],
        'features' => [
            'Drag and drop, click and paste',
            'Instant image previews',
            'Type and size checks with clear messages',
            'Per file progress bars',
            'Remove single files or clear all',
        ],
        'steps' => [
            [
                'Accept files three ways',
                'Click opens the file picker, dropping uses the drop event, and pasting reads clipboard files. All three go to one add function.',
            ],
            [
                'Check before upload',
                'Each file is checked for type and size right away, so people see the problem before they wait for anything.',
            ],
            [
                'Preview without uploading',
                'URL.createObjectURL shows a local image preview instantly. The URL is revoked when the file is removed.',
            ],
        ],
        'code' => 'zone.addEventListener("drop", (e) => {
  e.preventDefault();
  for (const file of e.dataTransfer.files) {
    if (!["image/png", "image/jpeg", "application/pdf"].includes(file.type)) continue;
    if (file.size > 5 * 1024 * 1024) continue;           // 5 MB limit
    const img = new Image();
    img.src = URL.createObjectURL(file);                  // instant preview
    list.append(img);
  }
});
// real upload: fetch("/upload", { method: "POST", body: formData })',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Does this upload to a server?',
                'The demo simulates the upload. To send files for real, add them to a FormData object and post it with fetch.',
            ],
            [
                'Can I show real upload progress?',
                'Yes. fetch does not report upload progress yet, so use XMLHttpRequest and its upload.onprogress event.',
            ],
            [
                'Is the accept attribute enough?',
                'No. It only filters the picker. Always check type and size in JavaScript and again on the server.',
            ],
        ],
    ],
    [
        'num' => 63,
        'cat' => '09-forms-input',
        'slug' => '063-date-range-picker',
        'name' => 'Date Range Picker',
        'example' => 'a two month calendar for picking check in and check out dates',
        'title' => 'Date Range Picker in Vanilla JavaScript: Two Month Calendar with Blocked Dates',
        'desc' => 'Free date range picker in plain JavaScript. Two month calendar, blocked dates, minimum nights, hover preview, quick presets and keyboard navigation. No library.',
        'keywords' => 'date range picker javascript, booking calendar, check in check out picker, calendar without library, vanilla js datepicker, blocked dates calendar',
        'runs' => 'Date and Intl.DateTimeFormat',
        'what' => [
            'A booking style calendar showing two months side by side. Click a check in date and a check out date, and the range and number of nights appear.',
            'Taken and past dates are crossed out, a range cannot include a taken night, and there is a two night minimum. Presets pick a weekend or a week in one click.',
        ],
        'when' => [
            'Hotel and holiday rental booking',
            'Car and equipment hire',
            'Leave and holiday requests',
            'Report and analytics date filters',
        ],
        'features' => [
            'Two month view with previous and next',
            'Blocked and past dates',
            'Hover preview of the range',
            'Minimum stay check',
            'Keyboard navigation with arrow keys',
        ],
        'steps' => [
            [
                'Build the grid from dates',
                'For each month the script works out which weekday the 1st falls on, adds empty cells, then one button per day.',
            ],
            [
                'Two clicks make a range',
                'The first click sets check in. The second sets check out if it is later, long enough and has no taken nights in between.',
            ],
            [
                'Keyboard as a grid',
                'Only one day is in the Tab order. Arrow keys move a day or a week, and the calendar moves to the next month when needed.',
            ],
        ],
        'code' => 'function monthGrid(year, month) {
  const firstWeekday = (new Date(year, month, 1).getDay() + 6) % 7; // Monday first
  const days = new Date(year, month + 1, 0).getDate();              // days in month
  const cells = Array(firstWeekday).fill(null);
  for (let d = 1; d <= days; d++) cells.push(new Date(year, month, d));
  return cells;
}
const nights = Math.round((checkOut - checkIn) / 86400000);',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why not use input type date?',
                'The native picker selects one date and cannot show taken dates or a range, which booking sites need.',
            ],
            [
                'How do I load real taken dates?',
                'Fetch them from your booking system and add each date to the blocked set before drawing.',
            ],
            [
                'Does it handle time zones?',
                'Dates are treated as local calendar days, which is what guests expect for check in and check out.',
            ],
        ],
    ],
    [
        'num' => 64,
        'cat' => '09-forms-input',
        'slug' => '064-autocomplete-search',
        'name' => 'Autocomplete Search',
        'example' => 'a search box that suggests results as you type, with keyboard control',
        'title' => 'Autocomplete Search in Vanilla JavaScript: Accessible Combobox with Fuzzy Matching',
        'desc' => 'Free autocomplete search in plain JavaScript. Suggestions as you type with fuzzy matching, highlighted matches, arrow keys, Enter and Escape, recent searches and ARIA combobox.',
        'keywords' => 'autocomplete javascript, search suggestions, typeahead, accessible combobox, fuzzy search javascript, vanilla js autocomplete',
        'runs' => 'ARIA combobox and debounced input',
        'what' => [
            'A search box that suggests cities as you type. It matches the start of words first, then anywhere in the name, and forgives a missing letter.',
            'Everything works with the keyboard, matching letters are highlighted, and your last five picks show as recent searches when the box is empty.',
        ],
        'when' => [
            'Site search boxes',
            'Picking a city, country or product',
            'Tagging and mentions',
            'Admin panels with long lists',
        ],
        'features' => [
            'Suggestions as you type with a short debounce',
            'Fuzzy matching that forgives small typos',
            'Highlighted matching text',
            'Arrow keys, Enter and Escape',
            'Recent searches saved in the browser',
        ],
        'steps' => [
            [
                'Score every item',
                'A starts-with match scores highest, then contains, then a loose letter-by-letter match that allows a small gap, so dhka still finds Dhaka.',
            ],
            [
                'Combobox roles',
                'The input has role combobox and points to the listbox. aria-activedescendant tells screen readers which option is highlighted while focus stays in the box.',
            ],
            [
                'Wait a moment',
                'A short debounce means the list only updates after a pause in typing, which matters when results come from a server.',
            ],
        ],
        'code' => 'input.addEventListener("input", () => {
  clearTimeout(timer);
  timer = setTimeout(() => {
    const q = input.value.trim().toLowerCase();
    const results = data
      .map((item) => [item, score(q, item.name)])
      .filter(([, s]) => s > 0)
      .sort((a, b) => b[1] - a[1])
      .slice(0, 8);
    render(results);
  }, 120);
});
input.setAttribute("aria-activedescendant", "option-" + active);',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'How do I search a server instead?',
                'Replace the local filter with a fetch to your search endpoint inside the debounced function, and cancel older requests with AbortController.',
            ],
            [
                'What is aria-activedescendant?',
                'It lets focus stay in the input while telling screen readers which suggestion is currently highlighted.',
            ],
            [
                'How many suggestions should I show?',
                'Between five and ten. More than that is hard to scan.',
            ],
        ],
    ],
    [
        'num' => 65,
        'cat' => '09-forms-input',
        'slug' => '065-otp-code-input',
        'name' => 'OTP Code Input',
        'example' => 'a six box verification code input with paste, auto advance and a resend timer',
        'title' => 'OTP Input in JavaScript: 6 Digit Verification Code Boxes with Paste and Resend Timer',
        'desc' => 'Free OTP code input in plain JavaScript. Six boxes that move forward as you type, back on Backspace, accept a pasted code, fill from SMS autofill and show a resend timer.',
        'keywords' => 'otp input javascript, verification code input, 6 digit code boxes, one time code autofill, 2fa code input, pin input',
        'runs' => 'input events and autocomplete one-time-code',
        'what' => [
            'Six boxes for a verification code. Focus jumps forward as you type and back when you press Backspace, and a pasted code fills every box at once.',
            'On phones the first box accepts SMS autofill. Wrong codes shake with a message and a count of tries left, and the resend link becomes active after 30 seconds.',
        ],
        'when' => [
            'Two step sign in',
            'Phone number and email checks',
            'Payment confirmations',
            'Password reset flows',
        ],
        'features' => [
            'Auto advance and smart Backspace',
            'Paste a whole code into any box',
            'SMS autofill with one-time-code',
            'Three tries then lock',
            'Resend timer',
        ],
        'steps' => [
            [
                'One digit per box',
                'Each box takes one digit and moves focus to the next. Backspace on an empty box goes back and clears the previous digit.',
            ],
            [
                'Paste and autofill',
                'Pasting or autofill can drop the whole code into one box. The script spreads the digits across all six.',
            ],
            [
                'Limit tries and wait',
                'Three wrong tries lock the boxes, and the resend link waits 30 seconds, like real sign in flows.',
            ],
        ],
        'code' => 'inputs.forEach((box, i) => {
  box.addEventListener("input", () => {
    const digits = box.value.replace(/\\D/g, "");
    if (digits.length > 1) return spread(digits, i);   // pasted or autofilled
    box.value = digits;
    if (digits && i < inputs.length - 1) inputs[i + 1].focus();
  });
  box.addEventListener("keydown", (e) => {
    if (e.key === "Backspace" && !box.value && i > 0) inputs[i - 1].focus();
  });
});
// first box: <input autocomplete="one-time-code" inputmode="numeric">',
        'browsers' => 'Works in all modern browsers. SMS code reading via WebOTP works in Chrome on Android.',
        'faq' => [
            [
                'Why six separate inputs?',
                'They make the length clear and each digit easy to check. The script makes them behave like one field.',
            ],
            [
                'How does SMS autofill work?',
                'autocomplete="one-time-code" lets phones offer the code from a new message above the keyboard.',
            ],
            [
                'Should I check the code in JavaScript?',
                'Only for the demo. Real codes must be checked on your server.',
            ],
        ],
    ],
    [
        'num' => 66,
        'cat' => '09-forms-input',
        'slug' => '066-password-strength-meter',
        'name' => 'Password Strength Meter',
        'example' => 'a password box that rates strength, estimates crack time and suggests a strong password',
        'title' => 'Password Strength Meter in JavaScript: Live Checklist, Crack Time and Generator',
        'desc' => 'Free password strength meter in plain JavaScript. Live score, checklist, common password check, estimated crack time, show and hide button and a secure password generator.',
        'keywords' => 'password strength meter javascript, password checker, password generator, password validation, crack time estimate, show hide password',
        'runs' => 'crypto.getRandomValues',
        'what' => [
            'A password field with a four part strength meter, a live checklist and a plain English tip about what would make it stronger.',
            'It spots common passwords even with swapped letters like p@ssw0rd, estimates how long an offline attack would take and can suggest a random password or a four word passphrase.',
        ],
        'when' => [
            'Sign up and change password forms',
            'Admin and staff account setup',
            'Password managers and vaults',
            'Security awareness training',
        ],
        'features' => [
            'Four level strength meter',
            'Live checklist of rules',
            'Common password and pattern detection',
            'Estimated crack time',
            'Secure generator with a word option',
        ],
        'steps' => [
            [
                'Check the basics',
                'Simple tests look for length, lower and upper case letters, numbers and symbols, and tick the checklist live.',
            ],
            [
                'Estimate real strength',
                'Length times the size of the character pool gives bits of entropy. Repeats, sequences, years and common words lower the score.',
            ],
            [
                'Generate safely',
                'The generator uses crypto.getRandomValues, not Math.random, so suggested passwords are truly unpredictable.',
            ],
        ],
        'code' => 'function entropy(p) {
  const pool = (/[a-z]/.test(p) ? 26 : 0) + (/[A-Z]/.test(p) ? 26 : 0)
             + (/\\d/.test(p) ? 10 : 0) + (/[^A-Za-z0-9]/.test(p) ? 32 : 0);
  return p.length * Math.log2(pool || 1);      // bits
}
function randomIndex(n) {
  const a = new Uint32Array(1);
  crypto.getRandomValues(a);                    // secure, unlike Math.random
  return a[0] % n;
}',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Is the password sent anywhere?',
                'No. All checks run in your browser and nothing is stored.',
            ],
            [
                'Why do long passwords score so well?',
                'Each extra character multiplies the number of guesses needed. Length matters more than symbols.',
            ],
            [
                'Should I block weak passwords?',
                'It is a good idea to block the very weak level and common passwords, and allow the rest with a warning.',
            ],
        ],
    ],
    [
        'num' => 67,
        'cat' => '09-forms-input',
        'slug' => '067-phone-input-country-codes',
        'name' => 'Phone Input with Country Codes',
        'example' => 'a phone number field with a searchable country list and automatic formatting',
        'title' => 'International Phone Input in JavaScript: Country Codes, Formatting and Validation',
        'desc' => 'Free international phone number input in plain JavaScript. Searchable country list with dial codes, formatting as you type, length checks and E.164 output for your server.',
        'keywords' => 'phone number input javascript, country code dropdown, international phone input, phone formatting, e164 phone number, phone validation',
        'runs' => 'Intl.DisplayNames',
        'what' => [
            'A phone field with a country picker. Choose a country from a searchable list or type a dial code, and the number is formatted the local way as you type.',
            'The field tells you how many digits are missing, and shows the clean international version that you would send to your server or SMS service.',
        ],
        'when' => [
            'Sign up and checkout forms',
            'Delivery and booking contact details',
            'SMS verification flows',
            'International lead forms',
        ],
        'features' => [
            'Searchable list of 28 countries with dial codes',
            'Country names in the visitor\'s language',
            'Formatting as you type with the cursor kept in place',
            'Length check with helpful messages',
            'E.164 output for servers',
        ],
        'steps' => [
            [
                'Country data in one list',
                'Each country has an ISO code, dial code, a display mask and the expected number of digits. Names come from Intl.DisplayNames in the visitor\'s language.',
            ],
            [
                'Format as you type',
                'Only digits are kept, a leading 0 is dropped, and the mask adds spaces and brackets in the right places.',
            ],
            [
                'Send one clean value',
                'The server gets the number in E.164 format: a plus sign, the dial code and the digits, with no spaces.',
            ],
        ],
        'code' => 'const names = new Intl.DisplayNames(["en"], { type: "region" });
names.of("BD");                           // "Bangladesh"

function format(digits, mask) {           // mask like "####-######"
  let out = "", i = 0;
  for (const ch of mask) {
    if (i >= digits.length) break;
    out += ch === "#" ? digits[i++] : ch;
  }
  return out;
}
const e164 = "+" + country.dial + digits; // "+8801712345678"',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'What is E.164?',
                'The international phone format: a plus sign, country code and number with no spaces, like +447700900123. SMS services expect it.',
            ],
            [
                'Why no flag emoji?',
                'Flag emoji do not show on Windows, so the demo uses short country codes that look the same everywhere.',
            ],
            [
                'Is a length check enough?',
                'It catches most typos. For full checks, use a phone library on your server or verify the number with a code.',
            ],
        ],
    ],
    [
        'num' => 68,
        'cat' => '09-forms-input',
        'slug' => '068-star-rating-review-form',
        'name' => 'Star Rating and Review Form',
        'example' => 'a review form with half star ratings, photos and a live rating summary',
        'title' => 'Star Rating in JavaScript: Accessible Half Stars, Review Form and Rating Summary',
        'desc' => 'Free star rating and review form in plain JavaScript. Half star ratings with radio buttons, hover preview, review text with a counter, photo previews and a live rating summary.',
        'keywords' => 'star rating javascript, review form, half star rating, accessible rating, product reviews, rating summary bars',
        'runs' => 'Radio inputs and FileReader',
        'what' => [
            'A product review form with half star ratings, a name, a comment with a character counter and up to four photos.',
            'Next to it is a rating summary with the average score and a bar for each star level. Posting a review updates the summary and adds it to the top of the list.',
        ],
        'when' => [
            'Product pages in online shops',
            'Restaurant, hotel and service reviews',
            'Course and app feedback',
            'Internal quality surveys',
        ],
        'features' => [
            'Half star rating built on radio inputs',
            'Hover preview with word labels',
            'Character counter and required checks',
            'Photo previews before posting',
            'Live average and star breakdown bars',
        ],
        'steps' => [
            [
                'Stars are radio buttons',
                'Ten hidden radio inputs, one for each half star, make the rating work with a keyboard and screen readers for free.',
            ],
            [
                'Paint on hover and change',
                'Hovering previews a rating and the label changes to words like Great. Leaving restores the chosen value.',
            ],
            [
                'Recalculate the summary',
                'The average, star counts and bar widths are worked out again from the list every time a review is added.',
            ],
        ],
        'code' => '<fieldset class="stars">
  <legend>Your rating</legend>
  <input type="radio" name="star" id="s1" value="0.5"><label for="s1">0.5 stars</label>
  <!-- ... up to 5 -->
</fieldset>

stars.addEventListener("change", (e) => paint(+e.target.value));
const avg = reviews.reduce((a, r) => a + r.stars, 0) / reviews.length;
bar.style.width = (count / reviews.length) * 100 + "%";',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why build stars from radio buttons?',
                'Radio buttons already work with a keyboard and screen readers. The stars are just their labels styled.',
            ],
            [
                'How do I save reviews?',
                'Send the form data to your server with fetch. The demo keeps reviews in memory only.',
            ],
            [
                'Should I show the average with decimals?',
                'Show one decimal, like 4.3, and round the stars to the nearest half.',
            ],
        ],
    ],
    [
        'num' => 69,
        'cat' => '09-forms-input',
        'slug' => '069-signature-pad',
        'name' => 'Signature Pad',
        'example' => 'a canvas where people sign with a finger, pen or mouse and save a PNG',
        'title' => 'Signature Pad in JavaScript: Smooth Canvas Drawing, Undo, Trim and Save as PNG',
        'desc' => 'Free signature pad in plain JavaScript. Sign with a finger, pen or mouse, smooth lines that respond to speed, undo, clear, trimmed PNG download and sharp on high resolution screens.',
        'keywords' => 'signature pad javascript, canvas signature, draw signature online, e signature form, save signature png, touch signature',
        'runs' => 'Canvas 2D and pointer events',
        'what' => [
            'A signature box that works with a finger, a stylus or a mouse. Lines are smooth and change thickness with speed and pen pressure, so signatures look natural.',
            'You can pick an ink colour and pen size, undo strokes or clear. Saving trims the empty space and gives you a transparent PNG to download or send to your server.',
        ],
        'when' => [
            'Delivery and service sign off',
            'Contracts and consent forms',
            'Visitor and staff check in',
            'Waivers and permission slips',
        ],
        'features' => [
            'Finger, stylus and mouse input',
            'Speed and pressure sensitive lines',
            'Ink colours and pen sizes',
            'Undo and clear',
            'Trimmed transparent PNG download',
        ],
        'steps' => [
            [
                'Sharp on every screen',
                'The canvas is sized in real device pixels and scaled back, so lines stay crisp on phones and high resolution laptops.',
            ],
            [
                'Smooth, ink-like lines',
                'Points are joined with quadratic curves through their midpoints. Fast movement makes the line thinner, and pen pressure is used when available.',
            ],
            [
                'Trim before saving',
                'The script scans the pixels for the signature\'s edges and copies just that area, with a little padding, into a new PNG.',
            ],
        ],
        'code' => 'canvas.addEventListener("pointermove", (e) => {
  if (!drawing) return;
  const p = point(e), last = pts.at(-1);
  const speed = Math.hypot(p.x - last.x, p.y - last.y) / (p.t - last.t);
  p.w = last.w * 0.6 + base * Math.max(0.45, 1.5 - speed * 0.6) * 0.4; // faster = thinner
  const mid = { x: (last.x + p.x) / 2, y: (last.y + p.y) / 2 };
  ctx.lineWidth = p.w;
  ctx.quadraticCurveTo(last.x, last.y, mid.x, mid.y);
  ctx.stroke();
  pts.push(p);
});',
        'browsers' => 'Works in all modern browsers. Pressure works with pens that report it, such as Apple Pencil and Surface Pen.',
        'faq' => [
            [
                'Is a drawn signature legally valid?',
                'In many countries a drawn signature is accepted for everyday agreements. Check the rules for your country and use case.',
            ],
            [
                'How do I send the signature to my server?',
                'Use canvas.toBlob() and add the blob to a FormData object, then post it with fetch.',
            ],
            [
                'Why does the page not scroll when I sign?',
                'touch-action: none on the signing area stops the page from scrolling while you draw.',
            ],
        ],
    ],
    [
        'num' => 70,
        'cat' => '09-forms-input',
        'slug' => '070-mini-rich-text-editor',
        'name' => 'Mini Rich Text Editor',
        'example' => 'a small editor with bold, headings, lists and links that exports clean HTML and Markdown',
        'title' => 'Rich Text Editor in Vanilla JavaScript: Toolbar, Clean Paste, Autosave, HTML and Markdown',
        'desc' => 'Free mini rich text editor in plain JavaScript. Bold, italic, headings, lists, quotes and links, keyboard shortcuts, clean paste, word count, autosave and HTML or Markdown export.',
        'keywords' => 'rich text editor javascript, wysiwyg editor, contenteditable editor, markdown export, text editor without library, simple html editor',
        'runs' => 'contenteditable and Selection API',
        'what' => [
            'A small rich text editor with a toolbar for bold, italic, underline, headings, quotes, lists and links, plus the usual keyboard shortcuts.',
            'Text pasted from web pages or Word is cleaned to simple HTML. The editor saves as you type, counts words and exports clean HTML or Markdown.',
        ],
        'when' => [
            'Comment and message boxes',
            'Simple blog or news admin',
            'Product descriptions in a shop admin',
            'Notes and knowledge base tools',
        ],
        'features' => [
            'Toolbar with active state',
            'Headings, quotes, lists and safe links',
            'Clean paste that strips styles and scripts',
            'Word count, reading time and autosave',
            'HTML and Markdown export',
        ],
        'steps' => [
            [
                'A div you can type in',
                'contenteditable turns a normal div into an editor. The toolbar runs editing commands like bold and formatBlock on the current selection.',
            ],
            [
                'Clean every paste',
                'Pasted HTML is parsed with DOMParser, and only safe tags like p, b, a and lists are kept. Styles, classes and scripts are removed.',
            ],
            [
                'Export two ways',
                'The cleaned HTML is shown as is, and a small walker turns the same tree into Markdown.',
            ],
        ],
        'code' => 'editor.addEventListener("paste", (e) => {
  e.preventDefault();
  const html = e.clipboardData.getData("text/html");
  const doc = new DOMParser().parseFromString(html, "text/html");
  doc.querySelectorAll("*").forEach((el) => {
    if (!ALLOWED.has(el.tagName)) el.replaceWith(...el.childNodes);
    else [...el.attributes].forEach((a) => a.name !== "href" && el.removeAttribute(a.name));
  });
  document.execCommand("insertHTML", false, doc.body.innerHTML);
});',
        'browsers' => 'Works in all modern browsers. execCommand is marked as old in the specs but is still supported everywhere.',
        'faq' => [
            [
                'Is execCommand safe to use?',
                'It is still supported in every browser. For a very large editor you may want a dedicated library, but for simple formatting it works well.',
            ],
            [
                'Can people paste harmful code?',
                'Pasted content is cleaned to a short list of safe tags, and link addresses must start with http, https or mailto. Clean it again on your server.',
            ],
            [
                'Where is the text saved?',
                'In localStorage in your browser, half a second after you stop typing.',
            ],
        ],
    ],
    [
        'num' => 71,
        'cat' => '10-ecommerce-business',
        'slug' => '071-shopping-cart-coupons',
        'name' => 'Shopping Cart with Coupons',
        'example' => 'a cart drawer with quantities, coupon codes, free shipping progress and saved items',
        'title' => 'Shopping Cart in Vanilla JavaScript: Cart Drawer, Coupons, Shipping and Saved Cart',
        'desc' => 'Free shopping cart in plain JavaScript. Add products, change quantities in a cart drawer, apply coupon codes, see free shipping progress, tax and totals, and keep the cart after reload.',
        'keywords' => 'shopping cart javascript, add to cart, cart drawer, coupon code javascript, localstorage cart, ecommerce javascript',
        'runs' => 'localStorage and Intl.NumberFormat',
        'what' => [
            'A small furniture shop with a slide-out cart. Add products, change quantities, remove items and see the subtotal, discount, shipping, tax and total update.',
            'Try three coupon codes, one with a minimum order. A progress bar shows how much more you need for free shipping, and the cart is saved in the browser.',
        ],
        'when' => [
            'Small online shops',
            'Restaurant and takeaway ordering',
            'Event and ticket sales',
            'Any site selling a few products',
        ],
        'features' => [
            'Cart drawer built on the dialog element',
            'Quantity buttons and remove',
            'Coupon codes with minimum order rules',
            'Free shipping progress bar',
            'Tax and totals, saved in localStorage',
        ],
        'steps' => [
            [
                'Cart is one small object',
                'Items are stored as product id and quantity. Prices are always read from the product list, so they cannot be edited in the cart.',
            ],
            [
                'Recalculate everything',
                'Subtotal, discount, shipping, tax and total are worked out again on every change, in that order.',
            ],
            [
                'Save after each change',
                'The cart object is saved to localStorage, so it survives a reload or coming back tomorrow.',
            ],
        ],
        'code' => 'const cart = JSON.parse(localStorage.getItem("cart") || "{}"); // { productId: qty }
function totals() {
  const sub = Object.entries(cart).reduce((a, [id, q]) => a + products[id].price * q, 0);
  const discount = code === "SAVE10" ? sub * 0.1 : 0;
  const shipping = sub >= 500 || code === "FREESHIP" ? 0 : 25;
  const tax = (sub - discount) * 0.2;
  return { sub, discount, shipping, tax, total: sub - discount + shipping + tax };
}
localStorage.setItem("cart", JSON.stringify(cart));',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Is a JavaScript cart safe?',
                'For showing the cart, yes. Always calculate the final price again on your server before taking payment.',
            ],
            [
                'How do I connect a payment provider?',
                'Send the cart items to your server, create a checkout session with your provider and redirect to it.',
            ],
            [
                'How long is the cart kept?',
                'Until the visitor clears their browser data. You can add a date and empty old carts after a few weeks.',
            ],
        ],
    ],
    [
        'num' => 72,
        'cat' => '10-ecommerce-business',
        'slug' => '072-product-variant-picker',
        'name' => 'Product Variant Picker',
        'example' => 'a product page where colour and size change the picture, price and stock',
        'title' => 'Product Variant Selector in JavaScript: Colour and Size Swatches with Stock and Price',
        'desc' => 'Free product variant picker in plain JavaScript. Choose colour and size, see the product image, price and stock change, sold out sizes greyed out, and a shareable URL for each variant.',
        'keywords' => 'product variant selector javascript, color size picker, product options, size selector, out of stock variant, ecommerce product page',
        'runs' => 'URLSearchParams and history.replaceState',
        'what' => [
            'A product page for a hoodie with five colours and six sizes. Picking a colour recolours the picture and shows which sizes are left.',
            'Sizes that are sold out are crossed out, low stock gets a warning, bigger sizes cost a little more, and the address bar always holds your exact choice.',
        ],
        'when' => [
            'Clothing and shoe shops',
            'Furniture with fabric and finish options',
            'Phone cases and accessories',
            'Any product with options',
        ],
        'features' => [
            'Colour swatches and size buttons built on radio inputs',
            'Stock per colour and size, sold out disabled',
            'Price changes by size, sale price by colour',
            'Low stock warnings',
            'Shareable URL for each variant',
        ],
        'steps' => [
            [
                'Stock per variant',
                'Stock is kept per colour and per size. Changing colour redraws the sizes and disables any that are sold out.',
            ],
            [
                'One picture, many colours',
                'The hoodie is an inline SVG, so changing colour just updates one fill. With photos, swap the image source instead.',
            ],
            [
                'Shareable URL',
                'URLSearchParams writes the colour and size into the address bar with replaceState, and reads them back when the page opens.',
            ],
        ],
        'code' => 'const params = new URLSearchParams(location.search);
let color = params.get("color") || "plum", size = params.get("size") || "";

function update() {
  sizes.forEach((s, i) => inputs[i].disabled = stock[color][i] === 0);
  hoodie.setAttribute("fill", colors[color]);
  history.replaceState(null, "", "?" + new URLSearchParams({ color, size }));
}',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Why radio inputs for swatches?',
                'They give keyboard support and one choice at a time for free, and screen readers announce the colour name.',
            ],
            [
                'How do I use real photos?',
                'Keep an image list per colour and change the img src when the colour changes.',
            ],
            [
                'Why put the choice in the URL?',
                'Customers can share or bookmark the exact product, and your ads can link straight to it.',
            ],
        ],
    ],
    [
        'num' => 73,
        'cat' => '10-ecommerce-business',
        'slug' => '073-product-filter-sort',
        'name' => 'Product Filter and Sort',
        'example' => 'a product listing with category, price, colour and rating filters saved in the URL',
        'title' => 'Product Filter in Vanilla JavaScript: Faceted Search, Sort and Filters Saved in the URL',
        'desc' => 'Free product filter and sort in plain JavaScript. Filter by category, price, colour, rating and stock, sort by price or rating, see active filter chips and share the URL.',
        'keywords' => 'product filter javascript, faceted search, sort products javascript, filter sidebar, url search params filter, ecommerce filtering',
        'runs' => 'URLSearchParams and the History API',
        'what' => [
            'A ceramics shop listing with a filter sidebar: categories with counts, a price range, colour swatches, minimum rating and in stock only, plus five ways to sort.',
            'Active filters appear as chips you can remove one by one. Everything is written to the URL, so a filtered view can be bookmarked or shared.',
        ],
        'when' => [
            'Online shop category pages',
            'Property and car listings',
            'Job boards and directories',
            'Course and event catalogues',
        ],
        'features' => [
            'Category, price, colour, rating and stock filters',
            'Five sort orders',
            'Result count and removable filter chips',
            'Filters saved in the URL and restored on load',
            'Works with back and forward buttons',
        ],
        'steps' => [
            [
                'Filter, then sort',
                'Each product must pass every active filter. The survivors are sorted with one of five compare functions.',
            ],
            [
                'The URL is the state',
                'Every change writes the filters to the address bar with URLSearchParams. Opening that link restores the same view.',
            ],
            [
                'Chips for active filters',
                'Each active filter becomes a small button above the results, and clicking it removes just that filter.',
            ],
        ],
        'code' => 'function run() {
  const s = readFilters();
  const list = products
    .filter((p) => (!s.cats.length || s.cats.includes(p.cat)) && p.price <= s.max && p.rating >= s.rating)
    .sort(sorters[s.sort]);
  const q = new URLSearchParams();
  s.cats.forEach((c) => q.append("cat", c));
  if (s.max !== Infinity) q.set("max", s.max);
  history.replaceState(null, "", "?" + q);
  render(list);
}',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Should filtering happen in the browser or on the server?',
                'In the browser is great for up to a few thousand products. For bigger catalogues, send the same URL parameters to your server.',
            ],
            [
                'Why store filters in the URL?',
                'Shared links and the back button then show the same results, and search engines can index popular filter pages.',
            ],
            [
                'How do the category counts work?',
                'They count products per category from the list. You can update them to reflect the other active filters.',
            ],
        ],
    ],
    [
        'num' => 74,
        'cat' => '10-ecommerce-business',
        'slug' => '074-checkout-form',
        'name' => 'Checkout Form',
        'example' => 'a one page checkout with address, delivery options, card checks and an order summary',
        'title' => 'Checkout Form in JavaScript: Card Formatting, Luhn Check, Delivery Options and Summary',
        'desc' => 'Free checkout form in plain JavaScript. Contact and address with autofill, delivery options that change the total, card number formatting with a Luhn check, expiry and CVC checks and an order summary.',
        'keywords' => 'checkout form javascript, credit card validation, luhn algorithm, card number formatting, checkout page, payment form',
        'runs' => 'Autofill tokens and the Luhn check',
        'what' => [
            'A one page checkout with contact details, delivery address, three delivery options and a card payment section, next to an order summary with photos.',
            'Delivery choice updates the total, the card number is formatted and checked with the Luhn algorithm, and expiry and security code are checked before the order is placed.',
        ],
        'when' => [
            'Small shop checkouts',
            'Donation and booking payments',
            'Subscription sign ups',
            'Learning how card checks work',
        ],
        'features' => [
            'Correct autocomplete tokens for fast autofill',
            'Delivery options that change the total',
            'Card number formatting and Luhn check',
            'Expiry and security code checks',
            'Sticky order summary with VAT',
        ],
        'steps' => [
            [
                'Let the browser fill it in',
                'Every field has the right autocomplete token, like given-name, postal-code and cc-number, so one tap can fill the whole form.',
            ],
            [
                'Format as they type',
                'Card numbers get a space every four digits and expiry dates get a slash, which makes mistakes easy to spot.',
            ],
            [
                'Check with Luhn',
                'The Luhn algorithm catches most typos in card numbers before the form is sent. Expiry must be in the future.',
            ],
        ],
        'code' => 'function luhn(num) {
  let sum = 0, alt = false;
  for (let i = num.length - 1; i >= 0; i--) {
    let d = +num[i];
    if (alt) { d *= 2; if (d > 9) d -= 9; }
    sum += d; alt = !alt;
  }
  return sum % 10 === 0;
}
luhn("4242424242424242"); // true
// <input autocomplete="cc-number" inputmode="numeric">',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Can I take real card payments with this form?',
                'No. Real card details should be typed into your payment provider\'s secure fields, never sent to your own server.',
            ],
            [
                'What is the Luhn check?',
                'A simple checksum built into card numbers. It catches most single digit typos and swapped digits.',
            ],
            [
                'Why do autocomplete tokens matter?',
                'They let browsers and password managers fill the form in one step, which makes more people finish checkout.',
            ],
        ],
    ],
    [
        'num' => 75,
        'cat' => '10-ecommerce-business',
        'slug' => '075-multi-currency-prices',
        'name' => 'Multi-currency Prices',
        'example' => 'prices that switch to the visitor\'s currency with local formatting and neat rounding',
        'title' => 'Multi-currency Prices in JavaScript: Currency Switcher with Local Formatting and Rounding',
        'desc' => 'Free multi-currency price switcher in plain JavaScript. Detect the visitor\'s currency, convert prices, round to neat price points, format for each country and remember the choice.',
        'keywords' => 'currency converter javascript, multi currency prices, currency switcher, intl numberformat currency, price localization, ecommerce currency',
        'runs' => 'Intl.NumberFormat and Intl.Locale',
        'what' => [
            'A product grid that shows prices in nine currencies. The page guesses your currency from the browser language and remembers what you pick.',
            'Prices can be rounded to neat price points, and a table shows the same product formatted in every currency, so you can see how local formats differ.',
        ],
        'when' => [
            'Shops selling to several countries',
            'Hotels and tour operators',
            'Software and course pricing pages',
            'Travel price comparisons',
        ],
        'features' => [
            'Nine currencies with local number formats',
            'Currency guess from the browser language',
            'Tidy price rounding',
            'Choice saved for next time',
            'Comparison table of all formats',
        ],
        'steps' => [
            [
                'Guess the currency',
                'Intl.Locale turns the browser language into a region, like en-GB into GB, and a small table maps that to a currency.',
            ],
            [
                'Convert, then tidy',
                'The dollar price is multiplied by the rate, then rounded up to a neat price point so a chair costs 229 euros, not 229.08.',
            ],
            [
                'Format the local way',
                'Intl.NumberFormat adds the right symbol, separators and decimals. Yen has no decimals and rupees group digits in lakhs.',
            ],
        ],
        'code' => 'const region = new Intl.Locale(navigator.language).maximize().region; // "GB"
const currency = { GB: "GBP", DE: "EUR", IN: "INR", BD: "BDT" }[region] || "USD";

const local = price * rates[currency];
new Intl.NumberFormat("en-IN", { style: "currency", currency: "INR" })
  .format(124500);                     // "₹1,24,500.00"',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Where should real exchange rates come from?',
                'From your payment provider or a rates API, cached on your server once a day. Charge in the currency you show.',
            ],
            [
                'Why round prices?',
                'Converted prices like 229.08 look odd. Rounding to a tidy price point looks deliberate and builds trust.',
            ],
            [
                'Is guessing from the language reliable?',
                'It is a good first guess. Always let people change the currency themselves.',
            ],
        ],
    ],
    [
        'num' => 76,
        'cat' => '10-ecommerce-business',
        'slug' => '076-invoice-generator',
        'name' => 'Invoice Generator',
        'example' => 'an editable invoice that does the maths and prints to a clean PDF',
        'title' => 'Invoice Generator in Vanilla JavaScript: Editable Line Items, Tax, Discount and Print to PDF',
        'desc' => 'Free invoice generator in plain JavaScript. Edit your details, add line items, set tax and discount, pick a currency and due date, and print a clean PDF. Saved in your browser.',
        'keywords' => 'invoice generator javascript, invoice template html, print invoice pdf, line items calculator, freelance invoice, billing javascript',
        'runs' => 'Print CSS and localStorage',
        'what' => [
            'An invoice you edit directly on the page: your details, the client, the project, line items with quantity and rate, discount, tax and notes.',
            'Totals update as you type, dates fill in by themselves, the currency can be changed, and printing or saving as PDF gives a clean page without buttons.',
        ],
        'when' => [
            'Freelancers and small studios',
            'Quotes and estimates',
            'Small shops without billing software',
            'Internal recharge notes',
        ],
        'features' => [
            'Editable text right on the invoice',
            'Add and remove line items',
            'Discount, tax and currency',
            'Issue and due dates filled in',
            'Print to PDF with clean print styles',
        ],
        'steps' => [
            [
                'Type on the page',
                'Names, addresses and descriptions are contenteditable, so the invoice itself is the form. Numbers use small inputs.',
            ],
            [
                'One calc function',
                'Every change runs calc(): line amounts, subtotal, discount, tax and total, then saves everything to localStorage.',
            ],
            [
                'Print CSS hides the rest',
                'A print media query hides the whole page except the invoice, and removes buttons and input borders, so Save as PDF looks clean.',
            ],
        ],
        'code' => 'function calc() {
  const sub = rows.reduce((a, r) => a + r.qty * r.rate, 0);
  const discount = sub * discountPct / 100;
  const tax = (sub - discount) * taxPct / 100;
  total.textContent = money(sub - discount + tax);
  localStorage.setItem("invoice", JSON.stringify(data));
}
/* print only the invoice */
@media print {
  body * { visibility: hidden; }
  .invoice, .invoice * { visibility: visible; }
}',
        'browsers' => 'Works in all modern browsers. Use the print dialog and choose Save as PDF.',
        'faq' => [
            [
                'How do I make a PDF?',
                'Click Print or save PDF and pick Save as PDF in the print dialog. The print styles hide everything except the invoice.',
            ],
            [
                'Is my invoice saved?',
                'Yes, in localStorage in your browser. It is still there next time you open the page on the same device.',
            ],
            [
                'Can I add my logo?',
                'Yes. Put an img tag in the header. It will print with the invoice.',
            ],
        ],
    ],
    [
        'num' => 77,
        'cat' => '10-ecommerce-business',
        'slug' => '077-booking-slot-calendar',
        'name' => 'Booking Slot Calendar',
        'example' => 'an appointment picker with services, available time slots and a calendar file',
        'title' => 'Appointment Booking Calendar in JavaScript: Time Slots, Services, Time Zones and ICS File',
        'desc' => 'Free booking slot calendar in plain JavaScript. Pick a service, day and free time slot, see times in your own time zone, fill in your details and download a calendar file.',
        'keywords' => 'booking calendar javascript, appointment scheduler, time slot picker, book appointment online, ics calendar file, time zone booking',
        'runs' => 'Intl.DateTimeFormat and ICS files',
        'what' => [
            'A booking page with four services of different lengths, a strip of the next seven days and a grid of free times. Longer services show fewer slots.',
            'Booked times, lunch and Sundays are unavailable, times appear in the visitor\'s own time zone, and after booking you can download a calendar file.',
        ],
        'when' => [
            'Salons, barbers and spas',
            'Clinics and therapists',
            'Tutors and coaches',
            'Consultations and demos',
        ],
        'features' => [
            'Services with different durations',
            'Seven day strip with closed days',
            'Free slots that fit the full service',
            'Times in the visitor\'s time zone',
            'Downloadable ICS calendar file',
        ],
        'steps' => [
            [
                'Slots fit the service',
                'For each day the script walks from opening to closing time and keeps a start time only if the whole service fits without touching a booked slot.',
            ],
            [
                'Local times for everyone',
                'Times are made with Date and shown with toLocaleTimeString, so each visitor sees them in their own time zone and format.',
            ],
            [
                'A real calendar file',
                'The confirmation builds an ICS file as a data link. Opening it adds the appointment to Google, Apple or Outlook calendars.',
            ],
        ],
        'code' => 'for (let m = open; m + length <= close; m += 15) {
  const clash = booked.some(([start, len]) => m < start + len && m + length > start);
  if (!clash) slots.push(m);           // minutes after midnight
}
const ics = `BEGIN:VCALENDAR\\r\\nVERSION:2.0\\r\\nBEGIN:VEVENT\\r\\n` +
  `DTSTART:${utc(start)}\\r\\nDTEND:${utc(end)}\\r\\nSUMMARY:Haircut\\r\\n` +
  `END:VEVENT\\r\\nEND:VCALENDAR`;
link.href = "data:text/calendar," + encodeURIComponent(ics);',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Where do booked times come from?',
                'In the demo they are made up. In a real site, fetch booked slots for the chosen day from your server.',
            ],
            [
                'How do I stop double bookings?',
                'Check the slot again on the server when the booking is saved, and refuse it if someone else took it a moment earlier.',
            ],
            [
                'Does the ICS file work with Google Calendar?',
                'Yes. Opening the file on a phone or computer offers to add it to the default calendar app.',
            ],
        ],
    ],
    [
        'num' => 78,
        'cat' => '10-ecommerce-business',
        'slug' => '078-store-locator',
        'name' => 'Store Locator',
        'example' => 'a list of shops sorted by distance from you, with open now status and a simple map',
        'title' => 'Store Locator in Vanilla JavaScript: Nearest Store by Distance, Open Now and SVG Map',
        'desc' => 'Free store locator in plain JavaScript. Use your location or pick an area, sort stores by distance with the haversine formula, see which are open now and view them on a simple map.',
        'keywords' => 'store locator javascript, find nearest store, geolocation distance, haversine formula, open now hours, shop finder',
        'runs' => 'Geolocation API and the haversine formula',
        'what' => [
            'A list of nine London stores with a simple map. Share your location or choose an area, and the stores are sorted by distance with the nearest one first.',
            'Each store shows whether it is open right now based on weekday and weekend hours. Tick Open now only to hide the closed ones, and click a store to highlight it on the map.',
        ],
        'when' => [
            'Shops and restaurant chains',
            'Service centres and clinics',
            'Stockists of your products',
            'Pickup and drop off points',
        ],
        'features' => [
            'Use my location with a fallback area list',
            'Distance sorting with the haversine formula',
            'Open now based on opening hours',
            'Open now only filter',
            'SVG map with no API key',
        ],
        'steps' => [
            [
                'Where are you?',
                'The Geolocation API asks for permission and returns latitude and longitude. If people say no, they can pick an area instead.',
            ],
            [
                'Real distance',
                'The haversine formula works out the distance between two points on a sphere, which is accurate enough for finding a nearby shop.',
            ],
            [
                'A map without a library',
                'Store positions are scaled from latitude and longitude into an SVG box. Swap in a map library later if you need street detail.',
            ],
        ],
        'code' => 'function haversine(lat1, lng1, lat2, lng2) {
  const R = 6371, r = Math.PI / 180;                     // km
  const a = Math.sin((lat2 - lat1) * r / 2) ** 2 +
            Math.cos(lat1 * r) * Math.cos(lat2 * r) * Math.sin((lng2 - lng1) * r / 2) ** 2;
  return 2 * R * Math.asin(Math.sqrt(a));
}
navigator.geolocation.getCurrentPosition(({ coords }) => {
  stores.sort((a, b) => haversine(coords.latitude, coords.longitude, a.lat, a.lng)
                      - haversine(coords.latitude, coords.longitude, b.lat, b.lng));
});',
        'browsers' => 'Works in all modern browsers. Location needs HTTPS and the visitor\'s permission.',
        'faq' => [
            [
                'Do I need a map API key?',
                'Not for this version. The map is a simple SVG. Add a map library later if you need streets and zoom.',
            ],
            [
                'Why is my location not used?',
                'Geolocation needs a secure HTTPS page and permission. If it is blocked, the area list still works.',
            ],
            [
                'How accurate is the distance?',
                'It is a straight line distance, usually within a few percent. Walking or driving routes will be longer.',
            ],
        ],
    ],
    [
        'num' => 79,
        'cat' => '10-ecommerce-business',
        'slug' => '079-order-tracking-timeline',
        'name' => 'Order Tracking Timeline',
        'example' => 'an order status page with a step timeline, delivery estimate and live updates',
        'title' => 'Order Tracking Page in JavaScript: Status Timeline, Delivery Countdown and Live Updates',
        'desc' => 'Free order tracking timeline in plain JavaScript. Look up an order number, see each step with times, a delivery countdown, simulated live updates and optional browser notifications.',
        'keywords' => 'order tracking javascript, delivery status timeline, track order page, shipping progress, order status page, notification api',
        'runs' => 'Notification API and timers',
        'what' => [
            'An order tracking page. Enter an order number to see a five step timeline, from placed to delivered, with times, a progress bar and the expected delivery day.',
            'Live updates move the order along step by step, as if new data came from your server, and can send a browser notification when the status changes.',
        ],
        'when' => [
            'Online shop order status pages',
            'Food and grocery delivery',
            'Repair and service jobs',
            'Print and made to order products',
        ],
        'features' => [
            'Order lookup with helpful not found message',
            'Five step timeline with times',
            'Progress bar and delivery countdown',
            'Simulated live updates',
            'Optional browser notifications',
        ],
        'steps' => [
            [
                'Steps and times',
                'Each order has a current step. Earlier steps are done and get a time, the current step pulses, and later steps wait.',
            ],
            [
                'Estimate and countdown',
                'The delivery estimate turns into a friendly countdown that refreshes every 30 seconds.',
            ],
            [
                'Live updates and alerts',
                'A timer stands in for polling your server. When the status changes, a toast appears and, if allowed, a browser notification.',
            ],
        ],
        'code' => 'async function poll(orderId) {
  const res = await fetch(`/api/orders/${orderId}`);
  const { step } = await res.json();
  if (step !== lastStep) {
    lastStep = step;
    render(step);
    if (Notification.permission === "granted")
      new Notification("Order update", { body: steps[step - 1].title });
  }
}
setInterval(() => poll("10482"), 60000);',
        'browsers' => 'Works in all modern browsers. Notifications need permission and a secure page.',
        'faq' => [
            [
                'How do I connect this to real orders?',
                'Replace the ORD object with a fetch to your order API, and call it on a timer or when the page becomes visible again.',
            ],
            [
                'Should I use polling or push?',
                'Polling every minute is simple and fine for most shops. Push notifications need a service worker and a server.',
            ],
            [
                'Why ask for postcode too?',
                'So people cannot look up other customers\' orders just by guessing numbers.',
            ],
        ],
    ],
    [
        'num' => 80,
        'cat' => '10-ecommerce-business',
        'slug' => '080-wishlist-compare',
        'name' => 'Wishlist and Compare',
        'example' => 'heart products to a saved wishlist and compare up to three side by side',
        'title' => 'Wishlist and Product Compare in JavaScript: Saved Hearts, Share Link and Comparison Table',
        'desc' => 'Free wishlist and product compare in plain JavaScript. Save favourites with a heart, keep them after reload, share the list as a link, and compare up to three products with differences highlighted.',
        'keywords' => 'wishlist javascript, product compare table, save favorites localstorage, compare products, share wishlist link, ecommerce wishlist',
        'runs' => 'localStorage and URL parameters',
        'what' => [
            'A product grid where every item has a heart for the wishlist and a Compare tick box. Saved items stay after a reload and can be shared as a link.',
            'Pick two or three products and open a comparison table that highlights rows where they differ and shows the best price, rating, delivery time and warranty in green.',
        ],
        'when' => [
            'Furniture and electronics shops',
            'Comparing plans or courses',
            'Property and car listings',
            'Gift lists',
        ],
        'features' => [
            'Heart button with a small pop animation',
            'Wishlist saved in localStorage',
            'Share link that adds items to someone else\'s list',
            'Compare up to three products',
            'Differences and best values highlighted',
        ],
        'steps' => [
            [
                'A set of saved ids',
                'The wishlist is a Set of product ids saved to localStorage, so hearts stay filled after a reload or a new visit.',
            ],
            [
                'Share as a link',
                'The share link adds ?w=0,2,5 to the page address. Opening it merges those products into the other person\'s wishlist.',
            ],
            [
                'Compare what differs',
                'For up to three products, each row checks if the values differ and highlights the row, and marks the best value, like the lowest price.',
            ],
        ],
        'code' => 'const wish = new Set(JSON.parse(localStorage.getItem("wish") || "[]"));
heart.onclick = () => {
  wish.has(id) ? wish.delete(id) : wish.add(id);
  localStorage.setItem("wish", JSON.stringify([...wish]));
};
shareInput.value = location.origin + location.pathname + "?w=" + [...wish].join(",");

const values = picked.map((p) => p.price);
const differs = new Set(values).size > 1;
const best = Math.min(...values);',
        'browsers' => 'Works in all modern browsers.',
        'faq' => [
            [
                'Should the wishlist be saved on the server?',
                'For signed in customers, yes, so it follows them across devices. For guests, localStorage is simple and works well.',
            ],
            [
                'Why only three to compare?',
                'More than three columns gets hard to read, especially on phones.',
            ],
            [
                'Is the share link private?',
                'It only lists product numbers, nothing personal. Anyone with the link sees those products.',
            ],
        ],
    ],
];
