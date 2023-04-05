
//scroll event
window.addEventListener('scroll', function() {
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
  });
  


// smooth scroll to the menu section when button clicked
const viewMenuBtn = document.querySelector('.view-menu-btn');

viewMenuBtn.addEventListener('click', function(e) {
	e.preventDefault();

	const menuSection = document.querySelector('#our-menu');
	
	menuSection.scrollIntoView({ behavior: 'smooth' });
});