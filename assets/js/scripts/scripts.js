/*
  Open Explore Menu
*/
  (function(document) {
		var body = document.body,
		btnExplore = document.querySelector('.btn--explore'),
			open = function() {
				body.classList.toggle('open');
			};
		btnExplore.addEventListener('click',open, false);
	})(document);
