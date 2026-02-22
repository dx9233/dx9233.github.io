// Switch Theme
document.querySelector(".member-btn").addEventListener("click", () => {
  alert("Member Area Clicked");
});

// Accordion

document.querySelectorAll(".accordion-header").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;

    button.classList.toggle("active");
    content.classList.toggle("open");
  });
});
