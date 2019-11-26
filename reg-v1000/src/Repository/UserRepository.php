<?php

namespace UserRegistration\Repository;
use UserRegistration\Entity\User;
/*require_once '../../vendor/autoload.php';*/

class UserRepository
{
    private const USER_FILE = '/var/www/reg-v1000/data/user.csv';

    public static function registrationUser(User $user)
    {
        echo 123;
        $list = array(

            $user->getUserName(),
            $user->getUserEmail(),
            $user->getUserPassword(),
            $user->getUserAge(),
            $user->getCountry(),
            $user->getUserBio()

        );

        print_r($list);

        $fp = fopen(self::USER_FILE, 'a');

        fputcsv($fp, $list);

        fclose($fp);
    }

    public static function getAllUsers()
    {
        $users = [];
        $fileContents = file_get_contents($_SERVER['DOCUMENT_ROOT'] . self::USERS_FILE);
        $rows = explode("\n", $fileContents);
        foreach ($rows as $row) {
            $data = explode(',', $row);
            $users[] = new User(trim($data[0]));
        }
        return $users;
    }

}