const hb = document.getElementById('hb');
const nav = document.getElementById('lagsNav');
const navlist = document.getElementById('nav-list');

//EventListeners
hb.addEventListener('click', toggleNav);

function toggleNav() {
	if (nav.classList.contains('show')) {
		nav.classList.remove('show');
	} else {
		nav.classList.add('show');
	}
}
