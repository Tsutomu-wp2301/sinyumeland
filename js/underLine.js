function handleInitialScroll() {
  handleScroll();
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('DOMContentLoaded', handleInitialScroll);

function handleScroll() {
  const elements = document.querySelectorAll('h2.title-home');
  
  elements.forEach(element => {
    const position = element.getBoundingClientRect();

    if (position.top < window.innerHeight) {
      element.classList.add('show-underline');
    }
  });
}

