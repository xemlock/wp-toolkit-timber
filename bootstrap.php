<?php

add_filter('get_twig', function (Twig_Environment $twig) {
    $twig->addFilter(new Twig_SimpleFilter('esc_html', 'esc_html'));
    $twig->addFilter(new Twig_SimpleFilter('esc_attr', 'esc_attr'));

    $twig->addExtension(new wpToolkitTimber_TwigExtension());

    return $twig;
});
