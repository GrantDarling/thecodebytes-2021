/*================ Top Banner ================*/
let banner = document.querySelector('.header__banner-bar');
let bannerMenu = document.querySelector('.menu-banner-menu-container');
let bannerCloseButton = document.querySelector('#banner__close'); //create close banner button

window.addEventListener('load', () => {
  if (localStorage.getItem("hasCodeRunBefore") === null) {
        localStorage.setItem('banner', 'true');
        localStorage.setItem("hasCodeRunBefore", true);
    }

  if (localStorage.getItem('banner') == 'true') {
    banner.style.display = 'flex';
  } else {
    banner.style.display = 'none';
  }
});

function close() {
  localStorage.setItem('banner', 'false');
  banner.classList.add('header__banner-closed');
  bannerMenu.classList.add('header__banner-closed');
}

bannerCloseButton.onclick = close;

/*================ Mobile Menu ================*/

// IF BROKEN MAKE .menu-main-nav-container 'display: none;'
(function () {
   document.getElementsByClassName('menu-main-nav-container')[0].style.display = 'block';

  if (
    document
      .getElementById('primary-menu')
      .hasAttribute('header__mobile-dropdown')
  ) {
    document.getElementById('primary-menu').style.display = 'none';
  }
})();

function toggle(id, id2) {
  var n = document.getElementById(id);
  if (n.style.display != 'none') {
    document.getElementById(id2).setAttribute('aria-expanded', 'false');
    n.style.display = 'none';
    //Remove Dropdown keyframes
    document
      .getElementById('header__nav-bar-id')
      .classList.remove('header__mobile-dropdown');
    document
      .querySelector('.menu-main-nav-container')
      .classList.remove('header__mobile-pullup');

    //Add Pullup keyframes
    // document
    //   .getElementById('header__nav-bar-id')
    //   .classList.add('header__mobile-pullup');
    // document
    //   .querySelector('.menu-main-nav-container')
    //   .classList.add('header__li-pullup-ani');

  } else {
    n.style.display = '';
    document.getElementById(id2).setAttribute('aria-expanded', 'true');

    //Add Dropdown keyframes
    document
      .getElementById('header__nav-bar-id')
      .classList.add('header__mobile-dropdown');
    document
      .querySelector('.menu-main-nav-container')
      .classList.add('header__li-dropdown-ani');

    //Remove Pullup keyframes
    // document
    //   .getElementById('header__nav-bar-id')
    //   .classList.remove('header__mobile-pullup');
    // document
    //   .querySelector('.menu-main-nav-container')
    //   .classList.remove('header__li-pullup-ani');
  }
}

/*================ Media Queries ================*/
function mobileMenuStatus(query) {
  let headerMenu = document.querySelector('#header__mobile-menu');
  let primaryMenu = document.querySelector('#primary-menu');
  let navBar = document.querySelector('#header__nav-bar-id');
  let navBarContainer = document.querySelector('.menu-main-nav-container');
  //let menuButton = document.querySelector('.menu-main-nav-container');

  if (query.matches) {
    // If media query matches
    //document.body.style.backgroundColor = "yellow";

    headerMenu.setAttribute('aria-expanded', 'false');
    //headerMenu.style.display = '';
    primaryMenu.style.display = 'none';

    //Remove Dropdown keyframes
    navBar.classList.remove('header__mobile-dropdown');
    navBarContainer.classList.remove('header__li-dropdown-ani');

    //Remove Pullup keyframes
    navBar.classList.remove('header__mobile-pullup');
    navBarContainer.classList.remove('header__li-pullup-ani');
  } else {
    //document.body.style.backgroundColor = "pink";

    headerMenu.setAttribute('aria-expanded', 'true');
    //headerMenu.style.display = 'none';
    primaryMenu.style.display = '';

    //Remove Dropdown keyframes
    navBar.classList.remove('header__mobile-dropdown');
    navBarContainer.classList.remove('header__li-dropdown-ani');

    //Remove Pullup keyframes
    navBar.classList.remove('header__mobile-pullup');
    navBarContainer.classList.remove('header__li-pullup-ani');
  }
}
var query = window.matchMedia('(max-width: 900px)');
mobileMenuStatus(query); // Call listener function at run time
query.addListener(mobileMenuStatus); // Attach listener function on state changes

/*================ Position Sticky ================*/

// Doesnt grab at the right position yet

var pageTitle = document.querySelector('.single__entry-meta');
var entryContent = document.querySelector('.entry-content');

var origOffsetY2 = entryContent.offsetTop;

window.addEventListener('scroll', (e) => {
  if (window.scrollY >= origOffsetY2) {
    //pageTitle.classList.add('sticky2');
    pageTitle.classList.add('sticky2');
  } else {
    //pageTitle.classList.remove('sticky2');
    pageTitle.classList.remove('sticky2');
  }
});
