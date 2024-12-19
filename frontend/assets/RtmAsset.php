<?php

namespace frontend\assets;

use yii\web\View;

class RtmAsset extends \yii\web\AssetBundle
{
    public $js = [
        "/js/script.js",
/*        "/js/jquery-2.2.4.min.js",
        "/bitrix/js/main/core/core.min.js",
        "/bitrix/js/pull/protobuf/protobuf.min.js",
        "/bitrix/js/pull/protobuf/model.min.js",
        "/bitrix/js/rest/client/rest.client.min.js",
        "/bitrix/js/pull/client/pull.client.min.js",
        "/bitrix/js/main/pageobject/pageobject.min.js",
        "/bitrix/js/main/core/core_window.min.js",
        "/dist/prog/app.js",
        "/js/stycky-kit.js",*/
        "/local/templates/.default/script.js",
        "/local/templates/.default/custom.js",
        "/local/templates/.default/components/uplab.production/form.univers/contact-us/script.js",
        "/local/templates/.default/components/uplab.production/form.univers/cooperation-with-us/script.js",
        "/local/templates/.default/components/wf/form.univers/form-subscribe/script.js",
        "/local/templates/.default/components/wf/form.univers/form-invite/script.js",
        "/local/components/uplab.production/region.selector/templates/default/script.js",
        "/local/components/bitrix/news.list/templates/dealers_where_card/script.js",

        "/dist/js/vendors~index.chunk.js?16116541111101440",
        "/dist/js/index.js",
        "/dist/js/script.js",
        "/dist/js/components.js",
        "/dist/js/jquery.inputmask.js",
        "/dist/js/owl.carousel.js",

        "//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
    ];

    public $css = [
        "/bitrix/js/ui/design-tokens/dist/ui.design-tokens.min.css",
        "/bitrix/panel/main/popup.min.css",
        "/local/components/bitrix/news.list/templates/dealers_where_card/style.css",
        "/dist/css/vendors~index.chunk.css",
        "/dist/css/owl.carousel.min.css",
        "/dist/css/owl.theme.default.min.css",
        "/dist/css/index.css",
        "/dist/css/components.css",
        "/dist/css/custom.css",
        "/local/templates/.default/css/custom.css",
        "/dist/prog/app.css",
        "/local/templates/.default/css/form.css",
        "/local/templates/main/styles.css",
        "/local/templates/main/template_styles.css",
        "/local/templates/main/template_styles.css",
        "/css/custom.css",
        "/redizine/style.css",
        // "/css/user-main.css",
    ];

    public $depends = [
        \yii\web\JqueryAsset::class,
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];

    public function init()
    {
        parent::init();

        \Yii::$app->assetManager->bundles['yii\\bootstrap\\BootstrapAsset'] = [
            'css' => [],
            'js' => [],
        ];
    }
}
