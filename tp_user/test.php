<?php
    include './Utilisateur.php';
    include './Admin.php';
    $user1 = new Utilisateur('user1', 'users1');
    $admin = new Admin('admin', 'admin');
    echo '<pre>';
    var_dump($user1, $admin);
    echo '</pre>';
?>