<!DOCTYPE html>
<!--
Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
-->
<?php 
print_r($_POST);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<script src="ckeditor.js"></script>
	<script src="js/sample.js"></script>
	<link rel="stylesheet" href="css/samples.css">
	<link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css">
	<style>
		.adjoined-bottom:before{
			background: white;
		}
	</style>
</head>
<body>
<main>
	<form method="post">
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<textarea id="editor" name="editor">
					
				</textarea>
			</div>
		</div>
	</div>
<input type="submit" name="hello">
</form>
</main>

<script>
	initSample();
	
</script>

</body>
</html>
