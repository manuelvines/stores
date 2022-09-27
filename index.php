<?php
/**
 * Plugin Name: Directorio de Tiendas
 */

 require "install.php";
 require "uninstall.php";
 require "enqueue.php";


register_activation_hook(__FILE__,'created_table_store');
register_deactivation_hook(__FILE__,'drop_table_store');


function createStore()
{
    $msg = array(
        "mensaje" => "he llegado aquí"
    );
    wp_send_json($msg);
}

add_action('wp_ajax_create-store', 'createStore');


function wporg_options_page_html() {
    ?>
    <div class="wrap">

    <h2>we</h2>

    <form id="crud_stores_form_create"  action="" method="POST">

       <input type="text" name="name" id="name">

       <input type="submit" value="ENVIAR">

    </form>
     <!-- 
     <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
      <form action="<?php menu_page_url( 'wporg' ) ?>" method="GET">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( __( 'Save Settings', 'textdomain' ) );
        ?>
      </form>
     -->
    </div>
    <?php
}


add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
	$hookname = add_menu_page(
		'WPOrg',
		'WPOrg Options',
		'manage_options',
		'wporg',
		'wporg_options_page_html',
		plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
		20
	);

	add_action( 'load-' . $hookname, 'wporg_options_page_submit' );
}

function wporg_options_page_submit(){

    echo "ay perro";

}

function function_shortcode(){
    /*
    require plugin_dir_path(__FILE__) ."/public/assets/views/store/crud.php";
    return  $view_crud_store; 
    */

	$id = get_the_ID();
    return $id;
}
add_shortcode('mi_shortcode','function_shortcode');


?>