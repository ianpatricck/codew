<?php

class Form
{
    static public function text($input)
    {
        $text = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
        return $text;
    }

    static public function email($input)
    {
        $text = filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($text, FILTER_VALIDATE_EMAIL);

        if($text == $email) {
            return $email;
        } else {
            return 0;
        }
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
