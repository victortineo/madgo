;(function() {
	// Toggle Modal
	// Vars
	var $modal = document.querySelector('.modalContact');
	var $modalCollapse = document.querySelectorAll('.modalContact__click');
	// Events
	for (var i = $modalCollapse.length - 1; i >= 0; i--) {
		$modalCollapse[i].addEventListener("click", modalToggle, false);
	}
	// Functions
	function modalToggle(e) {
		e.preventDefault();
		$modal.classList.toggle('active');
	}
})();