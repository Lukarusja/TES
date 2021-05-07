const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length;
var i;
for(i = 0; i<menuLength; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className= "active";
}
}