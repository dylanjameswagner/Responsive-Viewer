/* custom.js */

//	var defaultURL = 'dylanjameswagner.com'; // <!-- CHANGE TO YOUR WEBSITE URL
	var defaultURL = ''; // <!-- CHANGE TO YOUR WEBSITE URL

	// show loading graphic
	function showLoader(id){
		$('#' + id + ' img').fadeIn('slow');
	}

	// hide loading graphic
	function hideLoader(id){
		$('#' + id + ' img').fadeOut('slow');
	}

	// function to check load state of each frame
	function allLoaded(){
		var results = [];

		$('#frames iframe').each(function(){
			if (!$(this).data('loaded')){ results.push(false); }
		});
		var result = (results.length > 0) ? false : true;
		return result;
	}

	function loadPage($frame, url){
		if (url.substr(0,7) != 'http://'){
			url = 'http://'+url;
		}
		$('#frames iframe').not($frame).each(function(){ showLoader($(this).parent().attr('id')); });
		$('#frames iframe').not($frame).data('loaded', false);
		$('#frames iframe').not($frame).attr('src', url);
	}

	// set scrollable width
	function setWidth(){
		$('#frames-inner').css('width',function(){
			var width = 0;

			$('#frames .frame:visible').each(function(){width += $(this).outerWidth() + 20});
			return width;
		});
	}

	// set frame height
	function setStretch(){
		var height = window.innerHeight - $('#header').outerHeight();

		$('#frames,#frames iframe').attr('style','');
		$('.frame').show();

		$('.stretchOnly').css({ height: height });
		$('.stretchOnly iframe').each(function(){ $(this).css({ height: height }); }); // - 80

		$('.device').hide();
		$('.deviceOnly .device').show();

		$('.viewport').hide();
		$('.viewportOnly .frame').hide();
		$('.viewportOnly .viewport').show();

		setWidth();
	}

	function reverseOrder(){
		if ($('input[type=checkbox]:checked').length){ cookieWrite('reverse',1); }
		else {										   cookieWrite('reverse',0); }

		$('#frames .frame')
			.each(function(index,element){
				$(this).prependTo('#frames-inner');
			});
	}

jQuery(document).ready(function($){

	if (cookieRead('reverse') != 0){ $('input[type=checkbox]').attr('checked','checked'); reverseOrder(); }
	else { cookieWrite('reverse',0); }

	$('#frames .frame').each(function(){ showLoader($(this).attr('id')); });

	loadPage('',defaultURL);

	// query string
	var qsArray = window.location.href.split('?');
	var qs = qsArray[qsArray.length-1];

	if (qs != '' && qsArray.length > 1){    
		$('#header input[type=text]').val(qs);
		loadPage('',qs);
	}
	else {
		$('#header input[type=text]').val(defaultURL);
	}

	setWidth();

	// add event handlers for options radio buttons
	$('input[type=radio]').change(function(){
		$frames = $('#frames');
		$inputs = $('input[type=radio]:checked').val();

		if ($inputs == 'fixed'){
			$frames
				.addClass('widthOnly')
				.removeClass('stretchOnly')
				.removeClass('deviceOnly')
				.removeClass('viewportOnly');
		}
		else if ($inputs == 'stretch'){
			$frames
				.addClass('stretchOnly')
				.removeClass('deviceOnly')
				.removeClass('viewportOnly')
				.removeClass('widthOnly');
		}
		else if ($inputs == 'device'){
			$frames
				.addClass('deviceOnly')
				.removeClass('widthOnly')
				.removeClass('stretchOnly')
				.removeClass('viewportOnly');
		}
		else if ($inputs == 'viewport'){
			$frames
				.addClass('viewportOnly')
				.removeClass('widthOnly')
				.removeClass('stretchOnly')
				.removeClass('deviceOnly');
		}
		else {
			$frames
				.removeClass('widthOnly')
				.removeClass('stretchOnly')
				.removeClass('deviceOnly')
				.removeClass('viewportOnly');
		}
//		setStretch();
	});

	$('input[type=checkbox]').change(function(){
		reverseOrder();
	});

	// frame reload buttons
	$('#frames .frame button')
		.on('click',function(){
			var iframe = $(this).parent().next();
				iframe.attr('src',iframe.attr('src'));
				showLoader($(this).parent().parent().attr('id'));
			setTimeout(hideLoader($(this).parent().parent().attr('id')),2500);
		});

	// when the url textbox is used
	$('form').submit(function(){
		loadPage('', $('#header input[type=text]').val());
		return false;
	});

	// when frame loads
	$('#frames iframe').load(function(){
		
		var $this = $(this);
		var url = '';
		var error = false;
		
		try {
			url = $this.contents().get(0).location.href;
		}
		catch(e){
			error = true;
			if ($('#header input[type=text]').val() != ''){
				url = $('#header input[type=text]').val();
			} else {
				url = defaultURL;
			}
		}

		//load other pages with the same URL
		if (allLoaded()){
/*			if (error){
				alert('Browsers prevent navigation from inside iframes across domains.\nPlease use the textbox at the top for external sites.');
				loadPage('', defaultURL);
			}else{
				loadPage($this, url);
			}
	*/	}
		
		//when frame loads, hide loader graphic
		else {
			error = false;
			hideLoader($(this).parent().attr('id'));
			$(this).data('loaded',true);
		}
	});

//	setStretch();

}); // .ready
