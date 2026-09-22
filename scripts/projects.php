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
        'ready' => false,
    ],
    [
        'num' => 3,
        'slug' => '03-pwa-and-offline',
        'name' => 'PWA and Offline',
        'ready' => false,
    ],
    [
        'num' => 4,
        'slug' => '04-security-and-auth',
        'name' => 'Security and Auth',
        'ready' => false,
    ],
    [
        'num' => 5,
        'slug' => '05-media-and-realtime',
        'name' => 'Media and Real Time',
        'ready' => false,
    ],
    [
        'num' => 6,
        'slug' => '06-hardware-and-performance',
        'name' => 'Hardware and Performance',
        'ready' => false,
    ],
    [
        'num' => 7,
        'slug' => '07-developer-tools',
        'name' => 'Developer Tools',
        'ready' => false,
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
];
