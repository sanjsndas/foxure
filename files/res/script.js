document.addEventListener('DOMContentLoaded', function() {


    window.addEventListener('scroll', function() {
        let currentScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScrollPosition >= 80) {
            document.querySelector('.navbar').classList.add('nav-bg');
        } else {
            document.querySelector('.navbar').classList.remove('nav-bg');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarSupportedContent = document.getElementById('navbarSupportedContent');

    navbarToggler.addEventListener('click', function() {
        navbarSupportedContent.classList.toggle('show');
    });
});
