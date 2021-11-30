const btns = document.querySelectorAll("[data-target]");
const close_modals = document.querySelectorAll(".close-modal");
const overlay = document.getElementById("overlay");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(btn.dataset.target).classList.add("active");
    overlay.classList.add("active");
  });
});

close_modals.forEach((btn) => {
  btn.addEventListener("click", () => {
    const modal = btn.closest(".modal-container");
    modal.classList.remove("active");
    overlay.classList.remove("active");
    location.reload();
  });
});

window.onclick = (event) => {
  if (event.target == overlay) {
    const modals = document.querySelectorAll(".modal-container");
    modals.forEach((modal) => modal.classList.remove("active"));
    overlay.classList.remove("active");
    location.reload();
  }
};

document.addEventListener('keydown', function(e){
  if(e.key === 'Escape') {
      const modalss = document.querySelectorAll(".modal-container");
      modalss.forEach((modal) => modal.classList.remove("active"));
      overlay.classList.remove("active");
      location.reload();
  }
})