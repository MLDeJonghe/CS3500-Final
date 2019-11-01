var headers = document.getElementsByTagName("h2");

var kNode = document.getElementById("kalamazoo");
var fNode = document.getElementById("detroit");
var dNode = document.getElementById("flint");


for (var i = 0; i < headers.length; i++){
    headers[i].addEventListener("mouseenter", function (e) {
        if (e.target === headers[0])
            kNode.style.paddingBottom = "15px";
        else if (e.target === headers[1])
            dNode.style.paddingBottom = "15px";
        else if (e.target === headers[2])
            fNode.style.paddingBottom = "15px";
    });
    
    headers[i].addEventListener("mouseleave", function (e) {
        if (e.target === headers[0])
            kNode.style.paddingBottom = "0px";
        else if (e.target === headers[1])
            dNode.style.paddingBottom = "0px";
        else if (e.target === headers[2])
            fNode.style.paddingBottom = "0px";
    }); 
}



