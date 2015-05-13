<?php

class wpToolkitTimber_TwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'wpToolkit';
    }

    public function getGlobals()
    {
        $fn = new wpToolkitTimber_FunctionCaller();
        return array(
            'fn'       => $fn,
            'function' => $fn,
        );
    }
}
