<?php

use yii\data\ActiveDataProvider;
use yii\web\View;

/**
 * @var View $this
 * @var ActiveDataProvider $dataProvider
 */
$this->title = "Акции";
echo $this->render('_menu');

?>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        setTheme('black');
        window.pagenav = {
            navRecordCount: "2",
            navPageNomer:  "6",
            navPageSize: "6",
            nEndPage: "1"
        };
    })
</script>

<div class="case_reload_area">
    <div class="py-80 wrap-pl-1 wrap-pr-1">
        <?=
            \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'summary' => false,
                'layout' => '{items}',
                'options' => [
                    'tag' => 'div',
                    'class' => 'universal-cards'
                ],
                'itemOptions' => [
                    'tag' => 'div',
                    'class' => 'universal-cards__item'
                ]
            ]);
        ?>
    </div>
</div>

