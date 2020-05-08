<?php

namespace frontend\modules\forum;
use Yii;
class Module extends \yii\base\Module
{
public function init()
{
parent::init();

$this->params['foo'] = 'bar';
// ...  other initialization code ...

    // initialize the module with the configuration loaded from config.php

    \Yii::configure($this, require __DIR__ . '/config.php');


    if (Yii::$app instanceof \yii\console\Application) {
        $this->controllerNamespace = 'frontend\modules\forum\commands';
    }
}
}
