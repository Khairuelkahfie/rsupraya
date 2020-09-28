<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alamat</title>
</head>

<body>
    <table>
        <?php
        $i = 1;
        foreach ($alamat as $a) {
        ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $a->alamat; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>