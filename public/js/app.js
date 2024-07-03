const toggleCheckbox = document.querySelector('.toggle-checkbox');
const searchtoggle = document.querySelector('.searchclick');
const searchicon = document.querySelector('.fa-magnifying-glass')

toggleCheckbox.addEventListener('change', function () {
  if (this.checked) {
    document.body.classList.add('body');
  } else {
    document.body.classList.remove('body');
  }
});

searchicon.addEventListener('click', function () {
  if (searchtoggle.style.display === 'none') {
    searchtoggle.style.display = 'block';
  } else {
    searchtoggle.style.display = 'none';
  }
});

// header scroll
const header = document.getElementById('header');

// Function to handle scroll event
function handleScroll() {
  if (window.scrollY > 0) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
}

// Attach the scroll event listener
window.addEventListener('scroll', handleScroll);

// auto type words 

document.addEventListener("DOMContentLoaded", function () {
 
  const options = {
    strings: ['Prashant Digital Growth'],
    typeSpeed: 150,
    backSpeed: 50,
    backDelay: 3000,
    loop: true
  };

  const multiTextElement = document.querySelector('.multi-text');
  let currentTextIndex = 0;
  let currentText = '';
  let isDeleting = false;

  function type() {
    const fullText = options.strings[currentTextIndex];
    if (isDeleting) {
      currentText = fullText.substring(0, currentText.length - 1);
    } else {
      currentText = fullText.substring(0, currentText.length + 1);
    }

    multiTextElement.textContent = currentText;

    let typeSpeed = options.typeSpeed;
    if (isDeleting) {
      typeSpeed /= 2; // Faster when deleting
    }

    if (!isDeleting && currentText === fullText) {
      typeSpeed = options.backDelay;
      isDeleting = true;
    } else if (isDeleting && currentText === '') {
      isDeleting = false;
      currentTextIndex = (currentTextIndex + 1) % options.strings.length;
    }

    setTimeout(type, typeSpeed);
  }

  type();
});




// navbar toggle 
const navlist = document.querySelector('.navlist');
const checkbox = document.querySelector('#checkbox');
checkbox.addEventListener('change', function () {
  if (this.checked) {
    // checkbox.classList.add('body');
    navlist.style.display = 'block';
  } else {
    // checkbox.classList.remove('body');
    navlist.style.display = 'none';
  }
});

