/*
  Open Explore Menu
*/
  (function(document) {
		var body = document.body,
		btnExplore = document.querySelector('.btn--explore'),
    btnCloseNav = document.querySelector('.btn--close'),
    btnSearch = document.querySelector('a[title="Search"]'),
    searchField = document.querySelector('.search__form__field'),
    btnCloseSearch = document.querySelector('.btn--close--search'),
    overlaySearch = document.querySelector('.search__container'),
    overlayNav = document.querySelector('.overlay--nav');
			openNav = function() {
				body.classList.add('open--nav');
			};
      closeNav = function() {
				body.classList.remove('open--nav');
			};
      openSearch = function() {
				body.classList.add('open--search');
        searchField.focus();
			};
      closeSearch = function() {
				body.classList.remove('open--search');
			};
		btnExplore.addEventListener('click',openNav, false);
    overlayNav.addEventListener('click',closeNav, false);
    btnCloseNav.addEventListener('click',closeNav, false);
	  btnSearch.addEventListener('click',openSearch, false);
    searchField.addEventListener('blur',closeSearch, false);
    btnCloseSearch.addEventListener('click',closeSearch, false);
	})(document);
