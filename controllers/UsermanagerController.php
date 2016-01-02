<?php

namespace shreenu\usermanagement\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * This is just an example.
 */
class UsermanagerController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    
    
    public function actionIndex(){
        
    }
    
}
