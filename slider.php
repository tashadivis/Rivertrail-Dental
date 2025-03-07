<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    <title>Nivo Slider Demo</title>
    <link rel="stylesheet" href="assets/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/slider-style.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="assets/slider-1.png" data-thumb="assets/slider-1.png" alt=""/>
                <img src="assets/slider-2.png" data-thumb="assets/slider-2.png" alt=""/>
                <img src="assets/slider-3.png" data-thumb="assets/slider-3.png" alt=""/>
                <img src="assets/slider-4.png" data-thumb="assets/slider-4.png" alt=""/>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>

    </div>
    <script type="text/javascript" src="assets/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="assets/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
		$('#slider').nivoSlider({
			effect: 'fade',          // Specify sets like: 'fold,fade,sliceDown'
			slices: 15,                     // For slice animations
			boxCols: 8,                     // For box animations
			boxRows: 4,                     // For box animations
			animSpeed: 500,                 // Slide transition speed
			pauseTime: 3000,                // How long each slide will show
			startSlide: 0,                  // Set starting Slide (0 index)
			directionNav: true,             // Next & Prev navigation
			controlNav: false,              // 1,2,3... navigation
			controlNavThumbs: false,        // Use thumbnails for Control Nav
			pauseOnHover: true,             // Stop animation while hovering
			manualAdvance: false,           // Force manual transitions
			prevText: 'Prev',               // Prev directionNav text
			nextText: 'Next',               // Next directionNav text
			randomStart: false,             // Start on a random slide
			beforeChange: function(){},     // Triggers before a slide transition
			afterChange: function(){},      // Triggers after a slide transition
			slideshowEnd: function(){},     // Triggers after all slides have been shown
			lastSlide: function(){},        // Triggers when last slide is shown
			afterLoad: function(){}         // Triggers when slider has loaded
		});
    </script>
</body>
</html>