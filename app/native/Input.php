<?php

namespace App\Native;

class Input
{
    public static function text($inputName)
    {
        $text = filter_var($inputName, FILTER_SANITIZE_STRING);
        return $text;
    }

    public static function email($inputName)
    {
        $email = filter_var($inputName, FILTER_VALIDATE_EMAIL);
        return $email;
    }

    public static function int($inputName)
    {
        $int = filter_var($inputName, FILTER_VALIDATE_INT);

        if ($int) {
            return $int;
        } else {
            return false;
        }
    }

    public static function float($inputName)
    {
        $float = filter_var($inputName, FILTER_VALIDATE_FLOAT);

        if ($float) {
            return $float;
        } else {
            return false;
        }
    }

    public static function upload($inputName, $destiny, $minBytes, $extensions = [])
    {
        $extension = pathinfo($_FILES[$inputName]['name'], PATHINFO_EXTENSION);
        $filename = $inputName.'.'.$extension;
        $format = substr($filename, -3);

        if (in_array($extension, $extensions) && $extension == $format) {
            $temp = $_FILES[$inputName]['tmp_name'];
            $new_name = uniqid().'.'.$extension;

            if (filesize($temp) < $minBytes) {
                move_uploaded_file($temp, $destiny.$new_name);
                return $new_name;
            }
        } else {
            return false;
        }
    }
}

