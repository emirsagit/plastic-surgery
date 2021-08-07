require("./bootstrap");
const whoIsDoctorHayati = document.getElementById("who-is-doctor-hayati");
const arrowHayati = document.getElementById("arrow-hayati");
const videoSection = document.getElementById("video-section");
const videoWrapper = document.getElementById("video-wrapper");
const videoClose = document.getElementById("video-close");
const videoBack = document.getElementById("video-back");
const btnsYoutube = document.getElementsByClassName("youtube");

function toggleNavbar(collapseID) {
    document.getElementById(collapseID).classList.toggle("hidden");
    document.getElementById(collapseID).classList.toggle("block");
}

function videoDisplayToggle() {
    videoSection.classList.toggle("hidden");
}

function hideVideo() {
    videoWrapper.innerHTML = "";
    videoDisplayToggle();
}

function showVideo(e) {
    e.preventDefault();
    videoWrapper.innerHTML = `<iframe src="${e.target.getAttribute(
        "link"
    )}?autoplay=1&playsinline=1"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
    title="Burun Estetiği ve Rinoplasti ile ilgili sorulara uzman yanıtları" class="w-full h-full">
</iframe>`;
    videoDisplayToggle();
}

document.addEventListener("DOMContentLoaded", function () {
    if (arrowHayati) {
        arrowHayati.addEventListener("click", function () {
            whoIsDoctorHayati.scrollIntoView({ behavior: "smooth" });
        });
    }

    if (btnsYoutube) {
        for (let element of btnsYoutube) {
            element.addEventListener("click", showVideo);
        }
    }

    if (videoClose) {
        videoClose.addEventListener("click", hideVideo);
        videoBack.addEventListener("click", hideVideo);
    }
});
