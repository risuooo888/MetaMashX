let localVideo = document.getElementById("localVideo");
let remoteVideo = document.getElementById("remoteVideo");

let peerConnection;
let localStream;

async function startChat() {
  localStream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
  localVideo.srcObject = localStream;

  peerConnection = new RTCPeerConnection();

  localStream.getTracks().forEach(track => {
    peerConnection.addTrack(track, localStream);
  });

  peerConnection.ontrack = event => {
    remoteVideo.srcObject = event.streams[0];
  };

  // --- Placeholder for signaling server connection ---
  alert("Real-time connection to strangers requires signaling server setup. Coming next.");
}
