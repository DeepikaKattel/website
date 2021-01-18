(function() {

	let hamburger = {
		nav: document.querySelector('#nav'),
		navToggle: document.querySelector('.nav-toggle'),

		initialize() {
			this.navToggle.addEventListener('click', () => { this.toggle(); });
		},

		toggle() {
			this.navToggle.classList.toggle('expanded');
			this.nav.classList.toggle('expanded');
		},
	};

	hamburger.initialize();

}());

(function() {
    for(x=0; x<40;x++) {
        var board = document.createElement('div');
        board.className = "particle";
        document.getElementById('particles').appendChild(board);
    }
}());
