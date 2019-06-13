<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php include 'menu.php';
        ?>
    <nav class="menu">
            <div>
                <ul><a href="login.php"><?php echo $user->getUsername(); ?> </a></ul>
            </div>
            <div>
                <ul><a href="includes/logout.php">Cerrar sesión</a></ul>
            </div>
    </nav>
    <?php
        include 'mascotas.php';
    ?>
</body>
</html>