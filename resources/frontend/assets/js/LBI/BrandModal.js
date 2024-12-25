const modal = document.getElementById("customModal");
const openModalBtn = document.querySelectorAll(".openModalBtn");
const closeModalBtn = document.getElementById("closeModalBtn");

openModalBtn.forEach((button) => {
  button.addEventListener("click", () => {
    modal.style.display = "flex";
  });
});
closeModalBtn.addEventListener("click", () => {
  modal.style.display = "none";
});

window.addEventListener("click", (event) => {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});

const mainImage = document.querySelector(".main-image");
const thumbnails = document.querySelectorAll(".thumbnail");

thumbnails.forEach((thumbnail) => {
  thumbnail.addEventListener("click", () => {
    // Update the main image source
    mainImage.src = thumbnail.src;

    // Remove 'active' class from all thumbnails
    thumbnails.forEach((thumb) => thumb.classList.remove("active"));

    // Add 'active' class to the clicked thumbnail
    thumbnail.classList.add("active");
  });
});
