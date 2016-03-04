/*
  Open Explore Menu
*/
  (function(document) {
		var body = document.body,
		btnExplore = document.querySelector('.btn--explore'),
    btnClose = document.querySelector('.btn--close'),
    btnSearch = document.querySelector('a[title="Search"]'),
    overlaySearch = document.querySelector('.overlay--search'),
    overlayNav = document.querySelector('.overlay--nav');
			openNav = function() {
				body.classList.add('open--nav');
			};
      closeNav = function() {
				body.classList.remove('open--nav');
			};
      openSearch = function() {
				body.classList.add('open--search');
			};
      closeSearch = function() {
				body.classList.remove('open--search');
			};
		btnExplore.addEventListener('click',openNav, false);
    overlayNav.addEventListener('click',closeNav, false);
    btnClose.addEventListener('click',closeNav, false);
	  btnSearch.addEventListener('click',openSearch, false);
    overlaySearch.addEventListener('click',closeSearch, false);


	})(document);
