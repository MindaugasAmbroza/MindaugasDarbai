


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilius/style.css">
    <title>Prisijungimas</title>
</head>
<body class="back">
    <div class="loginbox">
       
        <img src="image/forma.png" class="avatar">
    <h1>Prisijungti</h1>
    <form action="includes/login.inc.php" method="post">
        <p>Prisijungimo vardas</p>
            <input type="text" name="uid" placeholder="Įveskite vardą">
        <p>Slaptažodis</p>
            <input type="password" name="pwd" placeholder="Įveskite slaptažodį">
            <br><input type="submit" name="submit" value="Login">
        <p><a href="registracija.php">Neturi paskyros?</a></p>
    </form>
    
    </div>
</body>
</html>