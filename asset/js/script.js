window.onscroll = () => {
    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
        document.querySelector('.header .header-1 .search-form').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
        document.querySelector('.header .header-1 .search-form').classList.remove('active');
    }
}

window.onload = () => {
    if (window.scrollY > 80) {
        document.querySelector('.header .header-2').classList.add('active');
        document.querySelector('.header .header-1 .search-form').classList.add('active');
    } else {
        document.querySelector('.header .header-2').classList.remove('active');
        document.querySelector('.header .header-1 .search-form').classList.remove('active');
    }
}