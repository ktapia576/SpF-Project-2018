var video, canvas, ctx, imgData;

function start() {
  //Setup video Stream
  video = document.querySelector("#videoElement");

  if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({
        video: true
      })
      .then(function(stream) {
        video.srcObject = stream;
      })
      .catch(function(err0r) {
        console.log("Something went wrong! May have to use chrome!");
      });
  }

  // Get the canvas and obtain a context for
  // drawing in it
  canvas = document.getElementById("canvasElement");
  ctx = canvas.getContext('2d');
}

function snapshot() {
  // Draws current image from the video element into the canvas
  ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
  alert("Snapshot Taken!");
}

function upload() {
  imgData = canvas.toDataURL(); //save image in Base64 with default PNG format

  //TEST REMOVING PREVIOUS IMAGE FROM CANVAS
  //ctx.clearRect(0, 0, canvas.width, canvas.height);

  $.ajax({
    type: "POST",
    url: "src/uploadSnap.php",
    data:  {
     imgData: imgData
    }
  })
  .done(function() {
    alert("Uploaded Snap");
    console.log(imgData);
  });

}

function load() {
  var myImage = new Image();
  myImage.src = imgData;

  //Wait for image to load before drawing
  myImage.onload = function() {
    // execute drawImage statements here
    ctx.drawImage(myImage, 0, 0, canvas.width, canvas.height); //Update canvas with saved image
  };
}
