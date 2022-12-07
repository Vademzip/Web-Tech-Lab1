<?php

namespace App\Providers;

use Illuminate\Auth\GenericUser as GenericUser;
use Illuminate\Contracts\Auth\Authenticatable;
use \Illuminate\Contracts\Auth\UserProvider as UserProvider;
use Illuminate\Support\Facades\DB;
use PDO;

class PDOUserProvider implements UserProvider
{
    public function conn(){
        return DB::connection()->getPdo();
    }

    public function retrieveById($identifier){
       /* $row = $this->conn()->query("SELECT * FROM users WHERE id=".$identifier)->fetch();
        if ($row)
            return $this->getGenericUser($row);*/

        return \App\Models\User::find($identifier);

    }

    public function retrieveByToken($identifier, $token){

    }


    public function updateRememberToken(Authenticatable $user, $token){

    }


    public function retrieveByCredentials(array $credentials){
        //$row= $this->conn()->query("SELECT * FROM users WHERE (login2='".$credentials['login2']."' OR email = '".$credentials['login2']."' OR phoneNumber = '".$credentials['login2']."') AND password2='".$credentials['password2']."'")->fetch();



        $sth = $this->conn()->prepare('SELECT * FROM users WHERE (login2 = :login OR email = :email OR phoneNumber = :phone) AND password2 = :password');
        $sth->bindParam(':login', $credentials['login2'], PDO::PARAM_STR);
        $sth->bindParam(':email', $credentials['login2'], PDO::PARAM_STR);
        $sth->bindParam(':phone', $credentials['login2'], PDO::PARAM_STR);
        $sth->bindParam(':password', $credentials['password2'], PDO::PARAM_STR);
        $sth->execute();
        $row = $sth->fetch();

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
        return $user->password2 == $credentials['password2'];
    }


}
