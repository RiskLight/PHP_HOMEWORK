<?php
namespace registration;
use base\BaseValidator;

require('BaseValidator.php');

interface RegistrationInterface
{
    public function validateForm();

    public function validateEmail();

    public function validatePasswordTwo();

    public function validateImage();

    public function movingImage();

}

class UserValidator extends BaseValidator implements RegistrationInterface
{
    private $data;
    private array $errors = [];
    private array $valid_type = ['jpg', 'jpeg', 'png'];
    private static array $fields = ['username', 'email', 'password', 'passwordTwo']; //добавил вот это

    public function __construct($post_data)
    {
        $this->data = $post_data;
    }

    public function validateForm(): array
    {
        foreach (self::$fields as $field) {
            if (!array_key_exists($field, $this->data)) {
                trigger_error("'$field' is not present in the data");
            }
        }

        $this->validateUsername();
        $this->validateEmail();
        $this->validatePassword();
        $this->validatePasswordTwo();
        $this->validateImage();
        $this->movingImage();
        return $this->errors;

    }

    public function validateUsername()
    {

        $val = trim($this->data['username']);

        if (empty($val)) {
            $this->addError('username', 'username cannot be empty');
        } else if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
            $this->addError('username', 'username must be 6-12 chars & alphanumeric');
        }

    }

    public function validateEmail()
    {

        $val = trim($this->data['email']);

        if (empty($val)) {
            $this->addError('email', 'email cannot be empty');
        } elseif (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
            $this->addError('email', 'email must be a valid email address');
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

    public function validatePasswordTwo()
    {
        // TODO: Implement validatePasswordTwo() method.
        $val = trim($this->data['passwordTwo']);
        $valTwo = trim($this->data['password']);
        if (empty($val)) {
            $this->addError('passwordTwo', 'repeat password cannot be empty');
        } elseif ($val !== $valTwo) {
            $this->addError('passwordTwo', 'repeat password must be identical to the password');
        }
    }

    public function validateImage()
    {
        // TODO: Implement validateImage() method.
        $val = $_FILES['image']['name'];
        if (empty($val)) {
            $this->addError('image', 'upload image');
        } else {
            $ext = explode('.', $val);
            $ext = end($ext);
            $valid_type = $this->valid_type;
            if (!in_array($ext, $valid_type, true)) {
                $this->addError('image', 'image must be jpg, png or jpeg');
            }
        }

    }

    public function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }

    public function movingImage()
    {
        if (empty($this->errors)) {
            $path = $_FILES['image']['tmp_name'];
            $pathS = $_FILES['image']['name'];
            $new_path = __DIR__ . '../../uploads/' . $pathS;
            move_uploaded_file($path, $new_path);
            echo 'Вы успешно зарегистрировались';
        }
    }

}