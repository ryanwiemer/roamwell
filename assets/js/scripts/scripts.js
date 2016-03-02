/*
  Open Explore Menu
*/
  (function(document) {
		var body = document.body,
		btnExplore = document.querySelector('.btn--explore'),
    btnClose = document.querySelector('.btn--close'),
    overlay = document.querySelector('.overlay');
			open = function() {
				body.classList.add('open');
			};
      close = function() {
				body.classList.remove('open');
			};
		btnExplore.addEventListener('click',open, false);
    overlay.addEventListener('click',close, false);
    btnClose.addEventListener('click',close, false);
	})(document);
