<?php

$x = $_POST['login'];
$y = $_POST['password'];

class Users
{
    public function __construct($user)
    {
        $this->name = $user['name'];
        $this->surname = $user['surname'];
    }

}
class Admin extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте админ ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте делать всё.';
    }
}

class Client extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте клиент ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте просматривать информацию доступную пользователям.';
    }
}

class Manager extends Users
{
    public function inmsg()
    {
        echo 'Здравствуйте менеджер ' . $this->name . ' ' . $this->surname . '. Вы можете на сайте изменять, удалять и создавать клиентов.';
    }
}
$arr = [
    [
        'login' => 'liza',
        'password' => 'wolf10',
        'name' => 'Liza',
        'surname' => 'Tereshenko',
        'role' => 'admin',
    ],
    [
        'login' => 'berbi',
        'password' => '19ber10',
        'name' => 'Barbi',
        'surname' => 'Girl',
        'role' => 'manager',
    ],
    [
        'login' => 'maha',
        'password' => 'maha12',
        'name' => 'Masha',
        'surname' => 'Zayceva',
        'role' => 'client',
    ],


];
$roles= [
    'admin'=>Admin::class,
    'manager'=>Manager::class,
    'client'=>Client::class,
];
foreach ($arr as $user) {
    if ($x == $user['login'] && $y == $user['password']) {
        $role = new $roles[$user['role']]($user);
        break;
    }
}
if ($role) {
    $role->inmsg();
} else {
    echo 'Неверный логин или пароль.';
}



