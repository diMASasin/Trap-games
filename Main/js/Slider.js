const sliderItems = document.querySelectorAll(".selector__item");
const sliderList = document.querySelector(".selector__list");
const prevbtn = document.querySelector(".main__ArrowLeft");
const nextbtn = document.querySelector(".main__ArrowRight");

sliderItems[0].classList.remove("selector__item");
sliderItems[0].classList.toggle("selector__item_active");

let activeSlide = 0;
let maxSlides = 3;
let position = 0;

console.log(sliderItems);
const nextSlide = () => {
  sliderItems[activeSlide].classList.remove("selector__item_active");
  sliderItems[activeSlide].classList.add("selector__item");

  activeSlide += 1;
  if (activeSlide > maxSlides - 1)
    activeSlide = 0;

  sliderItems[activeSlide].classList.remove("selector__item");
  sliderItems[activeSlide].classList.add("selector__item_active");
}
const prevSlide = () => {
  sliderItems[activeSlide].classList.remove("selector__item_active");
  sliderItems[activeSlide].classList.add("selector__item");

  activeSlide -= 1;
  if (activeSlide < 0)
    activeSlide = maxSlides - 1;

  sliderItems[activeSlide].classList.add("selector__item_active");
  sliderItems[activeSlide].classList.remove("selector__item");
}
prevbtn.addEventListener("click", prevSlide);
nextbtn.addEventListener("click", nextSlide);