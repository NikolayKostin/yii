<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=books',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

//file yii.bat PHP_COMMAND=C://xampp/php/php.exe
//yii migrate/create create_user_table --fields=login:string(255):notNull,pass:string(32):notNull,first_name:string(255),last_name:string(255)
//yii migrate
//yii migrate/create create_review_table --fields=