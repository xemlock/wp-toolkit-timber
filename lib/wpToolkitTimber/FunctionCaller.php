<?php

class wpToolkitTimber_FunctionCaller
{
    public function call($func = null)
    {
        if ($func === null) {
            return $this;
        }
        $args = func_get_args();
        array_shift($args);
        return call_user_func_array(trim($func), $args);
    }

    public function __call($func, $args)
    {
        return call_user_func_array(trim($func), $args);
    }
}
