const images = [
    "../assets/images/pic1.jpg",
    "../assets/images/pic2.jpg",
    "../assets/images/pic3.jpg",
    "../assets/images/pic4.jpg",
    "../assets/images/pic5.jpg",
    "../assets/images/pic6.jpg",
    "../assets/images/pic7.jpg",
    "../assets/images/pic8.jpg",
    "../assets/images/pic9.jpg",
    "../assets/images/pic10.jpg"
];

let currentIndex = 0;

function showImage(thumb) {
    const fullImage = thumb.getAttribute("data-full");
    document.getElementById("current-image").src = fullImage;
    currentIndex = images.indexOf(fullImage);
}

function nextImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById("current-image").src = images[currentIndex];
}

function prevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    document.getElementById("current-image").src = images[currentIndex];
}
