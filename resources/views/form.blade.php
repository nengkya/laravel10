<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
    <form action="/form/process">
	<input type='hidden' name='_token' value='<?php echo csrf_token() ?>'>
	Name :
	<input type='text' name='name'>
	Address :
	<input type='text' name='address'>
	<input type='submit' value='Ok'>
    </form>
</body>
</html>
