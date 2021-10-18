<!DOCTYPE html>
<html lang="en">
    <meta name="author" content="Adhitya PPT 2172024">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="submit.php" name="FormInput" method="POST">   
        <table align="center">
            <caption><b>Form Input</b></caption>
            <tr><td>Nama</td><td>:</td><td><input type="text" name="name" id="name"><br></td></tr>
            <tr><td>Email</td><td>:</td><td><input type="email" name="email" id="email"><br></td></tr>
            <tr><td>Phone number</td><td>:</td><td><input type="text" name="noHP" id="noHP"><br></td></tr>
            <tr><td>Hobby</td><td>:</td><td><input type="text" name="hoby" id="hoby"><br></td></tr>
            <tr><td>Description</td><td>:</td><td><textarea name="desc" id="desc" cols="30" rows="10"></textarea></td></tr>
            <tr><td colspan="3" align="center"><input type="submit" value="Submit"><input type="reset" value="Reset">
</table>
</form>
</body>
</html>