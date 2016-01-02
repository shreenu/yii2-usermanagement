Yii2 User Management
==============================
Yii2 User Management

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require shreenu/yii2-usermanagement
```

or add

```
"shreenu/yii2-usermanagement": "*"
```

to the require section of your `composer.json` file.

and run
```
composer update
```

Usage
-----

change your configuration file.

```
'components' => [
    'user'=> [
                'identityClass' => \shreenu\usermanagement\models\User::className(),
                'enableAutoLogin' => true,
    ],
]
```


```
'modules'=> [
    'usermanagement'=>[
        'class' => \shreenu\usermanagement\usermanagementModule::className(),
    ],
],
```


Login and Logout URLs:
----------------------

Change your menu code

```
Yii::$app->user->isGuest ?
['label' => 'Login', 'url' => ['/usermanagement/user/login']] :
[
    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
    'url' => ['/usermanagement/user/logout'],
    'linkOptions' => ['data-method' => 'post']
],
```