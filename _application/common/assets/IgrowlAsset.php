<?php

namespace common\assets;

/**
 * @see http://catc.github.io/iGrowl/
 */
class IgrowlAsset extends AssetBundle
{
    public $sourcePath = '@common/web/bower/iGrowl/dist';
    public $css = [
        'css/igrowl.min.css',
//        'css/fonts/vicons.css',
        'css/fonts/steadysets.css',
//        'css/fonts/linecons.css',
//        'css/fonts/feather.css',
    ];
    public $js = [
        'js/igrowl.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'common\assets\AnimateCssAsset',
    ];
}
