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
        <img src="image/forma2.png" class="avatar">
    <h1>Registracija</h1>
    <form action="includes/signup.inc.php" method="post">
        <p>Vardas</p>
        <input type="text" name="first" placeholder="Įveskite vardą">
        <p>Pavardė</p>
        <input type="text" name="last" placeholder="Įveskite pavardę">
        <p>Elektronis paštas</p>
        <input type="text" name="email" placeholder="Elektronis paštą">
        <p>Prisijungimo vardas</p>
        <input type="text" name="uid" placeholder="Įveskite prisijungimo vardą">
        <p>Slaptažodis</p>
        <input type="password" name="pwd" placeholder="Įveskite slaptažodį">

        <br><input type="submit" name="submit" value="Registruotis">
        <p><a href="index.php">Jungtis prie paskyros</a></p>
    </form>
    
    </div>
</body>
</html>