<?php

?>

<asdie class="shadow sidebar">
    <?= \yii\bootstrap5\Nav::widget([
        'options' => ['class' => 'd-flex flex-column nav-pills shadow'],
        'items' => [
            [
                'label' => 'Dashboard',
                'url' => ['/site/index']
            ],
            [
                'label' => 'Videos',
                'url' => ['/video/index']
            ]
        ]
    ]) ?>
</asdie>

<!--<div class="list-group">-->
<!--    <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>-->
<!---->
<!---->
<!--    <a href="#" class="list-group-item list-group-item-action">This is a primary list group item</a>-->
<!--</div>-->
