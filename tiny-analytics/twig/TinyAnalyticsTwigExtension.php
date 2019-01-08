<?php
namespace Grav\Plugin;
class TinyAnalyticsTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'TinyAnalyticsTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('ta_record_visit', [$this, 'recordVisitFunction'])
        ];
    }
    public function recordVisitFunction($page)
    {
        return 'page: ' + $page;
    }
}