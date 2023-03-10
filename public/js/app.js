// Slideshow
let thumbnails = document.getElementsByClassName("thumbnail");
let slider = document.getElementById("slider");
let buttonRight = document.getElementById("slide-right");
let buttonLeft = document.getElementById("slide-left");

buttonLeft.addEventListener("click", function () {
    slider.scrollLeft -= 100;
});

buttonRight.addEventListener("click", function () {
    slider.scrollLeft += 100;
});

const maxScrollLeft = slider.scrollWidth - slider.clientWidth;

function autoPlay() {
    if (slider.scrollLeft > maxScrollLeft - 1) {
        slider.scrollLeft -= maxScrollLeft;
    } else {
        slider.scrollLeft += 1;
    }
}
let play = setInterval(autoPlay, 50);

for (var i = 0; i < thumbnails.length; i++) {
    thumbnails[i].addEventListener("mouseover", function () {
        clearInterval(play);
    });

    thumbnails[i].addEventListener("mouseout", function () {
        return (play = setInterval(autoPlay, 50));
    });
}

const slides = document.querySelectorAll(".mySlides");
const leftBtn = document.getElementById("left");
const rightBtn = document.getElementById("right");

let activeSlide = 0;

function setActiveSlide() {
    slides.forEach((e) => {
        e.classList.remove("active");

        slides[activeSlide].classList.add("active");
    });
}

rightBtn.addEventListener("click", () => {
    activeSlide++;
    if (activeSlide > slides.length - 1) {
        activeSlide = 0;
    }

    setActiveSlide();
});

leftBtn.addEventListener("click", () => {
    activeSlide--;
    if (activeSlide < 0) {
        activeSlide = slides.length - 1;
    }

    setActiveSlide();
});

// Navbar Toggle
const toggleBtn = document.querySelector(".sidebar-toggle");
const sideBar = document.querySelector(".sidebar");

toggleBtn.addEventListener("click", function () {
    sideBar.classList.toggle("show-sidebar");
});

$(".add-to-cart-btn").click(function () {
    $url = $(this).attr("action");

    $.ajax({
        url: $url,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            window.location.reload();
        },
        error: function (xhr) {
            // handle error
        },
    });
});

$(".favourite-button").click(function (e) {
    $url = $(e.target).parent().attr("action");

    $.ajax({
        url: $url,
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            $("#favourite-toast")
                .text(response.message)
                .fadeIn(2000)

                .fadeOut(2000);
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        },
        error: function (xhr) {
            // handle error
        },
    });
});

// Arrow Cart Animation
const arrow_svg = document.querySelector(".arrow-svg");
const child = document.querySelector(".cart-svg");
const cart_div = document.querySelector(".cart-div");
const cls3 = document.querySelector(".cls-3");
const cls2 = document.querySelector(".cls-2");
const cls4 = document.querySelector(".cls-4");

$(".cart-div").on("mouseover", function () {
    $(this).find(".cls-2").css({
        fill: "white",
        transform: "translateY(5%)",
    });
    $(this).find(".cls-4").css({
        fill: "white",
        transform: "translateY(5%)",
    });

    $(this).find(".cls-3").css({
        stroke: "white",
        transform: "translateY(5%)",
    });

    $(this).find(".arrow-svg").css({
        fill: "whie",
        stroke: "white",
        "z-index": "400",
        visibility: " visible",
        transition: "all linear 0.25s",
        transform: "translateY(100%)",
    });
});

$(".cart-div").on("mouseleave", function () {
    $(this).find(".cls-2").css({
        fill: "#959795",
        transform: "translateY(-5%)",
    });
    $(this).find(".cls-4").css({
        fill: "#959795",
        transform: "translateY(-5%)",
    });

    $(this).find(".cls-3").css({
        stroke: "#959795",
        transform: "translateY(-5%)",
    });

    $(this).find(".arrow-svg").css({
        fill: "white",
        stroke: "white",
        "z-index": "400",
        visibility: " hidden",
        transition: "all linear 0.2s",
        transform: "translateY(-100%)",
    });
});
