console.log("coucou");

var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

var purpleFlower = document.getElementById("fleur-violette");

var closeStory = document.getElementById("close-story");
var closeCharacters = document.getElementById("close-characters");
var closePlace = document.getElementById("close-place");
var closeStudio = document.getElementById("close-studio");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;
closeStory.onclick = closeFullMenu;
closeCharacters.onclick = closeFullMenu;
closeStudio.onclick = closeFullMenu;
closePlace.onclick = closeFullMenu;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
  sidenav.classList.add("animation-menu");
  sidenav.classList.add("fadeIn");
  closeStory.classList.add("animation-titre-menu");
  closeStory.classList.add("fadeInUp");
  closeCharacters.classList.add("animation-titre-menu-2");
  closeCharacters.classList.add("fadeInUp");
  closePlace.classList.add("animation-titre-menu-3");
  closePlace.classList.add("fadeInUp");
  closeStudio.classList.add("animation-titre-menu-4");
  closeStudio.classList.add("fadeInUp");
    purpleFlower.classList.add("purple-flower");

}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
  sidenav.classList.remove("active");
  sidenav.classList.remove("animation-menu");
  sidenav.classList.remove("fadeIn");
  closeStory.classList.remove("animation-titre-menu");
  closeStory.classList.remove("fadeInUp");
  closeCharacters.classList.remove("animation-titre-menu-2");
  closeCharacters.classList.remove("fadeInUp");
  closePlace.classList.remove("animation-titre-menu-3");
  closePlace.classList.remove("fadeInUp");
  closeStudio.classList.remove("animation-titre-menu-4");
  closeStudio.classList.remove("fadeInUp");
  purpleFlower.classList.remove("purple-flower");
}

function closeFullMenu() {
  sidenav.classList.remove("active");
  closeStory.classList.remove("animation-titre-menu");
  closeStory.classList.remove("fadeInUp");
  closeCharacters.classList.remove("animation-titre-menu-2");
  closeCharacters.classList.remove("fadeInUp");
  closePlace.classList.remove("animation-titre-menu-3");
  closePlace.classList.remove("fadeInUp");
  closeStudio.classList.remove("animation-titre-menu-4");
  closeStudio.classList.remove("fadeInUp");
  purpleFlower.classList.remove("purple-flower");
}

const titre = document.querySelector("titre")

const callback = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("SlideInUp")
    }
  })
}
const options = {
  root: null,
  rootMargin: '0px',
  threshold: 0
}
const myObserver = new IntersectionObserver(callback, options)
let target = document.querySelector("main-character");
myObserver.observe(target);