function navSlide(){
  const toggler = document.querySelector('#toggler'); 
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');

  toggler.addEventListener('click', () => {
    //toggle nav
    nav.classList.toggle('nav-active');

    //animations fo navlinks
    navLinks.forEach((link, index) => {
      if (link.style.animation) {
        link.style.animation = ''
      } else {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 14}s`; //was previously set to /7
      }
    });

  });
  
}


navSlide();
