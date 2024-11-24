const hummenu = document.querySelector('.hummenu'); // Selects the hamburger menu
const navItems = document.querySelector('.nav'); // Selects the navigation container

// Toggle the visibility of the navigation menu on click
hummenu.addEventListener('click', () => {
    navItems.classList.toggle('showmenu');
});
