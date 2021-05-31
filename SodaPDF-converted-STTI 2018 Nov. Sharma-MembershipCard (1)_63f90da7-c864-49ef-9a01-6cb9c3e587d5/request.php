<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
</head>
<body>
<?php echo form_open('Pdfexample') ?>
 Name: <input type="text" name="name" /><br>
 Email: <input type="text" name= "email"/><br>
 Address: <input type="text" name="address" /><br>
 Phone: <input type="text" name="phone"/><br>
<input type="Submit" Value='submit'/>
<?php echo form_close()?>
</body>
</html>