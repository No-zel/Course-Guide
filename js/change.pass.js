const modal = document.getElementById("open-confirmation");
const openModalBtn = document.getElementById("open-delete");
const closeModalBtn = document.getElementById("cancel"); // Changed the reference to the cancel button

openModalBtn.addEventListener("click", function() {
  modal.classList.add("show");
});

closeModalBtn.addEventListener("click", function() {
  modal.classList.remove("show");
});

window.addEventListener("click", function(event) {
  if (event.target === modal) {
    modal.classList.remove("show");
  }
});
