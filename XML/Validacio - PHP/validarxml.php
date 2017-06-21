<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<?php
		function libxml_display_error($error) 
		{ 
			$return = "<br/>\n"; 
			switch ($error->level) { 
				case LIBXML_ERR_WARNING: 
				$return .= "<b>Warning $error->code</b>: "; 
				break; 
				case LIBXML_ERR_ERROR: 
				$return .= "<b>Error $error->code</b>: "; 
				break; 
				case LIBXML_ERR_FATAL: 
				$return .= "<b>Fatal Error $error->code</b>: "; 
				break; 
			} 
			$return .= trim($error->message); 
			if ($error->file) { 
				$return .= "in <b>$error->file</b>"; 
			} 
			if ($error->line > 0)
				{ $return .= " on line <b>$error->line</b> and column <b> $error->column \n <br>"; }
			return $return; 
		} 
		 
		function libxml_display_errors() { 
			$errors = libxml_get_errors(); 
			foreach ($errors as $error) { 
				print libxml_display_error($error); 
			} 
			libxml_clear_errors(); 
		} 
			 
		// Enable user error handling 
		libxml_use_internal_errors(true);			 
		$xml = new DOMDocument(); 
		$xml->load('./lures.xml');
			 
		if (!$xml->schemaValidate('./lures.xsd')): 
	?>
		<div class="w3-note w3-red w3-padding-16"><b>Errors Found!</b><hr>
		   <?php libxml_display_errors();?></div>

		<?php else: ?>
		   <div class="w3-note w3-green"><b>Validated</b></div> 
		<?php endif ?> 
</body>
</html>

