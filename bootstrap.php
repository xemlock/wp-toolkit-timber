<?php

add_filter('get_twig', function (Twig_Environment $twig) {
    $twig->addExtension(new wpToolkitTimber_TwigExtension());
    return $twig;
});
