function userScroll() {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      navbar.classList.add("navbar-shrink");
    } else {
      navbar.classList.remove("navbar-shrink");
    }
  });
}

document.addEventListener("DOMContentLoaded", userScroll);

// Zavření collapse menu po kliknutí na odkaz .nav-link a .navbar-brand
document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.querySelector(".navbar-collapse");
  const navLinks = document.querySelectorAll(".nav-link");
  const navbarBrand = document.querySelector(".navbar-brand");

  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      if (navbarCollapse.classList.contains("show")) {
        new bootstrap.Collapse(navbarCollapse, { toggle: true });
      }
    });
  });

  navbarBrand.addEventListener("click", function () {
    if (navbarCollapse.classList.contains("show")) {
      new bootstrap.Collapse(navbarCollapse, { toggle: true });
    }
  });
});
