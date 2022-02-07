<?php
require_once './header.php';
require_once './nav.php';
require_once './pagesData.php';
?>

<?php if (!empty($_GET['id']) && !empty($pagesData)):
    $namePage = $pagesData[$_GET['id']]
    ?>

    <h1><?php echo $namePage['title'] ?></h1>
    <p><?php echo $namePage['content'] ?></p>


<?php endif;

require_once './footer.php';
?>
