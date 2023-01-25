
const menuIcon = document.getElementById('iconDiv');
const nav = document.getElementById('menuBar');

if(menuIcon){
	menuIcon.addEventListener('click', () => {
		nav.classList.add('active');
	})
}

