<?php

namespace nsept\mousewheel;

use yii\web\AssetBundle;

class MousewheelAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-mousewheel';

    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function registerAssetFiles($view) 
    {
        $this->js[] = 'jquery.mousewheel' . (!YII_DEBUG ? '.min' : '') . '.js';
        parent::registerAssetFiles($view);
    }
}