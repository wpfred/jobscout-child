<?php

// change default company logo
add_filter( 'job_manager_default_company_logo', 'smyles_custom_job_manager_logo' );

function smyles_custom_job_manager_logo( $logo_url ) {

	$filename = 'company.png';
	$logo_url = get_stylesheet_directory_uri() . '/job_manager/assets/images/' . $filename;
	
	return $logo_url;
}