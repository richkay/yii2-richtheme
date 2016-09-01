<?php
namespace rich\theme\materialize;

use yii\web\AssetBundle;

class MaterializeAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/materialize/dist';

    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        'css/materialize.min.css'
    ];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'rich\theme\materialize\MaterializeFontAsset',
    ];
}
