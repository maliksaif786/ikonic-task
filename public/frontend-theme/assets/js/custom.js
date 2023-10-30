
const section1 = document.getElementById("step1");
const section2 = document.getElementById("step2");
const selectSection = document.getElementById("choseSection");
const myModal = document.getElementById("exampleModal");
var widthValue = 0;
var step = 0;
var elem = document.getElementById("progress-bar");
// var widthAnim = widthValue;
var label = document.getElementById("progressLabel")

function reviewClicked() {
    goPrevStep(1)
}
function showSection(sectionId) {
    console.log("sectionId", sectionId)
    selectSection.style.display = "none";
    if (sectionId === 1 || sectionId === 2) {
        debugger
        console.log("section1",section1)
        section1.style.display = "block";
        section2.style.display = "none";
        const contentDiv = document.getElementById("step1Buttons");
        contentDiv.innerHTML = sectionId === 1 ? "<button class='btn btn-lg btn-dark my-2 my-sm-0' type='button' onclick='goPrevStep(1)'>PREVIOUS</button><button class='btn btn-lg btn-primary my-2 my-sm-0' type='button' onclick='showSection(3)'> NEXT</button>" : "<button class='btn btn-lg btn-dark my-2 my-sm-0' type='button' onclick='goPrevStep(1)'>PREVIOUS</button><button class='btn btn-lg btn-primary my-2 my-sm-0' type='submit' onclick='handleQuickReview()'> NEXT</button>";  
  } else if (sectionId === 3) {
        section1.style.display = "none";
        section2.style.display = "block";
        move();
    
    }
    else if (sectionId === 4) {
        move();
    
  }
}


function handleQuickReview() {
    console.log("handle quick review called ")
}

function goPrevStep(id) {
    console.log("prev called")
    if (id == 1) {
        selectSection.style.display = "block"
        section1.style.display = "none";
        section2.style.display = "none";
    }
    else if (id == 2) {
        showSection(id)
    }
}


function move() {
//   var id = setInterval(frame, 20);
    console.log("move called")
    var widthIncrement = 12.5;
    widthValue = widthValue + widthIncrement;
    console.log("widthValue",widthValue)
    step++;
    console.log("step",step)
    elem.style.width = widthValue + '%';
    label.innerHTML = step + ' of 8 completed';
//   function frame() {
//     if (widthAnim >= widthValue || widthValue > 100) {
//       clearInterval(id);
//     } else {
//       widthAnim++;
//       elem.style.width = widthAnim + '%';
//       label.innerHTML = widthAnim + ' of 8 completed';
//     }
//   }
}


myModal.addEventListener("hidden.bs.modal", function (event) {
    console.log("dismessed")
  // Call your function here when the modal is dismissed
   if (event && event.target === myModal && event.relatedTarget === null) {
        console.log("Modal dismissed");
    }
});