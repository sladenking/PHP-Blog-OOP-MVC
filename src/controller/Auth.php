<?php

class Auth extends Controller {

    public function doRegister() {

        $user = $_POST;

        $userEntry = $this->model->getUserFromEmail($user['email']);

        $error = array();

        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $error['email_err'] = 'Некорректная почта';
        } 

        if ($userEntry) {
            $error['email_err'] = 'Почта уже существует';
        } 

        if(empty($user['firstname'])){
            $error['name_err'] = 'Введите имя';
        } 

        if(empty($user['lastname'])){
            $error['lastname_err'] = 'Введите фамилию';
        } 

        if(empty($user['password'])){
            $error['password_err'] = 'Введите пароль';
        } elseif(strlen($user['password']) < 6){
            $error['password_err'] = 'Парель должен быть не менее 6 символов';
        }

        if(empty($user['confirm_password'])){
            $error['confirm_password_err'] = 'Подтвердите пароль';
        } else {
            if($user['password'] != $user['confirm_password']){
                $error['confirm_password_err'] = 'Пароли не совпадают';
            }
        }

        if($error) {
            $this->view->error = $error;
            $this->view->formData = $user;

            $this->view->render('auth/register');
        } else {
            Message::add('Вы успешно зарегистрировались и можете войти');
            $this->model->registerUser($user);

            header('Location: ' . URL . 'auth/login');
        }
        
    }

    public function doLogin() {

            $user = $_POST;

            $user['email'] = trim($user['email']);
            $user['password'] = trim($user['password']);

            if(empty($user['email']) || empty($user['password'])) {
                $this->view->email_err = 'Заполните сначала поля';
                return $this->login();
            } 

            $this->model->recordLoginAttempt($user['email']);

            $userEntry = $this->model->loginUser($user);

            if($userEntry && $userEntry['login_attempts'] < MAXIMUM_LOGINS) {
                Session::set('user', $userEntry);
                Session::set('user_image', $userEntry['image']);

                $resetAttempts = $this->model->resetLoginAttempts($user['email']);
                header('Location: ' . URL . 'home');
                return;
            }

            $checkLoginAttempts = $this->model->checkLoginAttempts($user['email']);

            if($checkLoginAttempts >= MAXIMUM_LOGINS) {
                $this->view->email_err = 'Вы были заблокированы';
                return $this->login();
            }

            $this->view->email_err = 'Почта или пароль неправильные';
            $this->login();
    }

    public function logout() {
        Session::remove('user');
        session_destroy();
        header('Location: ' . URL . 'home');
    }


    public function login() {
        $this->view->render('auth/login');
    }

    public function register() {
        $this->view->render('auth/register');
    }
    
    public function index() {
        $this->view->render('auth/register');
    }

}