<?php 

namespace codingbootcamp\tinymvc;

class request 
{
    public static function get($name, $default = null)
    {
        if(isset($_REQUEST['$name']))
        {
           return $_REQUEST['name']; // echo or whatever way we use it
        }
        else
        {
            return null; // null or whatever the value should be if the key is not found
        }
    }
}