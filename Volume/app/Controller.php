<?php

namespace App;

/**
 * Parent class of controllers.
 */
abstract class Controller
{
    /**
     * Name of the object.
     *
     * @var string
     */
    protected $_className;

    /**
     * Instance of this class.
     *
     * @var self|null
     */
    protected static $_uniqueInstance;

    /**
     * Get the instance of this class.
     *
     * @return self
     */
    abstract public static function getInstance();

    /**
     * Constructor.
     */
    protected function __construct() {}
}
