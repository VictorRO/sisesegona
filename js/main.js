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
	 * Find the H1 a tag and add <span class="dark" /> at the half of the title
	 **/
	extensionCollection.linkDarkSpan = function (scope) {
		var $h1_link = $('#site-name', scope);
		
		if (!$h1_link.length) return;
		
		$h1_link.each(function () {
			var str = $(this).text();
			if( str.indexOf(' ') > 0 ) { var space = ' '; } 
			else { var space = ''; }
			var strArray = str.split(space),
			fullLength = strArray.length,
			halfLength = Math.ceil( fullLength / 2 ),
			restLength = fullLength - halfLength,
			newstr = '';
			for( var i = 0; i < halfLength; i++ ) {
				newstr += strArray[i] + space;
			}
			newstr += '<span class="dark">';
			for( var i = halfLength; i < fullLength; i++ ) {
				newstr += strArray[i] + space;
			}
			newstr += '</span>';
			$h1_link.html(newstr);
		});
	};
	
	$(function () {
		Extension.execute(document);
	});
	
})(jQuery);