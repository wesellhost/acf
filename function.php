add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> __( 'Theme Home Page and General Settings', 'dc_o_page' ),
		'menu_title'	=> __( 'Theme Settings', 'text-domain' ),
		'menu_slug' 	=> 'theme-general-settings',
		'icon_url' => 'dashicons-admin-customizer',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => '2'
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> __( 'Contact Settings', 'text-domain' ),
		'menu_title'	=> __( 'Contact Information', 'text-domain' ),
		'parent_slug'	=> 'theme-general-settings',
		'menu_slug' 	=> 'contact-settings',
		
	));	 

	acf_add_options_sub_page(array(
		'page_title' 	=> __( 'Social Settings', 'text-domain' ),
		'menu_title'	=> __( 'Social Links', 'text-domain' ),
		'parent_slug'	=> 'theme-general-settings',
		'menu_slug' 	=> 'social-settings',
		
	));	

}
}
//**options page end**//
