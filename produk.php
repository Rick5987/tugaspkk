<?php
 include('mentahan.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Pkk</title>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td><a href="index.php">PKK</a></td>
                <td align="right"><a href="produk.php">produk</a></td>
            </tr>
        </table>
        <hr>
        <h3>Kelompok</h3>
    <ul>
    <?php
        foreach ($data as $d){
        ?>
        <li><?= $d ?></li>
    <?php  } ?>
</ul>
<hr>
<?= calculation(); ?>
    </body>
</html