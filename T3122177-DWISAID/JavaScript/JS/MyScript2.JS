let currentImageIndex = 0;

function showImage(index) {
    const mainImage = document.getElementById("main");
    mainImage.src = document.querySelectorAll(".side_view img")[index].src;
    currentImageIndex = index;
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % 5; // Assuming 5 images 
    showImage(currentImageIndex);
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + 5) % 5; // Assuming 5 images 
    showImage(currentImageIndex);
}

// adding event listeners for arrow keys
document.addEventListener("keydown",(event)=> {
    if (event.key === "ArrowUp") {
        prevImage();
    } else if (event.key === "ArrowDown") {
        nextImage();
    }
});