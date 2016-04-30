<?php

use yii\helpers\Url;

?>

<div id="content">
    <?php foreach ($posts as $post): ?>
        <h1><a href="<?= Url::to(['post/post', 'id' => $post->id]) ?>"><?= $post->title ?></a></h1>
        <?= $post->date_creation ?>
        <br />
        <?= $post->text ?>
        <br />
        <a href="<?= Url::to(['post/post', 'id' => $post->id]) ?>">Читать дальше</a>
        <hr />
    <?php endforeach; ?>
</div>