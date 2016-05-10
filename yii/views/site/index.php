<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My blog';
?>

<?php foreach ($categories as $category): ?>
    <?= Html::a($category->name, ['site/index', 'category_id' => $category->id], ['class' => 'btn btn-primary']) ?>
<?php endforeach; ?>
<hr />

<?php foreach ($allPosts as $post): ?>
    <div>
        <?= $post->title ?> | <?= $post->category->name ?>
        <br />
        <?= $post->date_creation ?>
        <p>
            <?= $post->text ?>
        </p>
    </div>
    <hr />
<?php endforeach; ?>