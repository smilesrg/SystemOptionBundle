<?php

namespace SmileSRG\SystemOptionBundle\Manager;

interface SystemOptionManagerInterface
{
    public function getOption($key);
    public function get($key);
    public function set($key, $value);
}