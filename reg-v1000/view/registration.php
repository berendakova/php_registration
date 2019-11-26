<?php


use UserRegistration\Entity\User;
use UserRegistration\Repository\UserRepository;

require_once '../vendor/autoload.php';

class RegistrationView

{
    public function showForm()
    {
        require_once "parts/header.php";
        require_once "parts/form.php";
        require_once "parts/footer.php";
    }

    public static function checkExistingUser($email)
    {
        $path = '/var/www/reg-v1000/data/user.csv';
        $users = array();

        if (($file = fopen($path, 'r')) !== false) {
            while (($row = fgetcsv($file, 1000)) !== false) {
                $users[] = $row;
            }
            fclose($file);
        }

//        print_r($users);

        for ($i = 0; $i < count($users); $i++) {
            for ($j = 0; $j <= 6; $j++) {
                var_dump($users[$i][$j]);
                if ($users[$i][$j] === $email) {
                    return true;
                }
            }
        }

        return false;
    }
}


if ($_POST) {
   echo 12;

    $errors = [];
    $email = $_POST['user_email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        array_push($errors, "not correct email");
    }
    $age = $_POST['user_age'];
    if (!is_numeric($age)) {
        array_push($errors, "not correct age");
    }
    if (!($_POST['user_password'] == $_POST['user_password_replay'])) {
        array_push($errors, "passwords do not match");
    }

    $existingUser = RegistrationView::checkExistingUser($_POST['user_email']);
    var_dump($existingUser);
    if ($existingUser) {
        $errors[] = 'repeat user';
//        array_push($errors, "repeat user");
    }
    echo 34;
    var_dump($errors);
// add user if no errors
    if (count($errors) === 0) {
        echo 1235;
        $user = new User();
        echo 11;
        $user->setUserName($_POST['user_name']);
        echo 111;
        $user->setUserEmail($_POST['user_email']);
        $user->setUserPassword($_POST['user_password']);
        $user->setUserAge($_POST['user_age']);
        $user->setCountry($_POST['country']);
        $user->setUserBio($_POST['user_bio']);
        echo "puk";
        UserRepository::registrationUser($user);
        echo "AAA";
    }


} else {

    $registration = new RegistrationView();

    $registration->showForm();
}

