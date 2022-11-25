<?php

namespace App\Providers;

use Illuminate\Auth\GenericUser as GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Contracts\Auth\UserProvider as UserProvider;
use Illuminate\Support\Facades\DB;

class PDOUserProvider implements UserProvider
{
    public function conn(){
        return DB::connection()->getPdo();
    }

    public function retrieveById($identifier){
        $row= $this->conn()->query("SELECT * FROM users WHERE id=".$identifier)->fetch();
        return $row? true: false;
    }

    public function retrieveByToken($identifier, $token){

    }


    public function updateRememberToken(Authenticatable $user, $token){

    }


    public function retrieveByCredentials(array $credentials){
        $row= $this->conn()->query("SELECT * FROM users WHERE (login2='".$credentials['login2']."' OR email = '".$credentials['login2']."' OR phoneNumber = '".$credentials['login2']."') AND password2='".$credentials['password2']."'")->fetch();
        if ($row) {
            return $this->getGenericUser($row);
        }
    }

        protected function getGenericUser($user)
        {
            if (! is_null($user)) {
                return new GenericUser((array) $user);
            }
        }



    public function validateCredentials(Authenticatable $user, array $credentials){
        $row= $this->conn()->query("SELECT * FROM users WHERE (login2='".$credentials['login2']."' OR email = '".$credentials['login2']."' OR phoneNumber = '".$credentials['login2']."') AND password2='".$credentials['password2']."'")->fetch();
        return $row? 1: 0;
    }


}
