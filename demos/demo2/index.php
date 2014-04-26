<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CKEditor Spoiler Demo 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../resources/css/style.css">
		<link rel="stylesheet" href="../resources/css/spoiler.css">
		<script src="../resources/js/jquery-2.1.0.js"></script>
		<script src="../resources/js/ckeditor/ckeditor.js"></script>
		<script src="../resources/js/ckeditor/adapters/jquery.js"></script>
		<script src="../resources/js/spoiler.js"></script>
		<script>
		$(function() {
			$('#editor').ckeditor();
		});
		</script>
	</head>
	<body>
		<h2>CKEditor Spoiler Demo 2</h2>
		<form action="handler.php" method="post">
			<textarea id="editor" name="content"></textarea>
			<br><button type="submit">Submit</button>
		</form>
	</body>
</html>