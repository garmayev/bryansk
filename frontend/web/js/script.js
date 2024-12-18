function setTheme(theme) {
    switch (theme) {
        case 'white':
            document.querySelector(".header").classList.add('is-white')
            document.querySelector('.r-logo').style.display = 'none'
            document.querySelector('.w-logo').style.display = 'block'
            document.querySelector(".logo-white").style.display = "block !important";
            document.querySelector(".logo-red").style.display = "none !important";
            document.querySelector(".w-logo").style.display = "block";
            document.querySelector(".r-logo").style.display = "none";

            break;
        case 'black':
            document.querySelector(".header").classList?.remove('is-white')

            document.querySelector('.r-logo').style.display = 'block'
            document.querySelector('.w-logo').style.display = 'none'
            document.querySelector(".logo-white").style.display = "none !important";
            document.querySelector(".logo-red").style.display = "block !important";
            document.querySelector(".w-logo").style.display = "none";
            document.querySelector(".r-logo").style.display = "black";
            break;
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const fixedMenu = (e) => {
        const main = document.querySelector('.hero-main')
        if (window.scrollY > main?.offsetHeight) {
            document.querySelector(".header").classList?.add("is-fixed");
        } else {
            document.querySelector(".header").classList?.remove("is-fixed");
        }
    }

    document.addEventListener('scroll', fixedMenu)
    document.querySelector('.footer__button-top').addEventListener('click', () => {
        window.scrollTo(0, 0);
    })
})