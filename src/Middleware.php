<?php
/**
 * When the program starts, a context is created and then pass to the first
 * middleware in middleware pipeline. Each middleware when invoked will do its
 * job and invoke the next one until there are none left, at this time the
 * context will be passed back to the previous one in the same manner. A
 * middleware can choose whether to invoke the next/previous middleware.
 */
abstract class Middleware {
    /**
     * Next middleware in the pipeline.
     */
    private Middleware $next = null;
    /**
     * Previous middleware in the pipeline.
     */
    private Middleware $previous = null;

    /**
     * Constructs a new middleware.
     */
    function __construct() {
    }
    /**
     * Sets a new previous middleware.
     *
     * @param $new New previous middleware
     */
    function setPrevious(Middleware $new) {
        $this->previous = $new;
    }
    /**
     * Sets a new next middleware.
     *
     * @param $new New next middleware
     */
    function setNext(Middleware $new) {
        $this->next = $new;
    }
    /**
     * Performs the job of this middleware.
     *
     * @param $context  The context
     */
    abstract function run(MiddlewareContext& $context);
    /**
     * Invokes this middleware.
     * 
     * @param $context The context 
     */
    function invoke(MiddlewareContext& $context) {
        $this->run($context);
        if ($this->next !== null) {
            $this->next->run($context);
        }
        if ($this->previous !== null) {
            $this->previous->run($context);
        }
    }
}