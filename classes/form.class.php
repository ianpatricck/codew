<?php

namespace Codeworker\Codeworker;

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

    static public function upload($input_name, $extensions = [], $destiny, $min_bytes)
    {
        $extension = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);
        $filename = $input_name.'.'.$extension;
        $format = substr($filename, -3);

        if(in_array($extension, $extensions) && $extension == $format) {
            $temp = $_FILES[$input_name]['tmp_name'];
            $new_name = uniqid().'.'.$extension;

            if(filesize($temp) < $min_bytes) {
                move_uploaded_file($temp, $destiny.$new_name);
                return $new_name;
            }
        } else {
            return 0;
        }
    }
}

?>
