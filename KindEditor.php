<?php
namespace jaslin\kindeditor;

use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
class KindEditor extends \yii\widgets\InputWidget
{
    public $id = '';
    public $configs = [];
    public function init()
    {
        KindEditorAssets::register($this->view);
        
        $this->configs['allowFileManager'] = ArrayHelper::getValue($this->configs, 'allowFileManager', false);
        $this->configs['width'] = ArrayHelper::getValue($this->configs, 'width', "100%");
        $this->configs['minHeight'] = ArrayHelper::getValue($this->configs, 'minHeight', "400px");
        $this->configs['resizeType'] = ArrayHelper::getValue($this->configs, 'resizeType', "1");
        $this->configs['uploadJson'] = \Yii::$app->urlManager->createUrl(ArrayHelper::getValue($this->configs, 'uploadJson', ['/upload']));
        $this->configs['extraFileUploadParams'] = [\Yii::$app->request->csrfParam=>\Yii::$app->request->csrfToken];
        $this->configs['uploadButtonExtraParams'] = [\Yii::$app->request->csrfParam=>\Yii::$app->request->csrfToken];
    }
    
    public function run()
    {
        if(empty($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        

        echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        
        if(empty($this->configs)) {
            $this->getView()->registerJs('KindEditor.ready(function(K){K.create("#'.$this->options['id'].'");prettyPrint();});');
        } else {
            $this->getView()->registerJs('KindEditor.ready(function(K){K.create("#'.$this->options['id'].'", '.Json::encode($this->configs).');prettyPrint();});');
        }
    }
}
