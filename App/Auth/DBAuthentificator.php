<?php

namespace App\Auth;

use App\Models\User;

class DBAuthentificator extends DummyAuthenticator
{
    function login($login, $password): bool
    {
        $user = User::getOneByLogin($login);
        if (!$user) return false;
        $_SESSION['user'] = $user->getName();
        $_SESSION['id'] = $user->getId();
        return true;
    }

    function getLoggedUserId(): mixed
    {
       return $_SESSION['id'];
    }

}