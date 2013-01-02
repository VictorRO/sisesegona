(function (win) {
	win.Extension = {
		collection:{},
		execute:function (scope) {
			jQuery.each(Extension.collection, function () {
				this(scope || document);
			});
		}
	};
})(window, document);

(function ($) {
	var extensionCollection = Extension.collection;
	
	/**
	 * Find the H1 a tag and add <span class="dark" /> at the second half of the blog name
	 **/
	extensionCollection.linkDarkSpan = function (scope) {
		var $siteName = $('#site-name', scope);
		
		if (!$siteName.length) return;
		
		$siteName.each(function () {
			var name = $(this).text();
			var separator = (name.indexOf(' ') > 0) ? ' ' : '';
			var nameArray = name.split(separator),
				halfLength = Math.ceil(nameArray.length / 2);	
			nameArray.splice(halfLength, 0, '<span class="dark">');
			nameArray.push('</span>');
			$(this).html(nameArray.join(separator));
		});
	};
	
	$(function () {
		Extension.execute(document);
	});
	
})(jQuery);