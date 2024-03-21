<?php  
$numero = $_POST ['numero'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Tabuada</h1>
        
    <table>
    <?php 
    for ($i = 1; $i <= 10; $i++) {
    ?>
    <tr>
        <td><?php echo "$numero"; ?></td>
        <td><?php echo "x"; ?></td>
        <td><?php echo "$i"; ?></td>
        <?php $vezes = $numero*$i ?>
        <td><?php echo "="; ?></td>
        <td><?php echo "$vezes"; ?></td>
    </tr>
    <?php 
    }
    ?>
</table>

</main>
</body>
</html>