/*
Lorsque on clique sur un onglet 
	on retire la classe active de l'objet actif
	on ajoute la class active à l'onglet cliqué
	*/

const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length;

for (var i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = " nav-link active";
    }
}