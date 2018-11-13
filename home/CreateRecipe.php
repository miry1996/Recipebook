<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Login</title>
	</head>
	<body>
    <form action="RecipeSave.php" method="GET">
       
			Enter the name of the recipes:<br>
			<input type="text" name="name">
			<br>
			<br>
	  

            Enter the ingredience:<br>
            <input type="text" name="ing">
            <br>
			<br>

            Enter the preperation:<br>
			<input type="text" name="pre">
			<br>
			<br>
            Enter the preperation time:<br>
			<input type="text" name="pret">
			<br>
			<br>
            Enter the backing time:<br>
            <input type="text" name="backt">
            <br>
			<br>
			

            Enter the cooling time:<br>
            <input type="text" name="coolt">
            <br>
			<br>

            Enter the ofensettings:<br>
            <input type="text" name="of">
            <br>
			<br>
            Enter the level:<br>
            <select>
            <option value="easy">easy</option>
            <option value="normal">normal</option>
            <option value="hard">hard</option>
            </select>
            <br>
			<br>
			<input type="submit" value="Create Recipe">
		</form>
</body>
</html>