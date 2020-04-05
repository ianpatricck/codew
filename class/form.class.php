<?php

class Form
{
    static public function text($input)
    {
        $text = filter_var($input, FILTER_SANITIZE_STRING);
        return $text;
    }

    static public function email($input)
    {
        $email = filter_var($input, FILTER_VALIDATE_EMAIL);
        return $email;
    }

    static public function int($input)
    {
        $int = filter_var($input, FILTER_VALIDATE_INT);

        if($int) {
            return $int;
        } else {
            return 0;
        }
    }

    static public function float($input)
    {
        $float = filter_var($input, FILTER_VALIDATE_FLOAT);

        if($float) {
            return $float;
        } else {
            return 0;
        }
    }
}

?>
