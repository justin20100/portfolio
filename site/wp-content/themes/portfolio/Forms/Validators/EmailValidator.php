<?php

class EmailValidator extends BaseValidator
{
    protected function handle($value) : ?string
    {
        if(! filter_var($value, FILTER_VALIDATE_EMAIL))
        {
            return __('Please provide a valid email address.');
        }

        return null;
    }
}
