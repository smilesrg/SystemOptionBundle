<?php

namespace SmileSRG\SystemOptionBundle\Model;

interface SystemOptionInterface
{
    public function getKey();
    public function getValue();
    public function setKey($key);
    public function setValue($value);
}
