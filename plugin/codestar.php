

<?php

// For Codester

// Control core classes for avoid errors

if (class_exists('CSF')) {



	//

	// Set a unique slug-like ID

	$prefix = 'my_framework';



	//

	// Create options

	CSF::createOptions($prefix, array(

		'menu_title' => 'Theme Option',

		'menu_slug'  => 'my-framework',

	));



	//

	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'General Setting',

		'icon'   => 'fa fa-star',

		'fields' => array(





			// begin: a field

			array(

				'id'      => 'scroll_to_top',

				'type'    => 'switcher',

				'title'   => 'Show Scroll Top',

				'label'    => 'This allow you to show or hide Scroll top button',

				'default' => true,

			),

			// end: a field

			//   to add custom css

			array(

				'id'      => 'custom_css',

				'type'    => 'textarea',

				'title'   => 'Custom CSS',

				'desc'  => 'Add a Custom CSS to your site.',

			),

			//   end of adding custom css



		)

	));



	//

	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'Header',

		'icon'   => 'fa fa-header',

		'fields' => array(



			// for favicon

			array(

				'id'    => 'favicon1',

				'type'  => 'media',

				'title' => 'Favicon',

				'desc'  => 'This allow you to add favicon of your website.',

			),

			//   end of favicon

			//   for logo

			array(

				'id'    => 'header_logo1',

				'type'  => 'media',

				'title' => 'Logo',

				'desc'  => 'This allow you to upload/edit logo.',

			),

			// end of header logo

			//   for sticky header

			// array(

			// 	'id'      => 'sticky_header',

			// 	'type'    => 'switcher',

			// 	'title'   => 'STICKY',

			// 	'label'    => 'This allow you to show or hide Scroll top button',

			// ),

			//    end of sticky header





			// top bar text

			array(

				'id'    => 'email',

				'type'  => 'text',

				'title' => 'Email Address',

				'desc'  => 'This allow you to enter email address.',

			),

			// end of top bar text

			// for address

			array(

				'id'    => 'phone',

				'type'  => 'text',

				'title' => 'Phone Number',

				'desc'  => 'This allow you to enter phone number.',

			),
			array(

				'id'    => 'office_number',

				'type'  => 'text',

				'title' => 'Office Number',

				'desc'  => 'This allow you to enter Office number.',

            ),

            array(

				'id'    => 'working',

				'type'  => 'text',

				'title' => 'Working hours',

				'desc'  => 'This allow you to enter working hours.',

            ),

            array(

				'id'    => 'address',

				'type'  => 'text',

				'title' => 'Address',

				'desc'  => 'This allow you to enter address.',

			),

			//   end of address
		)

	));

	CSF::createSection($prefix, array(

		'title'  => 'Welcome Note',

		'icon'      => 'fa fa-adn',

		'fields' => array(



			// A Content Field Example

			array(

				'type'    => 'submessage',

				'style'   => 'success',

				'content' => 'Welcome Note Section',

			),

			// end of content field 

			// footer copyright

			array(

				'id'       => 'welcome_desc',

				'type'     => 'textarea',

				'title'    => 'Description of Welcome note',

				'desc'     => 'This allows you to enter description of welcome note.',

			),

			//   end of footer copyright

			array(
				'id'       => 'welcome_img',
				'type'     => 'media',
				'title'    => 'Image of welcome',
				'desc'     => 'This allows you to enter image of welcome.',
			),

		)

	));

	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'Footer and social',

		'icon'      => 'fa fa-copyright',

		'fields' => array(



			// A Content Field Example

			array(

				'type'    => 'submessage',

				'style'   => 'success',

				'content' => 'Footer Copyright Section',

			),

			// end of content field 

			// footer copyright

			array(

				'id'       => 'copyright',

				'type'     => 'textarea',

				'title'    => 'Footer Copyright',

				'desc'     => 'This allows you to enter your copyright text.',

			),

			//   end of footer copyright

			// A Content Field Example

			array(

				'type'    => 'submessage',

				'style'   => 'success',

				'content' => 'For Social Icon Section',

			),

			// end of content field 

			// for social Icon Section



			array(

				'id'       => 'facebook',

				'type'     => 'text',

				'title'    => 'Facebook',

				'desc'     => 'Copy Facebook Link and Paste it here.',

				'attributes'    => array(

					'placeholder' => 'Web URL'

				),

			),

			array(

				'id'       => 'twitter',

				'type'     => 'text',

				'title'    => 'Twitter',

				'desc'     => 'Copy Twitter Link and Paste it here.',

				'attributes'    => array(

					'placeholder' => 'Web URL'

				),

			),

			

			array(

				'id'       => 'linkedin',

				'type'     => 'text',

				'title'    => 'Linkedin',

				'desc'     => 'Copy Linkedin Link and Paste it here.',

				'attributes'    => array(

					'placeholder' => 'Web URL'

				),

			),



			// array(

			// 	'id'       => 'plus_instragram',

			// 	'type'     => 'text',

			// 	'title'    => 'Instagram',

			// 	'desc'     => 'Copy Instagram Link and Paste it here.',

			// 	'attributes'    => array(

			// 		'placeholder' => 'Web URL'

			// 	),

			// ),





		)

	));



	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'Image Slider',

		'icon'   => 'fa fa-image',

		'fields' => array(



			// for Repeater

			array(

				'id'     => 'repeat_text_image',

				'type'   => 'repeater',

				'title'  => 'Image with Content',

				'fields' => array(



				array(

					'id'    => 'sliderimage',

					'type'  => 'media',

					'title' => 'Image',

					),					  

			

				  array(

					'id'    => 'smalltext',

					'type'  => 'text',

					'title' => 'Small Text'

				  ),



				  array(

					'id'    => 'mediumtext',

					'type'  => 'text',

					'title' => 'Medium Text'

                  ),

                  array(

                    'type'    => 'submessage',

                    'style'   => 'success',

                    'content' => 'Click down to add slider',

                ),

				//   array(

				// 	'id'    => 'buttomname',

				// 	'type'  => 'text',

				// 	'title' => 'Button Name'

				//   ),

			  

				),

            ),

			  



		)

	));



	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'Affiliation with',

		'icon' => 'fa fa-university',

		'fields' => array(

			array(

				'id'     => 'parentfeedback',

				'type'   => 'repeater',

				'title'  => 'Feedback',

				'fields' => array(



					array(

						'id'    => 'image1',

						'type'  => 'media',

						'title' => 'Image',

					),

                   

				  array(

					'id'    => 'Link',

					'type'  => 'text',

					'title' => 'Link of website'

                  ),

                  array(

                    'type'    => 'submessage',

                    'style'   => 'success',

                    'content' => 'Click down to add affiliate with',

                ),

			  

				),

			  ),

			  

			// A textarea field

			



		)

	));



	// Create a section

	CSF::createSection($prefix, array(

		'title'  => 'Travel in a video',

		'icon'      => 'fa fa-adn',

		'fields' => array(



			// A Content Field Example

			array(

				'type'    => 'submessage',

				'style'   => 'success',

				'content' => 'Travel in a video section',

			),

			// end of content field 

			// footer copyright

			array(

				'id'       => 'desc',

				'type'     => 'textarea',

				'title'    => 'Description of video',

				'desc'     => 'This allows you to enter description of video.',

			),

			//   end of footer copyright

			array(

				'id'       => 'video1',

				'type'     => 'text',

				'title'    => 'video link',

				'desc'     => 'This allows you to enter video link.',

			),

		)

	));


	CSF::createSection($prefix, array(

		'title'  => 'Why Choose Travel',
		'icon'      => 'fa fa-university',
		'fields' => array(
			// A Content Field Example
			// end of content field 
			// footer copyright
			array(
				'id'       => 'first_title',
				'type'     => 'text',
				'title'    => 'First Title',
				'desc'     => 'This allows you to enter first title.',
			),
			//   end of footer copyright
			array(
				'id'       => 'first_content',
				'type'     => 'textarea',
				'title'    => 'First Content',
				'desc'     => 'This allows you to enter first content.',
			),
			// 
			array(
				'type'    => 'submessage',
				'style'   => 'success',
				'content' => 'For second title and content',
			),
			array(
				'id'       => 'second_title',
				'type'     => 'text',
				'title'    => 'Second Title',
				'desc'     => 'This allows you to enter second title.',
			),
			//   end of footer copyright
			array(
				'id'       => 'second_content',
				'type'     => 'textarea',
				'title'    => 'Second Content',
				'desc'     => 'This allows you to enter second content.',
			),
			// 
			array(
				'type'    => 'submessage',
				'style'   => 'success',
				'content' => 'For third title and content',
			),
			array(
				'id'       => 'third_title',
				'type'     => 'text',
				'title'    => 'Third Title',
				'desc'     => 'This allows you to enter third title.',
			),
			//   end of footer copyright
			array(
				'id'       => 'third_content',
				'type'     => 'textarea',
				'title'    => 'third Content',
				'desc'     => 'This allows you to enter third content.',
			),
			// 
			array(
				'type'    => 'submessage',
				'style'   => 'success',
				'content' => 'For fourth title and content',
			),
			array(
				'id'       => 'Fourth_title',
				'type'     => 'text',
				'title'    => 'Fourth Title',
				'desc'     => 'This allows you to enter fourth title.',
			),
			//   end of footer copyright
			array(
				'id'       => 'fourth_content',
				'type'     => 'textarea',
				'title'    => 'fourth Content',
				'desc'     => 'This allows you to enter fourth content.',
			),
			// 
			array(
				'type'    => 'submessage',
				'style'   => 'success',
				'content' => 'For fifth title and content',
			),
			array(
				'id'       => 'fifth_title',
				'type'     => 'text',
				'title'    => 'Fifth Title',
				'desc'     => 'This allows you to enter fifth title.',
			),
			//   end of footer copyright
			array(
				'id'       => 'fifth_content',
				'type'     => 'textarea',
				'title'    => 'First Content',
				'desc'     => 'This allows you to enter fifth content.',
			),
			// 


		)

	));
	// for why choose us travel section

	// CSF::createSection($prefix, array(

	// 	'title'  => 'Why choose us',

	// 	'icon' => 'fa fa-university',

	// 	'fields' => array(

	// 		array(

	// 			'id'     => 'choose_us',

	// 			'type'   => 'repeater',

	// 			'title'  => 'Why Choose us',

	// 			'fields' => array(

	// 			  array(

	// 				'id'    => 'choose_title',

	// 				'type'  => 'text',

	// 				'title' => 'Title'

    //               ),

    //               array(

	// 				'id'    => 'choose_content',

	// 				'type'  => 'textarea',

	// 				'title' => 'content'

	// 			  ),

	// 			  array(

	// 				'type'    => 'submessage',

	// 				'style'   => 'success',

	// 				'content' => 'Click add sign to add more',

	// 			),

	// 			),

	// 		  ),

			  

	// 		// A textarea field

			



	// 	)

	// ));





}

?>