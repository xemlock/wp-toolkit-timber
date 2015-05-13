<?php

class wpToolkitTimber_TwigExtension extends Twig_Extension
{
    public function getName()
    {
        return 'wpToolkit';
    }

    public function getFilters()
    {
        // Since Timber variables are not automatically escaped provide
        // build-in Wordpress escapers as filters
        $filters = array(
            new Twig_SimpleFilter('esc_attr',     'esc_attr'),
            new Twig_SimpleFilter('esc_html',     'esc_html'),
            new Twig_SimpleFilter('esc_js',       'esc_js'),
            new Twig_SimpleFilter('esc_sql',      'esc_sql'),
            new Twig_SimpleFilter('esc_textarea', 'esc_textarea'),
            new Twig_SimpleFilter('esc_url',      'esc_url'),
        );
        return $filters;
    }

    public function getGlobals()
    {
        // this allows more semantic function calls compared to Timber,
        // instead of {{ function('func', arg1, arg2) }} one can use
        // {{ function.func(arg1, arg2) }} or {{ fn.func(arg1, arg2) }}
        $fn = new wpToolkitTimber_FunctionCaller();
        return array(
            'fn'       => $fn,
            'function' => $fn,
        );
    }
}
