<?php

namespace SmileSRG\SystemOptionBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

class SystemOptionManager implements SystemOptionManagerInterface
{
    /**
     * @var Doctrine\Common\Persistence\ObjectManager
     */
    protected $om;

    /**
     * @var Psr\Log\LoggerInterface
     */
    protected $logger;

    public function __construct(ObjectManager $om, LoggerInterface $logger)
    {
        $this->om = $om;
        $this->logger = $logger;
    }

    /**
     * Returns whole SystemOption object.
     *
     * @param string $key
     * @return SmileSRG\SystemOptionBundle\Model\SystemOptionManager
     * @throws SystemOptionNotFoundException
     */
    public function getOption($key)
    {
        $option = $this->om
            ->getRepository('SmileSRGSystemOptionBundle:SystemOption')
            ->findOneByKey($key)
        ;

        if (!$option) {
            $message = sprintf("System Option with key '%s' is not found", $key);
            $this->logger->critical($message);
            throw new SystemOptionNotFoundException(sprintf($message));
        }

        return $option;
    }

    public function get($key)
    {
        return $this->getOption($key)->getValue();
    }

    public function set($key, $value)
    {
        $option = $this
            ->getOption($key)
            ->setValue($value)
        ;

        $this->logger->debug(sprintf('System option %s value is set to %s', $key, $value));

        $this->om->flush($option);
    }
}