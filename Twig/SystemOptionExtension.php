<?php

namespace PrestoHeads\SystemOptionBundle\Twig;

use SmileSRG\SystemOptionBundle\Manager\SystemOptionManager;

class SystemOptionExtension extends \Twig_Extension
{
    protected $manager;

    public function __construct(SystemOptionManager $manager)
    {
        $this->manager = $manager;
    }

    public function getSystemOption($key)
    {
        return $this->manager->get($key);
    }

    public function getSystemOptionObject($key)
    {
        return $this->manager->getOption($key);
    }

    public function getFunctions()
    {
        return array(
            'getSystemOption' => new \Twig_Function_Method($this, 'getSystemOption'),
            'getSystemOptionObject' => new \Twig_Function_Method($this, 'getSystemOptionObject'),
        );
    }

    public function getName()
    {
        return 'system_option_extension';
    }
} 