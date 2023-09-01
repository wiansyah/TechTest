<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';
$count = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Loop</title>
</head>
<body>
    <ul>
        <?php while(count($aplikasi) + 1 != $count) : ?>
            <li><?= $aplikasi[$count] ;?></li>
        <?php $count++; endwhile; ?>
    </ul>
</body>
</html>