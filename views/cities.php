    <?php require_once ROOT.'/views/layouts/header.php';?>

<section class="index-cntnt">
    <table>
        <tr>
            <th>Город</th>
            <th>Люди</th>
            <th></th>
        </tr>
    <?php foreach ($cities as $city): ?>
        <tr>
            <td><?php echo $city[1]; ?></td>
            <td><?php echo $city[2]; ?></td>
            <td><a href="cities/<?php echo $city[0]; ?>">More</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
</section>

    </body>
</html>
