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
class EmbalajeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

       'themes/embalaje/css/animate.css',
       'themes/embalaje/css/simple-line-icons.css',
       'themes/embalaje/css/font-awesome.min.css',
       //'themes/embalaje/css/autocar.css',
       'themes/embalaje/css/bmosolucionescss.css',
       'themes/embalaje/css/assets.min.css',
       'themes/embalaje/css/style2.css',
       'themes/embalaje/css/style.css',
       'themes/embalaje/css/styles.css',
       'themes/embalaje/css/settings.css',
         
         
        
             



    ];
    public $js = [
    'themes/embalaje/js/bootstrap.min.js',

    //'themes/embalaje/js/jquery.themepunch.revolution.min.js',
    //'themes/embalaje/js/jquery.themepunch.tools.min.js',
     
    //'themes/embalaje/js/plugins.js',
    //'themes/embalaje/js/custom.js',
    //'themes/embalaje/js/jquery-1.11.1.min.js',
    //'themes/embalaje/js/jquery.gmap3.min.js',
   
    //'themes/embalaje/js/website.assets.min.js',

    //'themes/embalaje/js/website.min.js',


    		'themes/embalaje/js/BMOFunctions.js',
   

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
