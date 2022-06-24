var images = new Array();

function preloadImages() {
  for (i = 0; i < preloadImages.arguments.length; i++) {
    images[i] = new Image();

    images[i].src = preloadImages.arguments[i];
  }
}

preloadImages(
  "../images/barber.png",
  "../images/Fundo3.jpg",
  "../images/img01.jpg",
  "../images/img02.jpg",
  "../images/img03.jpg",
  "../images/Logo.png"
);
