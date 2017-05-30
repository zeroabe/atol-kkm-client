<?php

namespace KKMClient\Traits;


trait CommonResponseTrait
{
    /**
     * @var string
     *
     */
    private $name;

    /**
     * @var string
     *
     */
    private $error;

    /**
     * @var integer
     *
     */
    private $status;

    /**
     * @return string
     */
    public function getName (): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName ( string $name )
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getError (): string
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError ( string $error = "" )
    {
        $this->error = $error;
    }

    /**
     * @return int
     */
    public function getStatus (): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus ( int $status )
    {
        $this->status = $status;
    }
}