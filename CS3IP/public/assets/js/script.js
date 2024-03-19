// Scroller Connected To Header
const header = document.querySelector("nav");

window.onscroll = function () {
    var top = window.scrollY;
    console.log(top);
    if (top >= 5) {
        header.classList.add("active");
    } else {
        header.classList.remove("active");
    }
};

// Scroller For The Reviews
const reviews = document.getElementsByClassName("review");
const container = document.querySelector(".reviews-container");

let currentIndex = 0;

const showReview = (index, direction) => {
    Array.from(reviews).forEach((review, i) => {
        if (i === index) {
            review.style.display = "block";
        } else {
            if (direction === "initial" && i !== 0) {
                review.style.display = "none";
            } else {
                review.style.display = "none";
            }
        }
    });
};

showReview(currentIndex, "initial");

const nextReview = () => {
    const nextIndex = (currentIndex + 1) % reviews.length;
    showReview(nextIndex, "next");
    currentIndex = nextIndex;

    const offscreenLeft =
        reviews[currentIndex].getBoundingClientRect().left < 0;
    if (offscreenLeft) {
        container.appendChild(reviews[currentIndex]);

        for (let i = 0; i < reviews.length; i++) {
            const rect = reviews[i].getBoundingClientRect();
            if (rect.left >= 0 && rect.right <= window.innerWidth) {
                currentIndex = i;
                break;
            }
        }
    }
};

setInterval(nextReview, 4000);

// FAQs Animation
let toggles = document.getElementsByClassName("answers");
let contentDiv = document.getElementsByClassName("information");

for (let i = 0; i < toggles.length; i++) {
    toggles[i].addEventListener("click", () => {
        if (
            parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight
        ) {
            contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        } else {
            contentDiv[i].style.height = "0px";
        }

        for (let j = 0; j < contentDiv.length; j++) {
            if (j !== i) {
                contentDiv[j].style.height = "0px";
            }
        }
    });
}

// Menu Toggle
const menuToggle = document.querySelector(".menu-toggle");
const links = document.querySelector(".links");
const right = document.querySelector(".right");

menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    links.classList.toggle("active");
    right.classList.toggle("active");
});

$(document).ready(function () {
    $("nav .menu-toggle").click(function () {
        $("nav ul").toggleClass("toggled");
    });
});
