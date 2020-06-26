<?php
/**
 * Archive partial
 *
 * @package      SETUP-BE
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="module post-summary">';

	// FEATURED IMAGE
	setup_be_image();
	//setup_be_image_nolink();

	echo '<div class="items info">';

		// OVERLINE
		setup_be_overline();
		//setup_be_overline_nolink();
		
		// TITLE
		setup_be_title();
		//setup_be_title_nolink();

		// AUTHOR
		//setup_be_author();
		//setup_be_author_nolink();
		//setup_be_author_by();
		//setup_be_author_by_nolink();
		//setup_be_author_icon();
		//setup_be_author_icon_nolink();
		//setup_be_author_gravatar();
		
		// DATE
		//setup_be_date();
		//setup_be_date_mdy();
		//setup_be_date_day_mdy();
		//setup_be_date_mdy_time();

		// DATE & AUTHOR
		setup_be_dateauthor();
		//setup_be_dateauthor_nolink();

		// EXCERPT
		setup_be_excerpt();
		//setup_be_excerpt_maxwords();

		// ADMIN
		setup_be_edit();

	echo '</div>';

echo '</article>';