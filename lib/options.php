<?php

add_action('admin_menu', 'create_esl_options_page');

function create_esl_options_page() {
  add_options_page('Logger', 'Logger', 'administrator', __FILE__, 'esl_options_page');
}

function esl_options_page() {
?>
  <div id="theme-options-wrap">
    <div class="icon32" id="icon-tools"> <br /> </div>
    <h2>PLUGIN NAME Settings</h2>
    <p><?php _e('View the Log Here'); ?></p>
	<?php esl_print_log(); ?>
    <p>Plugin Created By <a href="http://www.electricstudio.co.uk/2011/05/wordpress-auto-post-expire-plugin/">Electric Studio</a></p>
  </div>
<?php
}

function esl_print_log(){
	$filename = WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__))."eslog.txt";

	// Get a file into an array.
	$lines = file($filename);

	// Loop through our array, show HTML source as HTML source; and line numbers too.
	foreach ($lines as $line_num => $line) {
	    echo htmlspecialchars($line) . "<br />\n";
	}
}

?>
