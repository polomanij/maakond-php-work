    <?php require_once ROOT.'/views/layouts/header.php';?>

<section class="index-cntnt">
    <table>
        <tr>
            <th>Уезд</th>
            <th>Столица</th>
            <th></th>
        </tr>
    <?php foreach ($states as $state): ?>
        <tr>
            <td><?php echo $state[1]; ?></td>
            <td><?php echo $state[2]; ?></td>
            <td><a href="states/<?= $state[0] ?>">More</a></td>
        </tr>
    <?php endforeach; ?>
    </table>
</section>

    </body>
</html>
