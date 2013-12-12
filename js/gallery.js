(function ($){
      var handler = $('.article-list-item');
      window.setTimeout(function(handler){
							handler.wookmark({
								// Prepare layout options.
								align:"left",
								autoResize: true, // This will auto-update the layout when the browser window is resized.
								container: $('#main'), // Optional, used for some extra CSS styling
								offset: 20, // Optional, the distance between grid items
								outerOffset: 0, // Optional, the distance to the containers border
								itemWidth: 310 // Optional, the width of a grid item
								});
						},
							400, handler);


      $('.bwWrapper').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // for the images with a fluid width and height 
        responsive:true,
        // to invert the hover effect
        invertHoverEffect: true,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
            fadeIn: 500, // 200ms for fadeIn animations
            fadeOut: 500 // 800ms for fadeOut animations
        },
        onImageReady:function(img) {
            // this callback gets executed anytime an image is converted
        }
    });
    })(jQuery);