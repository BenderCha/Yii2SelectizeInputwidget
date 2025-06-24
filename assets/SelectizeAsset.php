<?php

namespace bendercha\selectize;

use yii\web\AssetBundle;

class SelectizeAsset extends AssetBundle
{
    public $css = [
        'https://cdn.jsdelivr.net/npm/selectize@0.13.6/dist/css/selectize.default.css',
    ];

    public $js = [
        'https://cdn.jsdelivr.net/npm/selectize@0.13.6/dist/js/standalone/selectize.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
