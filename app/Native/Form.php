<?php

namespace App\Codew;

class Form
{
    public static function text($input)
    {
        $text = filter_var($input, FILTER_SANITIZE_STRING);
        return $text;
    }

    public static function email($input)
    {
        $email = filter_var($input, FILTER_VALIDATE_EMAIL);
        return $email;
    }

    public static function int($input)
    {
        $int = filter_var($input, FILTER_VALIDATE_INT);

        if ($int) {
            return $int;
        } else {
            return 0;
        }
    }

    public static function float($input)
    {
        $float = filter_var($input, FILTER_VALIDATE_FLOAT);

        if ($float) {
            return $float;
        } else {
            return 0;
        }
    }

    public static function upload($input_name, $destiny, $min_bytes, $extensions = [])
    {
        $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
        $filename = $input_name.'.'.$extension;
        $format = substr($filename, -3);

        if (in_array($extension, $extensions) && $extension == $format) {
            $temp = $_FILES[$input_name]['tmp_name'];
            $new_name = uniqid().'.'.$extension;

            if (filesize($temp) < $min_bytes) {
                move_uploaded_file($temp, $destiny.$new_name);
                return $new_name;
            }
        } else {
            return 0;
        }
    }
}

