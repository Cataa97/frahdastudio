/**
 * File script.js.
 *
 */

( function() {

	function toggleMenu() {
		const button = document.getElementById( 'menu-toggle' );
		if (!button) {
			return;
		}

		const mobileSidebar = document.getElementById( 'mobile-sidebar' );
		const mobileOverlay = document.getElementById( 'mobile-sidebar-overlay' );
		const mobileMenu    = mobileSidebar.querySelector( 'ul' );
		const body          = document.body;
		const toggleItems   = [button, mobileOverlay];

		toggleItems.forEach( toggleItem => {
			toggleItem.addEventListener( 'click', e => {
				if ( mobileSidebar.classList.contains( 'toggled-on' ) ) {
					button.setAttribute( 'aria-expanded', 'false' );
					mobileMenu.setAttribute( 'aria-expanded', 'false' );
				} else {
					button.setAttribute( 'aria-expanded', 'true' );
					mobileMenu.setAttribute( 'aria-expanded', 'true' );
				}
				button.classList.toggle( 'toggled-on' );
				mobileSidebar.classList.toggle( 'toggled-on' );
				body.classList.toggle( 'mobile-sidebar-active' );
			} );
		} );
	}

	function toggleSubmenu() {
		const mobileNav = document.getElementById( 'mobile-navigation' );
		if (!mobileNav) {
			return;
		}

		const buttons = [...mobileNav.querySelectorAll( '.dropdown-toggle' )];

		buttons.forEach( button => {
			button.addEventListener( 'click', e => {
				e.preventDefault();
				const a = button.previousElementSibling, li = a.closest( 'li' );
				if ( li.classList.contains( 'is-open' ) ) {
					button.setAttribute( 'aria-expanded', 'false' );
					a.setAttribute( 'aria-expanded', 'false' );
				} else {
					button.setAttribute( 'aria-expanded', 'true' );
					a.setAttribute( 'aria-expanded', 'true' );
				}
				li.classList.toggle( 'is-open' );
			} );
		} );
	}

	function toggleSearch() {
		const searchPopups = document.querySelectorAll( '.top-search' );
		if (!searchPopups) {
			return;
		}

		searchPopups.forEach( searchPopup => {
			const searchButton     = searchPopup.querySelector( '.top-search .top-search-button');
			const searchInputField = searchPopup.querySelector( '.top-search .search-field');
			searchButton.addEventListener( 'click', e => {
				if ( searchPopup.classList.contains( 'active' ) ) {
					searchButton.setAttribute( 'aria-expanded', 'false' );
					searchButton.focus();
				} else {
					searchButton.setAttribute( 'aria-expanded', 'true' );
					searchInputField.focus();
				}
				searchPopup.classList.toggle( 'active' );
			} );
		} );
	}

	toggleMenu();
	toggleSubmenu();
	toggleSearch();

}() );
