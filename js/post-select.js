/*
 * post-select.js
 *
 * Highlights posts when selected.
 *
 * Released under the MIT license
 * Copyright (c) 2013 Alyssa Rowan <alyssa.rowan@gmail.com>
 *
 * Usage:
 *   $config['additional_javascript'][] = 'js/jquery.min.js';
 *   $config['additional_javascript'][] = 'js/live.js';
 *
 */

$(document).ready(function(){

	init_postselect = function() {
		$(this).click(function(e) {
			if (e.which == 2) {
				return true;
			}
			if (this.checked) {
				$(this).parent().parent().addClass("selected");
			} else {
				$(this).parent().parent().removeClass("selected");
			}
		});
	};

	$('div.post>p.intro>input.delete').each(init_postselect);

	// allow to work with auto-reload.js, etc.
	$(document).bind('new_post', function(e, post) {
		$(post).find('div.post>p.intro>input.delete').each(init_postselect);
	});
});
