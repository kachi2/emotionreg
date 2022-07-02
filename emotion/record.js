window.onload = function(){
const parts = [];
navigator.mediaDevices.getUserMedia({audio:true, video:true}).then(stream => {
    document.getElementById('video').srcObject = stream;
    document.getElementById("recordvideo").onclick = function(){
      alert('video record started succesfully');
      MediaRecorder = new MediaRecorder(stream);
      MediaRecorder.start(1000);
      MediaRecorder.ondataavailable = function(e){
        parts.push(e.data);
      }
    };
  })
  

document.getElementById('stopvideo').onclick = function(){
  MediaRecorder.stop();
  const blob = new Blob(parts, {
    type:"video/webm"
  });
  const url = URL.createObjectURL(blob);
  const a = document.createElement("a");
  document.body.appendChild(a);
  a.style = "display:none";
  a.href=url;
  a.download = "test.webm";
  a.click();
}
}