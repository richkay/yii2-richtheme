<?php

namespace rich\theme\materialize;

use yii\web\AssetBundle;

class MaterializePluginAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/materialize/dist';
    
    /**
     * @var array list of JS files that this bundle contains.
     */
    public $js = [
        'js/materialize.min.js'
    ];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
