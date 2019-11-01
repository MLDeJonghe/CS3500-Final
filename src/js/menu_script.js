var collapsible = document.getElementsByClassName("collapsible");
var i;

for(i = 0; i < collapsible.length; i++){
  collapsible[i].addEventListener("click", function(){
    var subMenu = this.nextElementSibling;
    var plus = this.querySelectorAll("img.drop")[0];
    var minus = this.querySelectorAll("img.drop")[1];
    
    this .classList.toggle("disabled")
    subMenu.classList.toggle("nonactive");
    plus.classList.toggle("nonactive");
    minus.classList.toggle("nonactive");
  })
}

console.log("COMPLETE");