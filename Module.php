<?php

namespace jaslin\kindeditor;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'jaslin\kindeditor\controllers';

    public $type = 'file';

    // choose which database to use
    public $db = 'db';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
