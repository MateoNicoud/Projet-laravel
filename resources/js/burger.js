addEventListener('DOMContentLoaded', () => {
    const burger = document.getElementById('icon_burger');
    const mobileMenu = document.getElementById('mobile-menu')
    burger.addEventListener('click', (e) => {
        mobileMenu.classList.toggle('hidden')
    })
})

