/*
Author : kachi
date : 6/6/2022
VScode
*/


/* get the image container */
const video = document.getElementById('video')

/* face expression model weights*/

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('emotion/models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('emotion/models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('emotion/models'),
  faceapi.nets.faceExpressionNet.loadFromUri('emotion/models')
]).then(startVideo)

/* initiate video recording */
function startVideo() {
  navigator.getUserMedia(
    { video:true, audio:true },
    stream => video.srcObject = stream,
    err => console.error(err)
  );
}


video.addEventListener('play', () => {
  const canvas = faceapi.createCanvasFromMedia(video)
  document.getElementById('canvaz').append(canvas)
  const displaySize = { width: video.width, height: video.height }
  faceapi.matchDimensions(canvas, displaySize)
  setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
    faceapi.draw.drawDetections(canvas, resizedDetections)
    faceapi.draw.drawFaceLandmarks(canvas, resizedDetections)
    faceapi.draw.drawFaceExpressions(canvas, resizedDetections)
  }, 100)
})