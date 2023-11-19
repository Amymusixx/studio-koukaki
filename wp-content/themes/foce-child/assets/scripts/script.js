console.log("hello world");

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