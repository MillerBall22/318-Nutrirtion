var GalleryPhotos = [
  'url("../Photos/Sign Up.jpg")',
  'url("../Photos/About.jpg")',
  'url("../Photos/Reference.jpg")',
  'url("../Photos/Suttie 318.jpg")'
];

var contents = document.querySelector("div.contents");
var information = document.querySelectorAll("div.information");
var programButtons = document.querySelectorAll("button.programButton");
var program = 0;

programButtons[0].addEventListener("click", function() {
  button = 0;
  program = programChose(program, button);
});

programButtons[1].addEventListener("click", function() {
  button = 1;
  program = programChose(program, button);
});
programButtons[2].addEventListener("click", function() {
  button = 2;
  program = programChose(program, button);
});
programButtons[3].addEventListener("click", function() {
  button = 3;
  program = programChose(program, button);
});

function programChose(program, i){
  programHideInfo(program);
  program = i;
  programShowInfo(program);
  return program;
}

function programHideInfo(program){
  information[program].setAttribute("class", "information hidden")
  programButtons[program].setAttribute("class", "programButton")
}
function programShowInfo(program){
  information[program].setAttribute("class", "information active")
  programButtons[program].setAttribute("class", "programButton hidden")
  contents.style.backgroundimage = GalleryPhotos[program];
}
