<?php

namespace DoctrineModule\Options;

use Zend\Stdlib\AbstractOptions;

class Cache extends AbstractOptions
{
    /**
     * Class used to instantiate the cache.
     *
     * @var string
     */
    protected $class = 'Doctrine\Common\Cache\ArrayCache';

    /**
     * Namespace to prefix all cache ids with.
     *
     * @var string
     */
    protected $namespace = '';

    /**
     * Key to use for fetching the memcache, memcached, or redis instance from
     * the service locator. Used only with Memcache. Memcached, and Redis.
     *
     * @var string
     */
    protected $instance = null;

    /**
     * @param string $class
     * @return self
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param string $instance
     * @return self
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param string $namespace
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
        return $this;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }
}