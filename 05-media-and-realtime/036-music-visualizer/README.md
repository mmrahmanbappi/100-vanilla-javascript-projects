# Music Visualizer in JavaScript (Free Project)

![Music Visualizer JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/036-music-visualizer/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/036-music-visualizer/

Free music visualizer in plain JavaScript. Bars, waveform and a glowing ring react to a built in synth loop, your own songs or your microphone, using Web Audio.

## What is the Music Visualizer?

Play the built in beat, drop in a song or sing into your microphone, and the screen moves with the sound. Pick bars, a waveform or a glowing ring, and change the colors and sensitivity.

The Web Audio API sends the sound through an AnalyserNode, which splits it into frequency bands many times a second. Canvas turns those numbers into shapes. Even the demo beat is made in code with oscillators.

## What it does

- Built-in synth loop made with oscillators, so no audio file is needed
- Play your own MP3, WAV or OGG files, or use the microphone
- Three styles: frequency bars, waveform and radial ring
- Beat pulse that reacts to the bass
- Color themes, sensitivity and a fullscreen button

## How it works

1. **Route the sound.** The source (synth, file or mic) goes through an AnalyserNode on its way to the speakers.
2. **Read frequencies.** Every frame, the analyser runs a fast Fourier transform and returns loudness for 128 frequency bands.
3. **Draw.** Each band becomes a bar, a point on a wave or a spoke on the ring. The average of the lowest bands drives the beat pulse.

## The key JavaScript

```js
const ctx = new AudioContext();
const analyser = ctx.createAnalyser();
analyser.fftSize = 256;                               // 128 frequency bands
source.connect(analyser).connect(ctx.destination);

const bins = new Uint8Array(analyser.frequencyBinCount);
(function draw() {
  analyser.getByteFrequencyData(bins);                // 0 to 255 per band
  bins.forEach((v, i) => canvas.fillRect(i * w, H - v, w - 2, v));
  requestAnimationFrame(draw);
})();
```

## Browser support

Every modern browser. Sound starts only after you click, as browsers require.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**How does an audio visualizer work?**

An AnalyserNode runs a fast Fourier transform on the sound and returns loudness per frequency band. You draw each band as a bar or point.

**Why does nothing play until I click?**

Browsers block sound until the user interacts with the page. The first click starts the audio.

**Is the microphone sound played back?**

No. It is only analyzed, so there is no echo or feedback.

## License

MIT. Free for personal and commercial use.
