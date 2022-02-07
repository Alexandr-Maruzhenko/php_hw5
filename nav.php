<div class="logo-menu-container">
    <div class="logo">
        <p>Classic</p>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="/">Home</a></li>
            <?php require_once './pagesData.php';
            if (!empty($pagesData)):
                foreach ($pagesData as $id => $page): ?>
                    <li><a href="/page.php?id=<?php echo $id ?>"><?php echo $page['name'] ?></a></li>
                <?php endforeach;
            endif; ?>
        </ul>
    </nav>
</div>

