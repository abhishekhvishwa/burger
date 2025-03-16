/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById("nav-menu"),
  navToggle =
    document.getElementById(
      "nav-toggle"
    ) /* html ka nav-menu ,nav-toggle link kiya hai */,
  navClose = document.getElementById("nav-close");

let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

window.onscroll = () => {
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
};

document.querySelector("#close-edit").onclick = () => {
  document.querySelector(".edit-form-container").style.display = "none";
  window.location.href = "admin.php";
};

/* Menu show  also here */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("show-menu");
  });
}

/* Menu hidden */ /* menu option hidden or reopen ke liye hai */
if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.remove(
      "show-menu"
    ); /* menu option ko close kar ne ke liye navclose use kiya hau */
  });
}

/*=============== REMOVE MENU MOBILE ===============*/
const navLink =
  document.querySelectorAll(
    ".nav__link"
  ); /* nav__link add kiya hai html se option pe click karenge to same page par redirect karega */

const linkAction = () => {
  const navMenu = document.getElementById("nav-menu");
  // When we click on each nav __ link, we remove the show-menu cl
  navMenu.classList.remove("show-menu");
};
navLink.forEach((n) => n.addEventListener("click", linkAction));

/*=============== ADD SHADOW HEADER ===============*/
const shadowHeader = () => {
  /* header add from html */
  const header = document.getElementById("header");
  // Add a class if the bottom offset is greater than 50
  this.scrollY >= 50
    ? header.classList.add("shadow-header")
    : header.classList.remove("shadow-header");
};
window.addEventListener("scroll", shadowHeader);

/*=============== SHOW SCROLL UP ===============*/
const scrollup = () => {
  const scrollup = document.getElementById("scroll-up");
  //when the scroll is higher than 350 viewport height ,add the show-scroll class to the a tag with the scrollup class
  this.scrollY >= 350
    ? scrollup.classList.add("show-scroll")
    : scrollup.classList.remove("show-scroll");
};
window.addEventListener("scrol", scrollup);

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll("section[id]");

const scrollActive = () => {
  const scrollDown = window.scrollY;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight,
      sectionTop = current.offsetTop - 58,
      sectionId = current.getAttribute("id"),
      sectionsClass = document.querySelector(
        ".nav__menu a[href*=" + sectionId + "]"
      );

    if (scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight) {
      sectionsClass.classList.add("active-link");
    } else {
      sectionsClass.classList.remove("active-link");
    }
  });
};
window.addEventListener("scroll", scrollActive);

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 2500,
  delay: 300,
  // reset: true, // Animations repeat
});

sr.reveal(`.home__data, .footer`);
sr.reveal(`.home__dish`, { delay: 500, distance: "100px", origin: "bottom" });
sr.reveal(`.home__burger`, { delay: 1200, distance: "100px", duration: 1500 });
sr.reveal(`.home__ingredient`, { delay: 1600, interval: 100 });
sr.reveal(`.recipe__img, .delivery__img .contact__image`, { origin: "left" });
sr.reveal(`.recipe__data, .delivery__data .contact__data`, { origin: "right" });
sr.reveal(`.popular__card`, { interval: 100 });
