<?php

namespace PodlovePublisher_Vendor;

use PodlovePublisher_Vendor\Twig\TwigFilter;
\class_exists('PodlovePublisher_Vendor\\Twig\\TwigFilter');
@\trigger_error(\sprintf('Using the "Twig_Filter" class is deprecated since Twig version 2.7, use "Twig\\TwigFilter" instead.'), \E_USER_DEPRECATED);
if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TwigFilter" instead */
    class Twig_Filter extends TwigFilter
    {
    }
}
