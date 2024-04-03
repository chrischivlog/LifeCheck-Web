function switchSelected(){
    var other = document.getElementById("addSwitch"); 
    if (document.forms[0].theItems.options[document.forms[0].theItems.selectedIndex].value == "addSwitch"){
        other.style.visibility = "visible";
    } else {
        other.style.visibility = "hidden";
    }
}