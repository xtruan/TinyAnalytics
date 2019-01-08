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
    public function recordVisitFunction($page = 'default')
    {
        require_once('/var/www/html/TinyAnalytics/tracker.php');
        record_visit($page);
        return 'page: ' . $page;
    }
}