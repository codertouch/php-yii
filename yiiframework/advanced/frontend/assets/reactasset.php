<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 10:42
 */
namespace frontend\assets;

use yii\web\AssetBundle;
use yii\BaseYii;

BaseYii::setAlias('@react','../views/react/build');




class reactasset extends AssetBundle
{
public $basePath='@react';
    public $baseUrl='';
    public $css=[];
    public $js=['@react/react.js','@react/JSXTransformer.js','@react/react.min.js'];
}
