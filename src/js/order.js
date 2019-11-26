$(document).ready(function(){
    var addToOrderButtons = $("li div div button");
    var currentOrder;

    for ( e in addToOrderButtons){
        e.target.addEventListener("click", addItemToOrder());
    }

});


function addItemToOrder(){
    
}