<?php 
session_start();
if(!isset($_SESSION['id'])) {
    $_SESSION['id'] = 'dato no guardado';
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que hay</title>
</head>
<body>
    <h1>Hello</h1>
    <?php echo '<p>' . $_SESSION["id"] . '</p>';?>
</body>
</html>