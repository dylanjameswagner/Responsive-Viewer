jQuery(document).ready(function($) {

	if (cookieRead('view')	  != 0) { $('input[value="'+cookieRead('view')+'"').attr('checked', 'checked'); }
	if (cookieRead('reverse') != 0) { $('input[value="reverse"]').attr('checked', 'checked'); framesReverse(); }

	$(window).on('load resize', function() { framesWidth(); framesHeight(); });

	$('#header-form').submit(function(event) { event.preventDefault();
		if (!confirm('Reload All Frames?')) { event.preventDefault(); return; }

		window.location = '?'+$('#header-form-url input').val(); //.replace('https:', '').replace('https:', '');
	});

	framesLoad(window.location.href.split('?')[1]);

	$('#header-form-settings input[type="checkbox"]')
		.on('change', function() {
			framesReverse();
		});

	$('#header-form-settings input[type="radio"]')
		.on('change', function() {
			$('#frames').attr('class', '').addClass($(this).val());
			$('#frames .frame').hide();
			$('#frames .'+$(this).val()).show();

			framesWidth(); framesHeight(); framesLoad($('#header-form-url input').val());
		});

	$('.frame button')
		.on('click', function() {
			var iframe = $(this).closest('.frame').find('iframe');
				iframe.attr('src', iframe.attr('src'));
		});

}); // .ready

	function framesLoad(url) {
		if (!url) { url = 'example.com'; }

		if ($('input[type="radio"]:checked').length) { cookieWrite('view', $('input[type="radio"]:checked').val()); }
		else										{ cookieWrite('view', 0); }

		$('.frame').hide();
		$('.frame.'+cookieRead('view')).show();

		$('#header-form-url input').val(url);
		$('.frame:visible iframe').addClass('loaded').attr('src', (url.substr(0, 7) != 'http://' && url.substr(0, 8) != 'https://' && url.substr(0, 2) != '//' ? '//' : '') + url);
	}

	function framesWidth() {
		$('#frames-inner').css('width', function() {
			var padding = 18;
			var width = padding;

			$('#frames .frame:visible').each(function() {
				width += $(this).outerWidth() + padding;
// console.log(width);
			});
// console.log(width);
			return width;
		});
	}

	function framesHeight() {
		var height = $(window).innerHeight() - $('#header').outerHeight();
console.log(height - (parseInt($('#frames-inner').css('padding-top')) * 2));
		$('#frames').height(height);
		$('.frame.stretch iframe').height(height - (parseInt($('#frames-inner').css('padding-top')) * 2) - 39);
	}

	function framesReverse() {
		if ($('input[type="checkbox"]:checked').length)	{ cookieWrite('reverse', 1); }
		else											{ cookieWrite('reverse', 0); }

		$('#frames .frame')
			.each(function(index, element) {
				$(this).prependTo('#frames-inner');
			});
	}

/* cookies */

	function cookieWrite(name, value, days) {
		// var date = new Date();
		// var expire = date.setMonth(expireDate.getMonth()+6);
		// document.cookie = name+'='+date+';expires='+expire.toGMTString();
		// return null;
		var expires = '';
		if (days) {
			var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = '; expires=' + date.toGMTString();
		}
		else {
			expires = '';
		}
		document.cookie = name + '=' + value + expires + '; path=/';
	}

	function cookieRead(name) {
		// var thisCookie = document.cookie.split('; ');
		// for (var i=0; i<thisCookie.length; i++) {
		// 	if (name == thisCookie[i].split('=')[0]) {
		// 		return thisCookie[i].split('=')[1];
		// 	}
		// }
		// return false;
		var nameEQ = name + '=';
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
		}
		return null;
	}

	function cookieDelete(name) {
		cookieWrite(name, '', -1);
	}
