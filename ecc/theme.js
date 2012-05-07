jQuery(function() {
	var basePath = '/wp-content/themes/ecc/images/socialIcons/';
	var preloadImages = [
		'FaceBook-F2.png',
		'Twitter-F2.png',
		'Youtube-F2.png',
		'RSSFeed-F2.png'
	];
	for (var i = 0; i < preloadImages.length; i++) {
		var img = new Image;
		img.src = basePath + preloadImages[i];
	};

	jQuery('#socialIcons li a').attr('target', '_blank');
	jQuery('#socialIcons img').mouseover(
		function() { this.src = this.src.replace(/\.png/, '-F2.png'); }
	).mouseout(
		function() { this.src = this.src.replace(/-F2\.png/, '.png'); }
	);

	jQuery('#featuredSlides').innerfade({ timeout: 10000 });
	jQuery('.dbem_events_list li:even').addClass('even');
});
