<?php
namespace jaslin\kindeditor;

class KindEditorAssets extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/jaslin/yii2-kindeditor';
    public $css = [
        'kindeditor/themes/default/default.css',
        'kindeditor/plugins/code/prettify.css',
    ];
    public $js = [
        'kindeditor/kindeditor-all.js',
        'kindeditor/lang/zh-CN.js',
        'kindeditor/plugins/code/prettify.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
