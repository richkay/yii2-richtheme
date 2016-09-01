<?php
namespace rich\theme\materialize;

use yii\web\AssetBundle;

class LayoutAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@vendor/rich/yii2-richtheme/materialize';

    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        'css/layout.css',
        'css/ui.css',
        'css/theme.css',
    ];
	
	public $js = [
        'js/layout.js'
    ];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'rich\theme\materialize\MaterializePluginAsset',
    ];
}
