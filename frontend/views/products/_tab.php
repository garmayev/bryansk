<?php
/**
 *
 * @var \yii\web\View $this
 * @var \common\models\Section $model
 * @var boolean $isActive
 */
?>
<div class="tabs-content__el <?= $isActive ? "active" : "" ?>" data-content="" data-hash="<?= $model->code ?>" data-animate-repeat="">
    <div class="product-cards-list__row">
        <?php
        if ($model->id === 15) {
            $elements = \common\models\Element::find()
                ->joinWith('slides')
                ->joinWith('slides.factor_list')
                ->where(['section_id' => $model->id])
                ->andWhere(['OR', ['factor.suffix' => 'л.с.'], ['factor.suffix' => 'л. с.']])
                ->orderBy(['factor.heading' => SORT_DESC])
                ->all();
        } else {
            $elements = $model->elements;
        }
//        \Yii::error( count($elements) );
        foreach ($elements as $element) {
            $guiness = $element["record_20_mark"] ? "<span class=\"card__tip text-default\">20 лет лидерства</span>" : "";
            echo "
            <div class='product-cards-list__col'>
                <div class='card' itemscope='' itemtype='http://schema.org/ImageObject'>
                    <a href='".\yii\helpers\Url::to(['products/element', "parent" => $model->code, "code" => $element["code"]])."' class='card__inner'>
                        {$guiness}
                        <div class='card__img'>
                        " . \yii\helpers\Html::img($element["image"], [
                                "class" => "image is-lazy isItemProp is-loaded",
                                "data-src" => $element["image"],
                                "itemprop" => "contentUrl",
                                "alt" => "image",
                                "data-ll-status" => "loaded"
                            ]) . "
                        </div>
                        <div class='card__info'>
                            <div class='card__info-wrap'>
                                <div class='card__title h5 animate' data-animate-lines=''
                                     itemprop='name' style='opacity: 1;'>
                                    <div style='display: block; text-align: left; position: relative; transform: translate3d(0px, 0px, 0px); opacity: 1;'>
                                    {$element->name}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>";
        }
        ?>
    </div>
</div>

