    <?php require_once ROOT.'/views/layouts/header.php';?>

<section class="index-cntnt">
    <h1>Gallery</h1>
    
    <?php foreach ($gallery as $picture): ?>
    <img src="template/imgs/<?= $picture[1] ?>">
    <?php endforeach;?>
</section>

    </body>
</html>