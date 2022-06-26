var images = new Array();

function preloadImages() {
  for (i = 0; i < preloadImages.arguments.length; i++) {
    images[i] = new Image();

    images[i].src = preloadImages.arguments[i];
  }
}

preloadImages(
  "../images/Fundo3.jpg",
  "../images/barber.png",
  "../images/img01.jpg",
  "../images/img02.jpg",
  "../images/img03.jpg",
  "../images/Logo.png",
  "../images/avaliacao01.png",
  "../images/avaliacao02.png",
  "../images/avaliacao03.png",
  "../images/avaliacao04.png",
  "../images/avaliacao05.png",
  "../images/avaliacao06.png",
  "../images/avaliacao07.png",
  "../images/avaliacao08.png"
);
