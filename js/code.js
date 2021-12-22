window.onload = function () {
    const menuBtn = document.querySelector('.menu-btn');
    const menuItems = document.querySelector('.menu-items');
    const menuItem = document.querySelectorAll('.menu-item');

    // Activateur principal
    menuBtn.addEventListener('click', () => {
        toggle();
    })


    // Activer la selection clicqué si le menu est ouvert
    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            if (menuBtn.classList.contains('open')) {
                toggle();
            }
        })
    });


    function toggle() {
        menuBtn.classList.toggle('open');
        menuItems.classList.toggle('open');
    }

}
