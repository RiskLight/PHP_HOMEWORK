<?php

namespace base;
abstract class BaseValidator
{
    abstract public function __construct($post_data);

    abstract public function validateUsername();

    abstract public function validatePassword();

    abstract public function addError($key, $val);
}