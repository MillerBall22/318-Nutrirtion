function myFunction() {
  var x = document.getElementById("mylinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}


var GalleryPhotos = [
  'url("../Photos/Sign Up.jpg")',
  'url("../Photos/About.jpg")',
  'url("../Photos/Reference.jpg")',
  'url("../Photos/Suttie 318.jpg")'
];

var galleryButtons = document.querySelectorAll("div.secondnav > button");
var Backbtn = document.getElementById("back-btn");
var Forwardbtn = document.getElementById("forward-btn");
var contents = document.querySelector("div.contents");
var information = document.querySelectorAll("div.information");
var gallery = 3;
var button =3;

galleryButtons[0].addEventListener("click", function() {
  button = 0;
  gallery = galleryChose(gallery, button);
});

galleryButtons[1].addEventListener("click", function() {
  button = 1;
  gallery = galleryChose(gallery, button);
});
galleryButtons[2].addEventListener("click", function() {
  button = 2;
  gallery = galleryChose(gallery, button);
});
galleryButtons[3].addEventListener("click", function() {
  button = 3;
  gallery = galleryChose(gallery, button);
});

Backbtn.addEventListener("click", function() {
gallery = galleryBack(gallery);
});

Forwardbtn.addEventListener("click", function() {
gallery = galleryForward(gallery);
});

function galleryChose(gallery, i){
  galleryHideInfo(gallery);
  gallery = i;
  galleryShowInfo(gallery);
  return gallery;
}

function galleryBack (gallery){
  galleryHideInfo(gallery);
  if(gallery === galleryButtons.length-1){
    gallery=0;
  }else{
    gallery++;
  }
  galleryShowInfo(gallery);
  return gallery;
}

function galleryForward(gallery){
  galleryHideInfo(gallery);
  if(gallery === 0){
    gallery=galleryButtons.length-1;
  }else{
    gallery--;
  }
  galleryShowInfo(gallery);
  return gallery;
}

function galleryHideInfo(gallery){
  galleryButtons[gallery].setAttribute("class", "")
  information[gallery].setAttribute("class", "information hidden")
}
function galleryShowInfo(gallery){
  galleryButtons[gallery].setAttribute("class", "active")
  information[gallery].setAttribute("class", "information active")
  contents.style.backgroundImage = GalleryPhotos[gallery];
}
