/*--------------------*/
/*ASSIGNING VARIABLES */
/*--------------------*/

//The Main Menu (header top menu)
var mainMenu = document.getElementById('redlevMainMenu');

//Checking if Main menu is open or closed at the moment
var menuOpen = false;

//Dropdown bar container
var dropdownBar = document.getElementById('dropdownContainer');

//Adding Event Listener to the "Main Menu Droppdown Container"
dropdownBar.addEventListener('click', dropdownToggle);

/*--------------------*/
/*WRITING THE MAIN MENU DROPDOWN MOBILE TOGGLE FUNCTION*/
/*--------------------*/

//Dropdown toggle function
function dropdownToggle() {

	//If menu is not open
	if (menuOpen === false) {
		//Display the menu as block(open the menu)
		mainMenu.style.display = 'block';

		//Change the state from closed to open
		menuOpen = true;

	//If menu is open
	} else if (menuOpen === true) {

		//Change the display to 'none'(close the menu)
		mainMenu.style.display = 'none';

		//Chnge the state from open to closed
		menuOpen = false;

	}
}

//assign lis of the main menu
var menuChildren = mainMenu.children;

//Selecting all the "sub-menu" child lists under the main menu list items
var ulSubMenu = document.querySelectorAll('ul.sub-menu');


//Assigning 'parent-item' class to all the li's containing children ul.sub-menu's
for (i = 0; i < ulSubMenu.length; i++) {
	ulSubMenu[i].parentNode.classList.add('parent-item');
}

//Assigning variable to all parents containing 'ul.submenu'
var subParents = document.getElementsByClassName('parent-item');

console.log(subParents);

//Iterating through parent-item s
for (i = 0; i < subParents.length; i++) {

	//Iterate through each child by assigning to them variables
	var liChild = subParents[i];
	var liChildContent = liChild.childNodes;


	//Assigning class to subdropdown link links which are being clicked on the menu and are siblings
	// of ul.sub-menu 
	for (j = 0; j<liChildContent.length; j++) {
		if ( liChildContent[j].tagName == 'A' ) {
			liChildContent[j].classList.add('subdropdown-link');
		}
	}
}


//Adding subdropdown links to the subDropdownLink variable
var subDropdownLink = document.getElementsByClassName('subdropdown-link');


console.log(subDropdownLink);



//Adding eventListeners to subdropdown links which will 
for ( i = 0 ; i< subDropdownLink.length ; i++) {
	subDropdownLink[i].addEventListener('click', submenuDropdownToggle);
}

//Assigning the submenu openness state of submenus and assigning it to submenuOpen variable
var submenuOpen = false;


//Dropdown toggle function for the submenus
function submenuDropdownToggle(e) {


	//targeting the next sibling element of the pressed element, which is an ul.sub-menu
	var siblingUl = e.target.nextElementSibling;

	//If the submenu is closed
	if (submenuOpen === false) {
		
		//Open the ul by changing its display as block 
		siblingUl.style.display = 'block';

		//change the state to open
		submenuOpen = true;

	//If the submenu is closed
	} else if (submenuOpen === true) {

		//Close the ul by changing its display to 'none
		siblingUl.style.display = 'none';

		//Change the state to closed
		submenuOpen = false;
	}
}


/*-- no problem---*/

