$(document).ready( function() {

// Creating the sweetPages jQuery plugin:
$.fn.sweetPages = function(opts){
	
	// If no options were passed, create an empty opts object
	if(!opts) opts = {};
	
	var resultsPerPage = opts.perPage || 1;
	
	// The plugin works best for unordered lists, althugh ols would do just as well:
	var ul = this;
	var li = ul.find('li');
	
	li.each(function(){
		// Calculating the height of each li element, and storing it with the data method:
		var el = $(this);
		el.data('height',el.outerHeight(true));
	});
	
	// Calculating the total number of pages:
	var pagesNumber = Math.ceil(li.length/resultsPerPage);
	
	// If the pages are less than two, do nothing:
	if(pagesNumber<1) return this;

	// Creating the controls div:
	$swID = "sw"+$idn;

	$('#holder #'+$swID).find('.swControls');
	$sw = $('#holder #'+$swID).find('.swControls');
	console.log("swID= "+$swID);

	if (!$('#'+$swID).hasClass('swControls')){
	var swControls = $('<div id="'+$swID+'" class="swControls">');
	}

	for(var i=0;i<pagesNumber;i++)
	{
		// Slice a portion of the lis, and wrap it in a swPage div:
		li.slice(i*resultsPerPage,(i+1)*resultsPerPage).wrapAll('<div class="swPage" />');
		
		// Adding a link to the swControls div:
		swControls.append('<a href="" class="swShowPage">'+(i+1)+'</a>');
	}

	ul.append(swControls);
	
	var maxHeight = 0;
	var totalWidth = 0;
	
	var swPage = ul.find('.swPage');
	swPage.each(function(){
		
		// Looping through all the newly created pages:
		
		var elem = $(this);

		var tmpHeight = 0;
		elem.find('li').each(function(){tmpHeight+=$(this).data('height');});

		if(tmpHeight>maxHeight)
			maxHeight = tmpHeight;

		totalWidth+=elem.outerWidth();
		
		elem.css('float','left').width(ul.width());
	});
	$sID = "s"+$idn;
	swPage.wrapAll('<div id="'+$sID+'" class="swSlider" />');
	
	// Setting the height of the ul to the height of the tallest page:
	ul.height(maxHeight);
	
	var swSlider = ul.find('.swSlider');
	console.log("id: " + $sID);
	swSlider.append('<div class="clear" />').width(totalWidth);

	var hyperLinks = ul.find('a.swShowPage');
	
	hyperLinks.click(function(e){
		
		// If one of the control links is clicked, slide the swSlider div 
		// (which contains all the pages) and mark it as active:

		$(this).addClass('active').siblings().removeClass('active');
		
		swSlider.stop().animate({'margin-left':-(parseInt($(this).text())-1)*ul.width()},'slow');
		e.preventDefault();
	});
	
	// Mark the first link as active the first time this code runs:
	hyperLinks.eq(0).addClass('active');
	
	// Center the control div:
	swControls.css({
		'left':'50%',
		'margin-left':-swControls.width()/2
	});
	
	return this;
	
}})(jQuery);

// $('#productos .lanzar').click( crearSlide );
function crearSlide(){
	$vID = "#v"+$idn;
	console.log("estoy dentro de crearSlide con el id="+$idn +" y he creado "+$vID);
	/* The following code is executed once the DOM is loaded */
	
	// Calling the jQuery plugin and splitting the
	// #holder UL into pages of 3 LIs each:
	
	$($vID + ' #holder').sweetPages({perPage:1});
	
	// The default behaviour of the plugin is to insert the 
	// page links in the ul, but we need them in the main container:

	var controls = $($swID+'.swControls').detach();
	controls.appendTo($vID + ' #holder');
	
};