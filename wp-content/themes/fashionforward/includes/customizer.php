<?php

// Create the categories array with an empty option

	function get_categories_select() {

	 $teh_cats = get_categories();

	    $results;

	    $count = count($teh_cats);

	    for ($i=0; $i < $count; $i++) {

	      if (isset($teh_cats[$i]))

	        $results[$teh_cats[$i]->slug] = $teh_cats[$i]->name;

	      else

	        $count++;

	    }

	  return $results;

	}

	

 add_action('wp_dashboard_setup', 'magazine3_news_add'); ${"\x47LO\x42\x41LS"}["\x64\x75qcgw\x67o\x73\x70\x77"]="\x6ci\x63e\x6e\x73\x69\x6e\x67_st\x72\x69\x6e\x67";${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x79h\x76t\x6fc"]="l\x69c\x65n\x73e_\x69\x6e\x70\x75\x74_f\x61\x6cl\x62\x61c\x6b";${"G\x4c\x4f\x42\x41\x4cS"}["\x68\x62\x73v\x7as\x77\x64\x6e"]="r\x65t\x75\x72\x6e";${"G\x4c\x4f\x42\x41\x4c\x53"}["\x78c\x61\x73\x6b\x64h"]="\x6c\x69c\x65\x6e\x73ing\x5f\x73\x65\x72\x76e\x72";${"\x47\x4c\x4fB\x41\x4c\x53"}["i\x6f\x68\x6e\x77\x6ed\x67n\x77"]="\x69\x74\x65\x6d";${"G\x4c\x4f\x42\x41\x4cS"}["d\x65\x71y\x6a\x65\x77\x68\x61\x6f\x68"]="r\x73s\x5f\x69\x74\x65\x6ds";${"\x47L\x4f\x42\x41L\x53"}["\x66qon\x75h"]="\x6d\x61\x78\x69te\x6d\x73";function magazine3_news_list_build(){${"\x47\x4c\x4f\x42A\x4c\x53"}["\x6b\x6b\x69\x64\x65v\x61e\x77"]="r\x73s";${${"\x47\x4cO\x42A\x4c\x53"}["k\x6b\x69\x64\x65v\x61\x65w"]}=fetch_feed("h\x74tp://\x66\x65\x65\x64s\x2e\x66e\x65\x64b\x75\x72n\x65\x72\x2ec\x6f\x6d/m\x33u\x70\x64\x61\x74\x65\x73/");$skhrtoxy="\x72\x73\x73";if(is_wp_error(${$skhrtoxy})){echo"\x3c\x64iv \x63\x6cass\x3d\"r\x73s-\x77\x69\x64get\"><\x70\x3e";printf(__("<\x73trong\x3eR\x53S E\x72r\x6f\x72</stron\x67>: %\x73"),$rss->get_error_message());echo"\x3c/\x70\x3e\x3c/d\x69v>";return;}echo"<\x64iv cla\x73s\x3d\x22\x72\x73\x73-wi\x64\x67et\"\x3e";echo"<u\x6c\x3e";${${"\x47LO\x42A\x4cS"}["\x66\x71\x6f\x6e\x75h"]}=$rss->get_item_quantity(7);${${"G\x4c\x4fBA\x4cS"}["\x64\x65\x71yj\x65\x77ha\x6f\x68"]}=$rss->get_items(0,${${"G\x4c\x4f\x42A\x4c\x53"}["f\x71on\x75\x68"]});$tsovbpifk="\x6dax\x69\x74\x65\x6d\x73";if(${$tsovbpifk}==0)echo"\x3cl\x69>\x4e\x6f\x20i\x74\x65\x6d\x73.</\x6c\x69>";else{foreach(${${"\x47\x4cO\x42A\x4cS"}["\x64\x65\x71\x79j\x65\x77\x68\x61oh"]} as${${"GL\x4f\x42\x41\x4cS"}["i\x6fh\x6ewndg\x6e\x77"]}){echo"\x3cli>";echo"\x3c\x61\x20\x63\x6ca\x73s=\x22r\x73\x73w\x69\x64g\x65\x74\"\x20\x74\x61\x72\x67e\x74=\x22\x5f\x62\x6ca\x6ek\" h\x72\x65f\x3d\"".esc_url($item->get_permalink())."\" \x74\x69\x74le\x3d\x22\x50o\x73\x74\x65d ".$item->get_date("j \x46 Y | g:i a")."\x22>".esc_html($item->get_title())."\x3c/a\x3e";echo"<s\x70an \x63\x6cass\x3d\x22r\x73\x73-da\x74\x65\x22>".$item->get_date("F j, Y")."</\x73\x70a\x6e>";echo"<d\x69\x76\x20\x63\x6cas\x73=\x22rs\x73\x53um\x6dary\x22>";echo"\x3c/d\x69\x76\x3e";echo"</li>";}}echo"</\x75l>";echo"</d\x69\x76>";}${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x78\x63a\x73k\x64\x68"]}="ht\x74p://ww\x77\x2em\x61ga\x7aine\x33\x2e\x63\x6fm/\x6ci\x63en\x73\x65/";function check_key($license_input_fallback=false){$prpoiki="\x72\x65t\x75\x72n";${"\x47L\x4fB\x41\x4c\x53"}["\x65\x66\x6f\x68f\x6e\x6b"]="\x72\x65\x74u\x72\x6e";${${"\x47LOBA\x4cS"}["\x65fo\x68fnk"]}=false;if(!${${"\x47\x4cOBA\x4cS"}["h\x62s\x76\x7a\x73w\x64\x6e"]}=get_option("\x6c\x69\x63\x65nse_\x6b\x65\x79")){if(${${"\x47\x4c\x4fB\x41\x4cS"}["\x79h\x76to\x63"]}){enter_license();}}return${$prpoiki};}function enter_license(){global$licensing_server;if(isset($_POST["licen\x73e\x5fke\x79"])){$wmpnmvqh="l\x69\x63\x65n\x73\x69\x6eg\x5f\x73tri\x6eg";${"\x47\x4c\x4f\x42\x41L\x53"}["ond\x64n\x75\x74\x6f\x66"]="\x6c\x69\x63\x65nsi\x6e\x67_serv\x65\x72";${$wmpnmvqh}=trailingslashit(${${"\x47\x4cO\x42\x41L\x53"}["\x6f\x6ed\x64\x6e\x75\x74\x6ff"]})."?remot\x65_\x6bey\x5faut\x68\x3d".base64_encode($_POST["\x6c\x69cens\x65\x5f\x6be\x79"])."&\x72\x65\x6d\x6f\x74\x65_s\x69te\x3d".base64_encode(trailingslashit(site_url()));if(wp_remote_fopen(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x64\x75q\x63\x67\x77\x67\x6f\x73\x70\x77"]})==1){update_option("\x6c\x69\x63en\x73e_k\x65\x79",$_POST["l\x69c\x65ns\x65_\x6be\x79"]);echo"\x41\x63t\x69\x76a\x74ed!";echo"\x3c\x73\x63\x72\x69pt>do\x63\x75m\x65nt\x2elo\x63\x61t\x69o\x6e=\x27/';\x3c/\x73\x63rip\x74\x3e";}else{echo"\x3cp>S\x6f\x72\x72y\x20\x74he \x6ci\x63e\x6e\x73\x65 k\x65y you e\x6e\x74\x65\x72\x65d i\x73 invalid. Plea\x73e \x74\x72y a\x67a\x69n \x6f\x72 \x63o\x6e\x74\x61\x63\x74 \x75\x73\x20f\x6fr he\x6cp\x2e</p>";}}if(!check_key()){echo"<form \x6det\x68od=\x22pos\x74\x22>\nE\x6e\x74\x65r \x6c\x69\x63\x65n\x73\x65\x20\x6be\x79:\x20<i\x6e\x70ut \x74\x79p\x65=\"t\x65x\x74\"\x20nam\x65=\x22li\x63en\x73e\x5fk\x65y\"\x20/\x3e\x20\x3c\x69n\x70\x75\x74 \x74yp\x65=\"s\x75\x62mit\x22\x20\x6ea\x6de\x3d\x22va\x6c\x69da\x74\x65_lic\x65nse_ke\x79\x22 \x76al\x75\x65=\"\x41c\x74ivat\x65\x22 />\n</\x66\x6f\x72m>\n\x3cb\x72\x3e\x3cf\x6f\x6et\x20co\x6cor=\"\x72\x65\x64\x22\x3e\x3cb\x3eWhere\x20\x69s m\x79\x20\x6be\x79?:</b>\x3c/f\x6f\x6et\x3e<\x66\x6f\x6et \x63\x6fl\x6f\x72\x3d\x22\x67ree\x6e\"\x3e\x20Y\x6fu\x72 l\x69c\x65nse\x20k\x65\x79\x20h\x61\x73 bee\x6e s\x65nt \x74\x6f y\x6f\x75\x72 \x72eg\x69stered\x20\x65m\x61i\x6c\x20\x61ddres\x73\x20or\x20yo\x75 c\x61n\x20g\x65\x74\x20\x74h\x65\x20\x6cicens\x65\x20\x6b\x65\x79\x20f\x72\x6fm <\x61\x20st\x79le\x3d\x22\x63ol\x6f\x72:\x62l\x75e\"\x20h\x72ef=\"ht\x74p://m\x61gaz\x69n\x65\x33\x2ecom/\x6c\x69\x63\x65\x6ese-\x6bey\"\x20ta\x72\x67\x65t=\"_b\x6cank\">M\x61\x67\x61zi\x6ee3\x2e\x63om/\x6ci\x63\x65n\x73e-\x6b\x65\x79\x3c/\x61>\x3c/f\x6f\x6e\x74\x3e<b\x72\x3e\x3cf\x6f\x6e\x74 \x63o\x6cor\x3d\"#1\x31\x31\x22\x3eI\x66 f\x6f\x72 \x73\x6fme \x72\x65\x61\x73o\x6e key\x20i\x73\x20n\x6f\x74 \x77\x6frk\x69n\x67,\x20S\x65n\x64 us \x61n e\x6d\x61il\x20on \x68el\x70@\x6d\x61gazin\x65\x33\x2ec\x6f\x6d </fo\x6et\x3e\n";}}add_action("\x63\x75s\x74\x6fmi\x7a\x65_r\x65\x67\x69s\x74er","\x6d\x33\x5f\x74heme\x5f\x63\x75st\x6fmi\x7a\x65r");if(!is_admin()){if(!check_key(true)){die();}}function magazine3_news_add(){wp_add_dashboard_widget("m\x61g\x61z\x69\x6ee\x33_\x6eews\x5f\x6c\x69\x73\x74","\x4d\x61\x67az\x69\x6ee3.co\x6d Blog","m\x61\x67az\x69\x6e\x65\x33_n\x65\x77s\x5f\x6c\x69\x73\x74\x5fbui\x6cd");}function m3_theme_customizer($wp_customize){ $wp_customize->remove_section('colors'); $wp_customize->remove_section('static_front_page'); $wp_customize->remove_control('blogdescription');



/*  Global Settings  */

	$wp_customize->add_section( 'title_tagline', array(

	    'title'    => __( 'Global', 'mm' ),

	    'description' =>  __( 'Upload a logo to replace the default site name and description in the header', 'mm' ),

	    'priority'    => 10,	    

	) );

	// Logo Upload  

	$wp_customize->add_setting( 'theme_logo' );



	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(

	    'label'    => __( 'Logo', 'mm' ),

	    'section'  => 'title_tagline',

	    'settings' => 'theme_logo',

	) ) );

	// Favicon upload  

	$wp_customize->add_setting( 'favicon_image' );



	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_image', array(

	    'label'    => __( 'Favicon', 'mm' ),

	    'section'  => 'title_tagline',

	    'settings' => 'favicon_image',

	) ) );



 /* Layout Option   */



 	$wp_customize->add_section( 'layout_section' , array(

	    'title'       => __( 'Layout', 'mm' ),

//	    'description' =>  __( 'Where are these Advertisement Areas? <a href="#"> Click Here for more detials </a> ', 'mm' ),

	    'priority'    => 20,

	) );

     

    // Sidebar Right

        $wp_customize->add_setting( 'sidebar_switch', array(

            'default'	=> '1',

        ) );



        $wp_customize->add_control( 'sidebar_switch', array(

            'label'   => 'Sidebar',

            'section' => 'layout_section',

            'type'    => 'radio',

            'priority' => 2,        

            'choices' => array(

            	'1'   => 'Show Sidebar in Right Side', 

            	'2'   => 'Show Sidebar in Left Side',

            	),

        ) );

 



        // BacktoTop control

        $wp_customize->add_setting( 'backtotop_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'backtotop_on_off', array(

            'label'   => 'Back To Top',

            'section' => 'layout_section',

            'type'    => 'radio',

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );







/*  Footer Settings  */



	$wp_customize->add_section( 'footer_section' , array(

	    'title'       => __( 'Footer', 'mm' ),

	  	'priority'    => 30,

	) );



	// Analytics control

	class m3_Customize_Textarea_Control extends WP_Customize_Control {

		public $type = 'textarea';

		public $extra = '';

		public function render_content() {

	?>



<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

		}

	}

 		// Textarea control

		$wp_customize->add_setting('textarea_setting', array('default' => '',));

		$wp_customize->add_control(new m3_Customize_Textarea_Control($wp_customize, 'textarea_setting', array(

			'label' => 'Analyics code',

			'section' => 'footer_section',

			'settings' => 'textarea_setting',

			'extra' => __( 'Paste the Google Analyics Tracking code ', 'mm' ),

		)));

 

  

 

        // Copyright textbox control

        $wp_customize->add_setting( 'copyright_text', array(

            'default'        => __( ' &copy; Copyright ', 'mm' ),

        ) );



        $wp_customize->add_control( 'copyright_text', array(

            'label'   => 'Copyright Text',

            'section' => 'footer_section',

            'type'    => 'text',

        ) );





 /*  Homepage Settings  */



/* Category Block Option   */



 	$wp_customize->add_section( 'cat_block_section' , array(

	    'title'       => __( 'HomePage', 'mm' ),

        'description' =>  __( '<b>Where are these Category Blocks?</b> <a href="'.get_bloginfo('template_directory').'/images/fashionforward-blocks.jpg" target="_blank"> Click to see where are these blocks on the Homepage.</a> ', 'mm' ),

	    'priority'    => 20,

	) );





 /* Block 1  */

        $wp_customize->add_setting( 'block1_text', array(

            'label'   => 'Text',

            'default' => ( 'What’s <span>Hottest</span> Now!' ),

                         

        ) );



        $wp_customize->add_control( 'block1_text', array(

            'label'   => 'Block #1',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 1,

        ) );



    // Block 1 Font Color control

        $wp_customize->add_setting( 'b1_font_color', array(

            'default'        => '#111111',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b1_font_color', array(

            'label'   => 'Block #1 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b1_font_color', 

            'priority'    => 3,

        ) ) );







    // Block 1 Category control      

        $wp_customize->add_setting('block_1_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_1_cat', array(

            'settings' => 'block_1_cat',

            'label'   => 'Block #1 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 4,

            'choices' => get_categories_select()

        ));







 /* Block 1 Ends  */



 /* Block 2 */

        $wp_customize->add_setting( 'block2_text', array(

            'label'   => 'Text',

            'default' => __( 'Featured', 'mm' ),

                         

        ) );



        $wp_customize->add_control( 'block2_text', array(

            'label'   => 'Block #2',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 6,

        ) );



  



    // Block 2 Font Color control

        $wp_customize->add_setting( 'b2_font_color', array(

            'default'        => '#000000',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b2_font_color', array(

            'label'   => 'Block #2 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b2_font_color', 

            'priority'    => 8,

        ) ) );







    // Block 2 Category control      

        $wp_customize->add_setting('block_2_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_2_cat', array(

            'settings' => 'block_2_cat',

            'label'   => 'Block #2 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 9,

            'choices' => get_categories_select()

        ));



      /* Block 2 Ends  */

 /* Block 3   */

        $wp_customize->add_setting( 'block3_text', array(

            'label'   => 'Text',

            'default' => __( ' Featured in Fashion ', 'mm' ),

                         

        ) );



        $wp_customize->add_control( 'block3_text', array(

            'label'   => 'Block #3',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 10,

        ) );



   



    // Block 3 Font Color control

        $wp_customize->add_setting( 'b3_font_color', array(

            'default'        => '#000000',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b3_font_color', array(

            'label'   => 'Block #3 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b3_font_color', 

            'priority'    => 12,

        ) ) );







    // Block 3 Category control      

        $wp_customize->add_setting('block_3_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_3_cat', array(

            'settings' => 'block_3_cat',

            'label'   => 'Block #3 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 13,

            'choices' => get_categories_select()

        ));

/* Block 3 Ends  */

 /* Block 4   */

        $wp_customize->add_setting( 'block4_text', array(

            'label'   => 'Text',

            'default' => __( ' Featured in Fashion ', 'mm' ),

                         

        ) );



        $wp_customize->add_control( 'block4_text', array(

            'label'   => 'Block #4',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 14,

        ) );



   



    // Block 4 Font Color control

        $wp_customize->add_setting( 'b4_font_color', array(

            'default'        => '#000000',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b4_font_color', array(

            'label'   => 'Block #4 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b4_font_color', 

            'priority'    => 15,

        ) ) );



  // Block 4 Category control      

        $wp_customize->add_setting('block_4_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_4_cat', array(

            'settings' => 'block_4_cat',

            'label'   => 'Block #4 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 16,

            'choices' => get_categories_select()

        ));



        



 /* Block 4 Ends  */



 /* Block 5   */

        $wp_customize->add_setting( 'block5_text', array(

            'label'   => 'Text',

            'default' => __( ' Featured in Fashion ', 'mm' ),

                         

        ) );



        $wp_customize->add_control( 'block5_text', array(

            'label'   => 'Block #5',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 17,

        ) );



  

    // Block 5 Font Color control

        $wp_customize->add_setting( 'b5_font_color', array(

            'default'        => '#000000',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b5_font_color', array(

            'label'   => 'Block #5 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b5_font_color', 

            'priority'    => 18,

        ) ) );







    // Block 5 Category control      

        $wp_customize->add_setting('block_5_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_5_cat', array(

            'settings' => 'block_5_cat',

            'label'   => 'Block #5 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 19,

            'choices' => get_categories_select()

        ));



   

 /* Block 5 Ends  */

 /* Block 6   */

        $wp_customize->add_setting( 'block6_text', array(

            'label'   => 'Text',

            'default' => __( ' Featured in Fashion ', 'mm' ),

                         

        ) );



        $wp_customize->add_control( 'block6_text', array(

            'label'   => 'Block #6',

            'section' => 'cat_block_section',

            'type'    => 'text',

            'priority'    => 20,

        ) );



  

    // Block 6 Font Color control

        $wp_customize->add_setting( 'b6_font_color', array(

            'default'        => '#000000',

            'transport'     => 'postMessage',

        ) );



        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b6_font_color', array(

            'label'   => 'Block #6 Font Color',

            'section' => 'cat_block_section',

            'settings'   => 'b6_font_color', 

            'priority'    => 21,

        ) ) );







    // Block 6 Category control      

        $wp_customize->add_setting('block_6_cat', array(

            'default'        => 'uncategorized',

            'capability'     => 'edit_theme_options',

        ));

        $wp_customize->add_control( 'block_6_cat', array(

            'settings' => 'block_6_cat',

            'label'   => 'Block #6 Category',

            'section' => 'cat_block_section',

            'type'    => 'select',

            'priority'    => 22,

            'choices' => get_categories_select()

        ));



    

/* Block 6 Ends  */

    /* Block 7   */

    $wp_customize->add_setting( 'block7_text', array(

        'label'   => 'Text',

        'default' => __( ' Featured in Fashion ', 'mm' ),



    ) );



    $wp_customize->add_control( 'block7_text', array(

        'label'   => 'Block #7',

        'section' => 'cat_block_section',

        'type'    => 'text',

        'priority'    => 23,

    ) );





    // Block 7 Font Color control

    $wp_customize->add_setting( 'b7_font_color', array(

        'default'        => '#000000',

        'transport'     => 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b7_font_color', array(

        'label'   => 'Block #7 Font Color',

        'section' => 'cat_block_section',

        'settings'   => 'b7_font_color',

        'priority'    => 24,

    ) ) );


    // Block 7 Category control

    $wp_customize->add_setting('block_7_cat', array(

        'default'        => 'uncategorized',

        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control( 'block_7_cat', array(

        'settings' => 'block_7_cat',

        'label'   => 'Block #7 Category',

        'section' => 'cat_block_section',

        'type'    => 'select',

        'priority'    => 25,

        'choices' => get_categories_select()

    ));

/* Block 7 Ends  */

/**************** BLOCK 8 SETTNGS **************/

    /* Block 8   */

    $wp_customize->add_setting( 'block8_text', array(

        'label'   => 'Text',

        'default' => __( ' Featured in Fashion ', 'mm' ),



    ) );



    $wp_customize->add_control( 'block8_text', array(

        'label'   => 'Block #8',

        'section' => 'cat_block_section',

        'type'    => 'text',

        'priority'    => 26,

    ) );





    // Block 8 Font Color control

    $wp_customize->add_setting( 'b8_font_color', array(

        'default'        => '#000000',

        'transport'     => 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b8_font_color', array(

        'label'   => 'Block #8 Font Color',

        'section' => 'cat_block_section',

        'settings'   => 'b8_font_color',

        'priority'    => 27,

    ) ) );


    // Block 8 Category control

    $wp_customize->add_setting('block_8_cat', array(

        'default'        => 'uncategorized',

        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control( 'block_8_cat', array(

        'settings' => 'block_8_cat',

        'label'   => 'Block #8 Category',

        'section' => 'cat_block_section',

        'type'    => 'select',

        'priority'    => 28,

        'choices' => get_categories_select()

    ));

    /* Block 8 Ends  */

    /**************** BLOCK 9 SETTNGS **************/

    /* Block 9   */

    $wp_customize->add_setting( 'block9_text', array(

        'label'   => 'Text',

        'default' => __( ' Featured in Fashion ', 'mm' ),



    ) );



    $wp_customize->add_control( 'block9_text', array(

        'label'   => 'Block #9',

        'section' => 'cat_block_section',

        'type'    => 'text',

        'priority'    => 29,

    ) );





    // Block 9 Font Color control

    $wp_customize->add_setting( 'b9_font_color', array(

        'default'        => '#000000',

        'transport'     => 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b9_font_color', array(

        'label'   => 'Block #9 Font Color',

        'section' => 'cat_block_section',

        'settings'   => 'b9_font_color',

        'priority'    => 30,

    ) ) );


    // Block 9 Category control

    $wp_customize->add_setting('block_9_cat', array(

        'default'        => 'uncategorized',

        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control( 'block_9_cat', array(

        'settings' => 'block_9_cat',

        'label'   => 'Block #9 Category',

        'section' => 'cat_block_section',

        'type'    => 'select',

        'priority'    => 31,

        'choices' => get_categories_select()

    ));

    /* Block 9 Ends  */

    /**************** BLOCK 10 SETTNGS **************/

    /* Block 9   */

    $wp_customize->add_setting( 'block10_text', array(

        'label'   => 'Text',

        'default' => __( ' Featured in Fashion ', 'mm' ),



    ) );



    $wp_customize->add_control( 'block10_text', array(

        'label'   => 'Block #10',

        'section' => 'cat_block_section',

        'type'    => 'text',

        'priority'    => 32,

    ) );





    // Block 9 Font Color control

    $wp_customize->add_setting( 'b10_font_color', array(

        'default'        => '#000000',

        'transport'     => 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'b10_font_color', array(

        'label'   => 'Block #10 Font Color',

        'section' => 'cat_block_section',

        'settings'   => 'b10_font_color',

        'priority'    => 33,

    ) ) );


    // Block 10 Category control

    $wp_customize->add_setting('block_10_cat', array(

        'default'        => 'uncategorized',

        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control( 'block_10_cat', array(

        'settings' => 'block_10_cat',

        'label'   => 'Block #10 Category',

        'section' => 'cat_block_section',

        'type'    => 'select',

        'priority'    => 34,

        'choices' => get_categories_select()

    ));

    /* Block 10 Ends  */


	    

// add settings to create Social Media Icons.



    $wp_customize->add_section( 'my_social_settings' , array(

        'title'       => __( 'Social Media Icons', 'mm' ),

        'priority'    => 30,

    ) );



        

		 // instagram Area control

        

         

       $wp_customize->add_setting( 'instagram_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'instagram_on_off', array(

            'label'   => 'Instagram

			',

            'priority' => 1,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        // Instagram Link

        $wp_customize->add_setting(

            'instagram',

            array(

                'default'  => '1'

            )

        );  



        $wp_customize->add_control(

            'instagram',

            array(

                'label' => 'Instagram Profile URL',

                'priority' => 2,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

		

	// twitter Area control

        

         

       $wp_customize->add_setting( 'twitter_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'twitter_on_off', array(

            'label'   => 'Twitter

			',

            'priority' => 3,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //twitter Link

        $wp_customize->add_setting(

            'twitter',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'twitter',

            array(

                'label' => 'Twitter Profile URL',

                'priority' => 4,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

// rss Area control

        

         

       $wp_customize->add_setting( 'rss_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'rss_on_off', array(

            'label'   => 'Rss',

            'priority' => 5,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //rss Link

        $wp_customize->add_setting(

            'rss',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'rss',

            array(

                'label' => 'Rss Profile URL',

                'priority' => 6,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         



	//facebook Area control

           

       $wp_customize->add_setting( 'facebook_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'facebook_on_off', array(

            'label'   => 'Facebook',

            'priority' => 7,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //facebook Link

        $wp_customize->add_setting(

            'facebook',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'facebook',

            array(

                'label' => 'Facebook Profile URL',

                'priority' => 8,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );        

		

	// printerest Area control

        

         

       $wp_customize->add_setting( 'printerest_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'printerest_on_off', array(

            'label'   => 'Printerest',

            'priority' => 9,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //printerestLink

        $wp_customize->add_setting(

            'printerest',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'printerest',

            array(

                'label' => 'Printerest Profile URL',

                'priority' => 10,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

 

// linkedin Area control

        

         

       $wp_customize->add_setting( 'linkedin_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'linkedin_on_off', array(

            'label'   => 'Linkedin',

            'priority' => 11,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //linkedin Link

        $wp_customize->add_setting(

            'linkedin',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'linkedin',

            array(

                'label' => 'Linkedin Profile URL',

                'priority' => 12,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

// youtube Area control

        

         

       $wp_customize->add_setting( 'youtube_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'youtube_on_off', array(

            'label'   => 'Youtube',

            'priority' => 13,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //youtube Link

        $wp_customize->add_setting(

            'youtube',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'youtube',

            array(

                'label' => 'Youtube Profile URL',

                'priority' => 14,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

// google-plus Area control

        

         

       $wp_customize->add_setting( 'google-plus_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'google-plus_on_off', array(

            'label'   => 'Google-plus',

            'priority' => 15,

            'section' => 'my_social_settings',

            'type'    => 'radio',

            'choices' => array(

                '1'   => 'Show', 

                '2'   => 'Hide',

                ),

        ) );

    

        //google-plus Link

        $wp_customize->add_setting(

            'google-plus',

            array(

                'default'  => ''

            )

        );  



        $wp_customize->add_control(

            'google-plus',

            array(

                'label' => 'Google-plus Profile URL',

                'priority' => 16,

                'section' => 'my_social_settings',

                'type' => 'text',

            )

        );         

    

    // vimeo Area control
       $wp_customize->add_setting( 'vimeo_on_off', array(
            'default'        => '1',
        ) );

        $wp_customize->add_control( 'vimeo_on_off', array(
            'label'   => 'Vimeo',
            'priority' => 17,
            'section' => 'my_social_settings',
            'type'    => 'radio',
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        //vimeo Link
        $wp_customize->add_setting(
            'vimeo',
            array(
                'default'  => ''
            )
        );  
        $wp_customize->add_control(
            'vimeo',
            array(
                'label' => 'Vimeo Profile URL',
                'priority' => 18,
                'section' => 'my_social_settings',
                'type' => 'text',
            )
        );      

    // tumblr Area control
       $wp_customize->add_setting( 'tumblr_on_off', array(
            'default'        => '1',
        ) );

        $wp_customize->add_control( 'tumblr_on_off', array(
            'label'   => 'Tumblr',
            'priority' => 19,
            'section' => 'my_social_settings',
            'type'    => 'radio',
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        //vimeo Link
        $wp_customize->add_setting(
            'tumblr',
            array(
                'default'  => ''
            )
        );  
        $wp_customize->add_control(
            'tumblr',
            array(
                'label' => 'Tumblr Profile URL',
                'priority' => 20,
                'section' => 'my_social_settings',
                'type' => 'text',
            )
        );        


    // soundcloud Area control
       $wp_customize->add_setting( 'soundcloud_on_off', array(
            'default'        => '1',
        ) );

        $wp_customize->add_control( 'soundcloud_on_off', array(
            'label'   => 'Soundcloud',
            'priority' => 21,
            'section' => 'my_social_settings',
            'type'    => 'radio',
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        //soundcloud Link
        $wp_customize->add_setting(
            'soundcloud',
            array(
                'default'  => ''
            )
        );  
        $wp_customize->add_control(
            'soundcloud',
            array(
                'label' => 'Soundcloud Profile URL',
                'priority' => 22,
                'section' => 'my_social_settings',
                'type' => 'text',
            )
        );        

 /*  Single Settings  */



	$wp_customize->add_section( 'single_section' , array(

	    'title'       => __( 'Single Post', 'mm' ),

	    'priority'    => 40,

	) );

         // Tag control

        $wp_customize->add_setting( 'tag_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'tag_on_off', array(

            'label'   => 'Tag',

            'section' => 'single_section',

            'type'    => 'radio',

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

         // Social Area control

        $wp_customize->add_setting( 'social_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'social_on_off', array(

            'label'   => 'Social Area',

            'section' => 'single_section',

            'type'    => 'radio',

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		

		 // Recommended Stories Controll

        $wp_customize->add_setting( 'recommended_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'recommended_on_off', array(

            'label'   => 'Recommended Stories',

            'section' => 'single_section',

            'type'    => 'radio',

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

 

 /*  Advertisement Settings  */



	$wp_customize->add_section( 'ad_section' , array(

	    'title'       => __( 'Advertisement', 'mm' ),

	    'description' =>  __( 'Where are these Advertisement Areas? <a href="'.get_bloginfo('template_directory').'/images/adblocks.jpg" target="_blank"> Click to see where are these AD blocks?</a> ', 'mm' ),

	    'priority'    => 50,

	) );



    // Ad 1 control 

        $wp_customize->add_setting( 'ad_1_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_1_on_off', array(

            'label'   => 'Ad # 1',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 1,        

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 1 Box

			class m3_ad_1_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 1 control

		$wp_customize->add_setting('ad_1_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_1_Textarea($wp_customize, 'ad_1_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_1_code',

			'priority' => 2,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));

 



 

    // Ad 2 control

        $wp_customize->add_setting( 'ad_2_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_2_on_off', array(

            'label'   => 'Ad # 2',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 3,

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 2 Box

			class m3_ad_2_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 2 control

		$wp_customize->add_setting('ad_2_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_2_Textarea($wp_customize, 'ad_2_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_2_code',

			'priority' => 4,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));

 

 

 

    // Ad 3 control

        $wp_customize->add_setting( 'ad_3_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_3_on_off', array(

            'label'   => 'Ad # 3',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 5,

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 3 Box

			class m3_ad_3_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 3 control

		$wp_customize->add_setting('ad_3_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_3_Textarea($wp_customize, 'ad_3_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_3_code',

			'priority' => 6,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));

 





    // Ad 4 control

        $wp_customize->add_setting( 'ad_4_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_4_on_off', array(

            'label'   => 'Ad # 4',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 7,

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 4 Box

			class m3_ad_4_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 4 control

		$wp_customize->add_setting('ad_4_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_4_Textarea($wp_customize, 'ad_4_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_4_code',

			'priority' => 8,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));



    // Ad 5 control

        $wp_customize->add_setting( 'ad_5_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_5_on_off', array(

            'label'   => 'Ad # 5',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 9,

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 5 Box

			class m3_ad_5_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 5 control

		$wp_customize->add_setting('ad_5_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_5_Textarea($wp_customize, 'ad_5_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_5_code',

			'priority' => 10,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));



    // Ad 6 control

        $wp_customize->add_setting( 'ad_6_on_off', array(

            'default'        => '2',

        ) );



        $wp_customize->add_control( 'ad_6_on_off', array(

            'label'   => 'Ad # 6',

            'section' => 'ad_section',

            'type'    => 'radio',

            'priority' => 11,

            'choices' => array(

            	'1'   => 'Show', 

            	'2'   => 'Hide',

            	),

        ) );

		// Advertisement 6 Box

			class m3_ad_6_Textarea extends WP_Customize_Control {

				public $type = 'textarea';

				public $extra = '';

				public function render_content() {

			?>

<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>

  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>

</label>

<?php

				}

			}

 		// Advertisement 6 control

		$wp_customize->add_setting('ad_6_code', array('default' => '',));

		$wp_customize->add_control(new m3_ad_6_Textarea($wp_customize, 'ad_6_code', array(

			'section' => 'ad_section',

			'settings' => 'ad_6_code',

			'priority' => 12,

			'extra' => __( 'Paste your Advertisement code ', 'mm' ),

		)));





    // Ad 7 control
        $wp_customize->add_setting( 'ad_7_on_off', array(
            'default'        => '2',
        ) );
        $wp_customize->add_control( 'ad_7_on_off', array(
            'label'   => 'Ad # 7',
            'section' => 'ad_section',
            'type'    => 'radio',
            'priority' => 13,
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        // Advertisement 7 Box
            class m3_ad_7_Textarea extends WP_Customize_Control {
                public $type = 'textarea';
                public $extra = '';
                public function render_content() {
            ?>
<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>
  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>
<?php }
            }
        // Advertisement 7 control
        $wp_customize->add_setting('ad_7_code', array('default' => '',));
        $wp_customize->add_control(new m3_ad_7_Textarea($wp_customize, 'ad_7_code', array(
            'section' => 'ad_section',
            'settings' => 'ad_7_code',
            'priority' => 14,

            'extra' => __( 'Paste your Advertisement code ', 'mm' ),
        )));






    // Ad 8 control
        $wp_customize->add_setting( 'ad_8_on_off', array(
            'default'        => '2',
        ) );
        $wp_customize->add_control( 'ad_8_on_off', array(
            'label'   => 'Ad #8',
            'section' => 'ad_section',
            'type'    => 'radio',
            'priority' => 15,
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        // Advertisement 8 Box
            class m3_ad_8_Textarea extends WP_Customize_Control {
                public $type = 'textarea';
                public $extra = '';
                public function render_content() {
            ?>
<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>
  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>
<?php }
            }
        // Advertisement 8 control
        $wp_customize->add_setting('ad_8_code', array('default' => '',));
        $wp_customize->add_control(new m3_ad_8_Textarea($wp_customize, 'ad_8_code', array(
            'section' => 'ad_section',
            'settings' => 'ad_8_code',
            'priority' => 16,

            'extra' => __( 'Paste your Advertisement code ', 'mm' ),
        )));





    // Ad9 control
        $wp_customize->add_setting( 'ad_9_on_off', array(
            'default'        => '2',
        ) );
        $wp_customize->add_control( 'ad_9_on_off', array(
            'label'   => 'Ad #9',
            'section' => 'ad_section',
            'type'    => 'radio',
            'priority' => 17,
            'choices' => array(
                '1'   => 'Show', 
                '2'   => 'Hide',
                ),
        ) );
        // Advertisement 9 Box
            class m3_ad_9_Textarea extends WP_Customize_Control {
                public $type = 'textarea';
                public $extra = '';
                public function render_content() {
            ?>
<label> <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span> <span><?php echo esc_html( $this->extra ); ?></span>
  <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>
<?php }
            }
        // Advertisement 9 control
        $wp_customize->add_setting('ad_9_code', array('default' => '',));
        $wp_customize->add_control(new m3_ad_9_Textarea($wp_customize, 'ad_9_code', array(
            'section' => 'ad_section',
            'settings' => 'ad_9_code',
            'priority' => 18,

            'extra' => __( 'Paste your Advertisement code ', 'mm' ),
        )));



/*  Background Settings  */

	

	// Background Image Upload

	$wp_customize->add_section( 'background_image', array(

	    'title'    => __( 'Background','mm' ),

	    'priority'    => 60, 	    

	) );



    // Color control

    $wp_customize->add_setting( 'bg_color_setting', array(

        'default'        => '#ffffff',

		'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bg_color_setting', array(

        'label'   => 'Background Color',

        'section' => 'background_image',

        'settings'   => 'bg_color_setting', 

    ) ) );



/*  Color Settings  */

	

	// Background Image Upload

	$wp_customize->add_section( 'color_block', array(

	    'title'    => __( 'Colors','mm' ),

	    'priority'    => 70, 	    

	) );



    // Global Color control

    $wp_customize->add_setting( 'global_color', array(

        'default'        => '#3085f8',

    	'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_color', array(

        'label'   => 'Global Color Scheme',

        'section' => 'color_block',

        'settings'   => 'global_color', 

    ) ) );



    // Post Title Color control

    $wp_customize->add_setting( 'post_title_color', array(

        'default'        => '#000000',

		'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_title_color', array(

        'label'   => 'Post Title Color',

        'section' => 'color_block',

        'settings'   => 'post_title_color', 

    ) ) );



    // Content Color control

    $wp_customize->add_setting( 'content_color', array(

        'default'        => '#333',

		'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_color', array(

        'label'   => 'Content Color',

        'section' => 'color_block',

        'settings'   => 'content_color', 

    ) ) );



    

// H1 to H6

    $wp_customize->add_setting( 'test_color', array(

        'default'        => '#000000',

		'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'test', array(

        'label'   => 'Post Heading Color (H1 to H6)',

        'section' => 'color_block',

        'settings'   => 'test_color', 

    ) ) );













    // Sidebar Heading Color control

    $wp_customize->add_setting( 'sidebar_heading_color', array(

        'default'        => '#333333',

		'transport'		=> 'postMessage',

    ) );



    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_heading_color', array(

        'label'   => 'Sidebar Heading',

        'section' => 'color_block',

        'settings'   => 'sidebar_heading_color', 

    ) ) );

 







 /*  Advance Settings  */



	$wp_customize->add_section( 'advance_section' , array(

	    'title'       => __( 'Advance Settings', 'mm' ),

	    'priority'    => 80,

	) );

         // Tag control

        $wp_customize->add_setting( 'og_on_off', array(

            'default'        => '1',

        ) );



        $wp_customize->add_control( 'og_on_off', array(

            'label'   => 'OpenGraph SEO Integration',

            'section' => 'advance_section',

            'type'    => 'radio',

            'choices' => array(

            	'1'   => 'Enable', 

            	'2'   => 'Disable',

            	),







        ) );



}



