# Countdown Timer Kit in JavaScript (Free Project)

![Countdown Timer Kit JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/085-countdown-timer-kit/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/11-content-data/085-countdown-timer-kit/

Free countdown timer kit in plain JavaScript. Event countdown to any date and time zone, a daily sale timer, a kitchen timer with an alarm sound and a stopwatch with laps. Accurate even in background tabs.

## What is the Countdown Timer Kit?

Four timers in one kit. An event countdown to any date in any time zone, a daily sale timer that ends at midnight local time, a kitchen timer with a progress ring and alarm, and a stopwatch with laps.

All of them count from real clock times rather than adding up ticks, so they stay accurate after the tab has been hidden or the phone has been locked.

## What it does

- Event countdown with time zone choice
- Honest daily sale timer
- Kitchen timer with ring, sound and vibration
- Stopwatch with best and worst laps
- Accurate in background tabs

## How it works

1. **Count to a target time.** Timers store the end time, not a counter. Each tick works out what is left from the clock, so background tabs and slow devices never drift.
2. **Time zones done right.** The event countdown converts the chosen date and zone into an exact moment, so everyone sees the same countdown wherever they are.
3. **Sound without files.** The kitchen timer makes three beeps with the Web Audio API. The audio context starts on the Start click, which browsers require.

## The key JavaScript

```js
let end = performance.now() + minutes * 60000;
function tick() {
  const left = Math.max(0, end - performance.now());   // no drift
  display.textContent = format(left);
  if (left === 0) beep(); else requestAnimationFrame(tick);
}
function beep() {
  const ctx = new AudioContext(), osc = ctx.createOscillator();
  osc.frequency.value = 880; osc.connect(ctx.destination);
  osc.start(); osc.stop(ctx.currentTime + 0.3);
}
```

## Browser support

Works in all modern browsers. Sound needs one tap on Start first, which all browsers require.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Why does my setInterval timer drift?**

Browsers slow timers down in background tabs. Store the end time and calculate what is left on every tick instead.

**Are fake urgency timers a good idea?**

No. Timers that reset on reload mislead customers and can break consumer law. This sale timer ends at a real time.

**Why is there no sound until I press Start?**

Browsers only allow audio after a user action. The first click allows it.

## License

MIT. Free for personal and commercial use.
