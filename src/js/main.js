// Header nav menu

(window.load = function (event) {
  const togglerNav = document.querySelector(".toggler-nav");
  const headerNav = document.querySelector(".header-nav");
  let navFlag = false;

  togglerNav.addEventListener("click", () => {
    if (navFlag == false) {
      headerNav.classList.add("active");
      togglerNav.classList.add("active");
      navFlag = true;
    } else {
      headerNav.classList.remove("active");
      togglerNav.classList.remove("active");
      navFlag = false;
    }
  });
  // navmenu mobile
  if (window.innerWidth < 960) {
    const hasChildren = document.querySelectorAll(".menu-item-has-children");
    for (i = 0; hasChildren.length > i; i++) {
      const span = document.createElement("span");
      span.classList.add("opener-submenu");
      hasChildren[i].appendChild(span);
      console.log(hasChildren[i]);
    }
    const openers = document.querySelectorAll(".opener-submenu");
    for (i = 0; openers.length > i; i++) {
      const submenu = openers[i].previousElementSibling;
      let flagSubMenu = true;
      openers[i].addEventListener("click", function (e) {
        if (flagSubMenu) {
          submenu.classList.add("active");
          e.target.classList.add("active");
          flagSubMenu = false;
        } else {
          submenu.classList.remove("active");
          e.target.classList.remove("active");
          flagSubMenu = true;
        }
      });
    }
  }

  // Go to Top
  const goToTop = document.querySelector("#go-to-top");
  
  goToTop.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  document.addEventListener("scroll", () => {
    if (window.pageYOffset >= 200) {
      goToTop.classList.add("go-to-to-active");
    } else {
      goToTop.classList.remove("go-to-to-active");
    }
  });

})();
