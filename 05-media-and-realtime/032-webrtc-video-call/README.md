# Video Call App in JavaScript (Free Project)

![Video Call App JavaScript project preview](preview.png)

**Live demo:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/032-webrtc-video-call/demo.html
**Details and code:** https://mmrahmanbappi.github.io/vanilla-javascript-projects/05-media-and-realtime/032-webrtc-video-call/

Free WebRTC video call in plain JavaScript. Camera, mute, screen share and live stats. Connect two tabs automatically or two devices by copying a code.

## What is the Video Call App?

This is a real video call where audio and video go straight from one browser to the other. Test it with two tabs on the same computer, or send a short code to a friend to connect two devices.

WebRTC handles the camera, the connection and the media. The two sides only need to swap a description of the call once, and here that happens through a tab channel or through codes you copy and paste.

## What it does

- Two-tab mode connects automatically over BroadcastChannel
- Two-device mode: copy the offer code, paste back the answer code
- Mute, camera off and screen share (switches the track without reconnecting)
- Live stats: bitrate, resolution, frame rate and round trip time
- Uses a public STUN server to find a direct route between networks

## How it works

1. **Get media.** getUserMedia turns on the camera and microphone and shows your own video.
2. **Swap descriptions.** One side makes an offer, the other an answer. They reach each other through a tab channel or through codes you copy.
3. **Connect directly.** ICE finds a network path, then audio and video flow peer to peer with no server in the middle.

## The key JavaScript

```js
const pc = new RTCPeerConnection({ iceServers: [{ urls: "stun:stun.l.google.com:19302" }] });
stream.getTracks().forEach((t) => pc.addTrack(t, stream));
pc.ontrack = (e) => (remoteVideo.srcObject = e.streams[0]);

// Caller
await pc.setLocalDescription(await pc.createOffer());
send(pc.localDescription);                 // any channel: tabs, codes, WebSocket...

// Callee
await pc.setRemoteDescription(offer);
await pc.setLocalDescription(await pc.createAnswer());
send(pc.localDescription);
```

## Browser support

Every modern browser. Needs HTTPS or localhost. Some strict company or mobile networks need a TURN server, which this demo does not include.

## How to use

1. Download `demo.html` from this folder.
2. Serve the folder with `npx serve .` or `python -m http.server`, then open it in your browser.
3. Change the text and colors, and upload it anywhere. One file, no build step.

## Questions

**Do I need a server for WebRTC?**

Only to swap the first connection details, called signaling. This demo avoids a server by using copy and paste or a tab channel.

**Why does the call fail on some networks?**

Strict company or mobile networks block direct connections. Real apps add a TURN server to relay the media in those cases.

**How does screen sharing work here?**

getDisplayMedia gets the screen, and replaceTrack swaps it into the call without reconnecting.

## License

MIT. Free for personal and commercial use.
