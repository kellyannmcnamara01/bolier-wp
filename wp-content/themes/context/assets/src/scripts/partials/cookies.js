jQuery(function($) {
	

	/* getCookie Function
	=============================================
	 * create a function that get the documents cookies, and looks for the particular one we pass through
	 * if the cookie we are looking for exists then return null, if it does not exists return true. */
	function getCookie(name) {
		var value = '; ' + document.cookie,
		parts = value.split('; ' + name + '=');
		if (parts.length > 1) {
			return 'true';
		} else {
			return null;
		}
	}
	/* getCookie Function [END] */



	/* acceptCookie Function
	=============================================
	 * create a function to call if the cookie does not exists
	 * on click of the cookie btn create a cookie to hide banner for 30 days */
	function acceptCookie(clickTrigger, cookieName, cookieContainer) {
		$(clickTrigger).click(function(){
			/* new date method that givesd the date object
			 * adding a function to allow us to pass nuber of days we want to wait (30) */
			Date.prototype.addDays = function(days) {
				this.setDate(this.getDate() + parseInt(days));
				return this;
			};

			/* getting current date
			 * calling Date.prototype and adding the days we want (30) */
			var currentDate = new Date(),
			expiryDate = currentDate.addDays(30);

			/* create expiriing cookie – 30 days */
			document.cookie = cookieName + '=accepted-cookies; expires=' + expiryDate;

			/* hide cookie banner */
			$(cookieContainer).slideToggle();

			/* update aria-pressed role */
			$(this).attr('aria-pressed', 'true');
		});
	}
	/* acceptCookie Function [END]  */




	/* Cookie Banner
	=============================================
	 * create a var to call getCookie() function and hold the results */
	var checkingCookie = getCookie('context-cookie');

	/* vars to pass for the acceptCookie function */
	var closeCookieBtn = '.js--cookie-banner__btn',
	cookieName = 'context-cookie',
	cookieContainer = '.cookie-banner';

	/* check if cookie exists or not
	 * if does not exists then show banner and call acceptCookie() function
	 * if does exists then hide banner */
	if (checkingCookie == null) {
		acceptCookie(closeCookieBtn, cookieName, cookieContainer);
	} else {
		$('.cookie-banner').hide();
	}
	/* Cookie Banner [END] */

});