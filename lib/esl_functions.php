<?php

function esl_log($var){
	$filename = WP_PLUGIN_DIR.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__))."eslog.txt";
	
	if(is_array($var)){
		$output .= "ARRAY [";
		foreach($var as $key => $array){
			$output .= "'$key' => '$array',";
		}
		$output .= "]";
	}else{
		$output = $var;
	}

	?>
	<script type="text/javascript">
    console.log("<?php echo $output; ?>");
	</script>
	<?php 
	
	// open file
	$fd = fopen($filename, "a");
	// write string
	fwrite($fd, "[" . current_time('mysql') . "] " . $output . "\n");
	// close file
	fclose($fd);
}
