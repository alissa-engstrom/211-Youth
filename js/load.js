var $jq = jQuery.noConflict();
$jq(document).ready(function(){
	
	
/*$jq(".enrichment-item").mouseover(function(){ $jq(this).find(".name").animate({top:'0px'},'fast') });
    $jq(".enrichment-item").mouseout(function(){ $jq(this).find(".name").animate({bottom:'0px'},0) });*/


	
	$jq('.parent-slider').slick({
    	infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		variableWidth: true,
		/*centerPadding: '20px',
		centerMode: true,*/
		focusOnSelect: true,
		responsive: [
		{
			breakpoint: 600,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				centerMode: true
      		}
    	}
		]
		
		
  	});
  	$jq('.left').click(function(){
  $jq('.parent-slider').slick('slickPrev');
})

$jq('.right').click(function(){
  $jq('.parent-slider').slick('slickNext');
})
	
	$jq('.event-card').matchHeight();
	$jq('.partner-card').matchHeight();
	$jq('.logo-cont').matchHeight();
	$jq('.enrichment-item .name').matchHeight();
	$jq('.parent-slider .card .name').matchHeight();
	
	
	
	/*$jq("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $jq('html, body').animate({
        scrollTop: $jq(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
	*/

/*end*/	
});