<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

?>
<?php foreach ($catalog as $cat): ?>
    <a href="../../web/file/<?php echo $cat['file'] ?>">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><?php echo $cat['name'] ?></p>
            </div>
        </div
    </a>
<?php endforeach; ?>
