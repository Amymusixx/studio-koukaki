console.log("coucou");

var menuBurger = document.getElementById("menu-burger");
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
  menuBurger.classList.remove("menu-burger-hidden");
  menuBurger.classList.add("menu-burger");
  openBtn.classList.add("burger-icon-hidden");
  closeBtn.classList.remove("close-hidden");
  closeBtn.classList.add("close");
  menuBurger.classList.add("animation-menu");
  menuBurger.classList.add("fadeIn");
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
  menuBurger.classList.remove("menu-burger");
  menuBurger.classList.add("menu-burger-hidden");
  openBtn.classList.remove("burger-icon-hidden");
  closeBtn.classList.remove("close");
  closeBtn.classList.add("close-hidden");
  menuBurger.classList.remove("animation-menu");
  menuBurger.classList.remove("fadeIn");
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

/* Sert à fermer les ancres de menu sur la précédente version du menu */ 
function closeFullMenu() {
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
