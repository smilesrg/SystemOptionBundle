<?php

namespace SmileSRG\SystemOptionBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class SystemOption implements SystemOptionInterface
{
    /**
     * @var mixed id
     */
    private $id;

    /**
     * Key.
     *
     * @var string
     * @Assert\NotBlank()
     */
    private $key;

    /**
     * Value.
     *
     * @var string
     * @Assert\NotNull()
     */
    private $value;

    /**
     * Form type.
     *
     * @Assert\NotBlank(message="type field should not be blank")
     * @var string
     */
    private $type;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

} 