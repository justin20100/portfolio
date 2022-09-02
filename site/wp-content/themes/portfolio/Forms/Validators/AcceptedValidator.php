<?php

class AcceptedValidator extends BaseValidator
{
    protected function handle($value) : ?string
    {
        if($value !== '1') 
        {
            return __('Please check the box above to continue.','dw');
        }

        return null;
    }
}
