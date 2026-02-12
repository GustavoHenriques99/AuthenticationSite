document.addEventListener("DOMContentLoaded", () => {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navLinks = document.querySelector(".nav-links");
  const navbar = document.querySelector(".quantum-navbar");

  const sections = document.querySelectorAll("section[id]");
  const menuLinks = document.querySelectorAll(".nav-links a");

  /* ===== MENU MOBILE ===== */
  if (mobileMenuToggle && navLinks) {
    mobileMenuToggle.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });

    menuLinks.forEach(link => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("active");
      });
    });
  }

  /* ===== SCROLL SPY (menu ativo) ===== */
  function activateMenuOnScroll() {
    let scrollPos = window.scrollY + 100; // compensação da navbar

    sections.forEach(section => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute("id");

      if (scrollPos >= top && scrollPos < top + height) {
        menuLinks.forEach(link => {
          link.classList.remove("active");

          if (link.getAttribute("href") === `#${id}`) {
            link.classList.add("active");
          }
        });
      }
    });
  }

  window.addEventListener("scroll", activateMenuOnScroll);
  activateMenuOnScroll();

  /* ===== ESCONDER / MOSTRAR NAVBAR ===== */
  let lastScrollTop = 0;

  window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && scrollTop > 100) {
      navbar.style.top = "-80px";
    } else {
      navbar.style.top = "0";
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
});








