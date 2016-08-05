<?php
require 'Model.php';

class User extends Model
{

    public static $table = 'users';

}

echo User::getTableName();