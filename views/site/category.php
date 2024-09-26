<?php

/** @var yii\web\View $this */
?>
<?php foreach ($category as $cat): ?>
    <a href="<?php echo \yii\helpers\Url::to(['site/about', 'id' => $cat['id']]) ?>">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <p class="card-text"><?php echo $cat['name'] ?></p>
            </div>
        </div
    </a>
<?php endforeach; ?>

<style>
    .card {
        margin-top: 30px;
    }

    a {
        text-decoration: none;
    }
</style>
