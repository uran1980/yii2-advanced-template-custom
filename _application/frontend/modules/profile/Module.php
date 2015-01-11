<?php

namespace frontend\modules\profile;

use Yii;

class Module extends \yii\base\Module
{
    public $controllerNamespace = 'frontend\modules\profile\controllers';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * @param string $message
     * @param array $params
     * @param string $language
     * @return string
     */
    public static function t($message, $params = [], $language = null)
    {
        return Yii::t('app-frontend-profile', $message, $params, $language);
    }
}