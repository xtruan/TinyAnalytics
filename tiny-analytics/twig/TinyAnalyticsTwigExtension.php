<?php
namespace Grav\Plugin;
class ExampleTwigExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'ExampleTwigExtension';
    }
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('ta_record_visit', [$this, 'recordVisitFunction'])
        ];
    }
    public function recordVisitFunction()
    {
        return 'something';
    }
}