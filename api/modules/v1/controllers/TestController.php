<?php

namespace api\modules\v1\controllers;

use Yii;
use api\components\RestController;

class TestController extends RestController
{
    public function actionTest()
    {
        return "Hello from TestController (Module v1)";
    }
}

