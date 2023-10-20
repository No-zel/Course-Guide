const sidebar = document.getElementById("sidebar");
const OpenNav = document.getElementById("open-nav");
const CloseNav = document.getElementsByClassName("close")[0];


OpenNav.addEventListener("click", function() {
    sidebar.classList.add("show");
  });
  
  CloseNav.addEventListener("click", function() {
    sidebar.classList.remove("show");
  });
  
  window.addEventListener("click", function(event) {
    if (event.target === sidebar) {
        sidebar.classList.remove("show");
    }
  });