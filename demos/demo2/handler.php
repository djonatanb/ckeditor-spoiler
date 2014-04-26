<?php
if (isset($_POST['content']))
{
	file_put_contents('content', $_POST['content']);
}
?>
<!DOCTYPE html>
<html>
		<meta charset="utf-8">
		<title>CKEditor Spoiler Demo 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../resources/css/style.css">
		<link rel="stylesheet" href="../resources/css/spoiler.css">
		<script src="../resources/js/jquery-2.1.0.js"></script>
		<script src="../resources/js/ckeditor/ckeditor.js"></script>
		<script src="../resources/js/ckeditor/adapters/jquery.js"></script>
		<script src="../resources/js/spoiler.js"></script>
	<body>
		<h2>Result</h2>
		<?php echo file_get_contents('content'); ?>
	</body>
</html>
