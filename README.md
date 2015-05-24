# Yii2-kindeditor is extention for Yii Framework 2.0

## Installation
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "jaslin/yii2-kindeditor" "dev-master"
```
or add

```json
"jaslin/yii2-kindeditor": "dev-master"
```

to the require section of your application's `composer.json` file.

## Usage Example
### In config
```
'modules'=>[
    'upload' => [
        'class' => 'cabbage\kindeditor\Module',
    ],
]
```
### In view
```
~~~php
echo $form->field($model, 'post')->widget(jaslin\kindeditor\KindEditor::className(), [
    'options' => [
        
    ],
    'configs' => [
    ]
]);
## configs http://kindeditor.net/docs/option.html
~~~
## HighLight Code Example
jaslin\kindeditor\LightAsset::register($this);


