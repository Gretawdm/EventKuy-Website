document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    /**
     * Preloader
     */
    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector("#header");
    if (selectHeader) {
        document.addEventListener("scroll", () => {
            window.scrollY > 0
                ? selectHeader.classList.add("sticked")
                : selectHeader.classList.remove("sticked");
        });
    }

    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector(".scroll-top");
    if (scrollTop) {
        const togglescrollTop = function () {
            window.scrollY > 100
                ? scrollTop.classList.add("active")
                : scrollTop.classList.remove("active");
        };
        window.addEventListener("load", togglescrollTop);
        document.addEventListener("scroll", togglescrollTop);
        scrollTop.addEventListener(
            "click",
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            })
        );
    }

    /**
     * Mobile nav toggle
     */
    const mobileNavShow = document.querySelector(".mobile-nav-show");
    const mobileNavHide = document.querySelector(".mobile-nav-hide");

    document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
        el.addEventListener("click", function (event) {
            event.preventDefault();
            mobileNavToogle();
        });
    });

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavShow.classList.toggle("d-none");
        mobileNavHide.classList.toggle("d-none");
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll("#navbar a").forEach((navbarlink) => {
        if (!navbarlink.hash) return;

        let section = document.querySelector(navbarlink.hash);
        if (!section) return;

        navbarlink.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });

    /**
     * Toggle mobile nav dropdowns
     */
    const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

    navDropdowns.forEach((el) => {
        el.addEventListener("click", function (event) {
            if (document.querySelector(".mobile-nav-active")) {
                event.preventDefault();
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("dropdown-active");

                let dropDownIndicator = this.querySelector(
                    ".dropdown-indicator"
                );
                dropDownIndicator.classList.toggle("bi-chevron-up");
                dropDownIndicator.classList.toggle("bi-chevron-down");
            }
        });
    });

    /**
     * Initiate pURE cOUNTER
     */
    new PureCounter();

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: ".glightbox",
    });

    /**
     * Init swiper slider with 1 slide at once in desktop view
     */
    new Swiper(".slides-1", {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    /**
     * Animation on scroll function and init
     */
    function aos_init() {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    }
    window.addEventListener("load", () => {
        aos_init();
    });
});

/**
 * Animation on Gallery
 */
var GallerySlider = new Swiper(".gallery-slider", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2.5,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//aktif navbar saat pindah halaman
document.addEventListener("DOMContentLoaded", () => {
    "use strict";

    // Fungsi untuk menetapkan kelas aktif berdasarkan URL saat ini
    const setActiveNavItem = () => {
        const currentUrl = window.location.pathname; // Ambil hanya bagian path dari URL
        const navLinks = document.querySelectorAll("#navbar a");

        // Hapus kelas "active" dari semua tautan navbar
        navLinks.forEach((link) => {
            link.classList.remove("active");
        });

        // Tetapkan kelas "active" untuk tautan navbar yang sesuai dengan URL saat ini
        navLinks.forEach((link) => {
            // Periksa apakah URL saat ini cocok dengan atribut href dari tautan
            if (link.getAttribute("href") === currentUrl) {
                link.classList.add("active");
            }
        });
    };

    // Panggil fungsi setActiveNavItem saat DOM dimuat
    setActiveNavItem();

    // Perbarui item navbar aktif saat tautan navbar diklik
    document.querySelectorAll("#navbar a").forEach((link) => {
        link.addEventListener("click", setActiveNavItem);
    });
});



$(document).ready(function () {
    var buttonLogin = $(".btn-login");
    var navbar = $("#header"); // Sesuaikan ID navbar dengan yang sesuai
    var defaultButtonColor = "#f4f4f4"; // Warna default tombol
    var alternateButtonColor = "#ff6699"; // Warna alternatif tombol saat discroll

    $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();
        var navbarHeight = navbar.outerHeight();

        // Jika posisi scroll melewati tinggi navbar, ubah warna tombol "Login"
        if (scrollPosition > navbarHeight) {
            buttonLogin.css("background-color", alternateButtonColor);
            buttonLogin.css("color", "white"); // Misalnya, untuk kontras dengan warna latar belakang tombol
        } else {
            // Kembalikan ke warna default jika posisi scroll kembali ke atas
            buttonLogin.css("background-color", defaultButtonColor);
            buttonLogin.css("color", "black");
        }
    });
});
