<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom="zaag";
    $pre="salma";
    ?>
<table border="3">
    <tr><th>NOM</th><th>PRENOM</th></tr>
    <tr><td><?php echo $nom; ?></td><<td><?php echo $pre; ?></td></tr>
</table>
<?php $info=$nom.$pre;
?>
<script>alert("<?=$info ?>")</script>
</body>
</html>

