let jsonData;
var idarray = [];
let touchArea = document.getElementById("imageTouch");

fetch('assets/json/data.json')
  .then(response => response.json())
  .then(data => {
    jsonData = data;
  })
  .catch(error => {
    console.error('Error loading JSON file:', error);
  });

function selectgenre(searchterm) {
    window.location.href = "bookselect.php?genre=" + searchterm;
  }

function preference(choice, id, count) {
  if(idarray.length < 3){
    if(choice == "yes"){
      $("#card-"+ id +"").addClass("d-none");
      idarray.push(id)
      console.log("yes!");
      console.log(idarray);
    }
    else {
      $("#card-"+ id +"").addClass("d-none");
      console.log("no!");
      console.log(idarray);
    }
  }
  if(idarray.length == 3) {
    window.location.href = "finalbookselect.php?id=" + idarray;
  }
  if(count == 0) {
    window.location.href = "index.php"
  }
}

function moveImageLeft(id) {
  var image = document.getElementById("image-"+ id +"");
  image.style.transform = 'translateX(-70px)';
  image.style.transition = '0.5s';
  setTimeout(function() {
    image.style.transform = 'translateX(0)';
  }, 1000);
}

function moveImageRight(id) {
  var image = document.getElementById("image-"+ id +"");
  image.style.transform = 'translateX(70px)';
  image.style.transition = '0.5s';
  setTimeout(function() {
    image.style.transform = 'translateX(0)';
  }, 2000);
}