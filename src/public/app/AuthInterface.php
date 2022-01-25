<?php

namespace auth;

use base\BaseValidator;

require('BaseValidator.php');

interface AuthInterface
{
    public function __construct($post_data);

    public function validateForm();

    public function addError($key, $val);

    public function checked();
}

class ValidationForAuthorization extends BaseValidator implements AuthInterface
{
    private $data;
    private array $errors = [];
    private static array $fields = ['login', 'password'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm(): array
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists(($field), $this->data)) {
                trigger_error("'$field' is not present in the data");
            }
        }

        $this->validateUsername();
        $this->validatePassword();
        $this->checked();
        return $this->errors;
    }

    public function validateUsername()
    {
        // TODO: Implement validateUsername() method.
        $val = trim($this->data['login']);

        if (empty($val)) {
            $this->addError('login', 'username cannot be empty');
        } else if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
            $this->addError('login', 'username must be 6-12 chars & alphanumeric');
        }
    }

    public function validatePassword()
    {
        // TODO: Implement validatePassword() method.
        $val = trim($this->data['password']);
        if (empty($val)) {
            $this->addError('password', 'password cannot be empty');
        } elseif (!preg_match('/^(?=.*[az])(?=.*[AZ])(?=.*\d)[a-zA-Z\d]{8,}$/', $val)) {
            $this->addError('password', 'The password must be at least 8 characters, contain at least one number and at least one capital letter.');
        }
    }

    public function checked()
    {
        if (empty($_POST['shit'])) {
            echo 'Не запомню';
        } elseif ($_POST['shit'] === 'on') {
            echo 'Запомню';
        } else {
            $this->addError('shit', 'Это вообще не чекбокс');
        }

    }

    public function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}