<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/mystyle.css', //add mystyle.css
        'css/myadminstyle.css', //add myadminstyle.css for Admin-panel
        'css/font-awesome.css',  //add font-awesome icons /web/css/font-awesome.css + his working files locate in: /web/fonts
    ];
    public $js = [
        'js/myjs.js',  //add myjs.js
        'js/jquery-2.2.3.js', //add jQuery's library
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
