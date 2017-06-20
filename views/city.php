    <?php require_once ROOT.'/views/layouts/header.php';?>

<section class="onestate-cntnt">
    <h1><?php echo $city['city'] ?></h1>
    <p>Люди: <?= $city['people'] ?></p>
    <p>Уезд: <?= $state['name_maak'] ?></p>
    <p>Описание уезда: <?= $state['description'] ?></p>
</section>

    </body>
</html>
