$(document).ready(function () {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  })

  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  })
  $('.slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
});
});


// product details------\\
document.addEventListener('DOMContentLoaded', function () {
  const decrementButton = document.querySelector('.btn-outline-secondary:first-child');
  const incrementButton = document.querySelector('.btn-outline-secondary:last-child');
  const quantityInput = document.querySelector('.form-control.text-center');
  decrementButton.addEventListener('click', function () {
      let currentValue = parseInt(quantityInput.value, 10);
      if (currentValue > 1) {
          quantityInput.value = currentValue - 1;
      }
  });
  incrementButton.addEventListener('click', function () {
      let currentValue = parseInt(quantityInput.value, 10);
      quantityInput.value = currentValue + 1;
  });
  quantityInput.addEventListener('input', function () {
      if (isNaN(this.value) || this.value < 1) {
          this.value = 1;
      }
  });
});
// incrementButton js end

// image section js start
document.addEventListener("DOMContentLoaded", function () {
  const thumbnails = document.querySelectorAll('.food-item img');
  const bigImage = document.querySelector('.product-details-big-img img');

  thumbnails.forEach(function (thumbnail) {
      thumbnail.addEventListener('click', function () {
          bigImage.src = thumbnail.src;
      });
  });
});

// main-slider
const messages = [
  { text: "Making your life sweeter one bite at a time!", color: "#f9d342" },
  { text: "Savor the moments with our cakes!", color: "#ff7f50" },
  { text: "Happiness in every bite.", color: "#7fffd4" },
  { text: "Indulge in sweet perfection.", color: "#9370db" },
  { text: "Every occasion deserves a treat!", color: "#87ceeb" }
];

let currentIndex = 0;
const textCakeInner = document.querySelector(".text-cakeinner");
const cakeInnerTextPart = document.querySelector(".cakeInnerTextPart");
const prevBtn = document.getElementById("prev-btn");
const nextBtn = document.getElementById("next-btn");

function updateContent(direction, source="") {

  textCakeInner.classList.add(direction === "next" ? "slide-up" : "slide-down");

  const message = messages[currentIndex];
  textCakeInner.textContent = message.text;
  cakeInnerTextPart.style.borderColor = message.color;
  textCakeInner.classList.remove("slide-up", "slide-down");

  if(source){
    currentIndex++;

    if (currentIndex === messages.length){
      currentIndex = 0;
    }

    else if(currentIndex === 0){
      currentIndex = messages.length;
    }

  }
}

prevBtn.addEventListener("click", () => {
  if (currentIndex === 0) {
    currentIndex = messages.length - 1;
  } else if (currentIndex > 0) {
    currentIndex--;
  }

  clearInterval(myInterval)

  updateContent("prev");
});

nextBtn.addEventListener("click", () => {
  if (currentIndex === messages.length) {
    currentIndex = 0
  } else if (currentIndex < messages.length - 1) {
    currentIndex++;
  }

  clearInterval(myInterval)

  updateContent("next");
});

// Initialize content

let myInterval = setInterval(() => {
  updateContent("next", "interval");
}, 1000)
// updateContent("next");

