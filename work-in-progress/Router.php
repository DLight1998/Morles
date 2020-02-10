<?php
/**
 * A class for mapping between the requested path and the controller used to
 * process that request
 */
class Router
{
    /**
     * Constructs a router.
     */
    function __construct() {
    }
    /**
     * Performs a route based on the provided path.
     *
     * @param $path The path to use when determining which handler to invoke
     */
    function route(string $path) {
    }
    /**
     * Loads routing rules from a file.
     *
     * @param $fileName Name of the file containing rules to load
     * @throws FileNotFoundException if the specified file doesn't exist
     */
    function load(string $fileName) {
    }
    /**
     * Adds a route that map GET requests whose path matched the specified
     * pattern to the provided handler.
     * 
     * @param $pattern The pattern to match
     * @param $handler The handler to invoke
     */
    function get(string $pattern, callable $handler) {
        ;
    }
    /**
     * Adds a route that map POST requests whose path matched the specified
     * pattern to the provided handler.
     * 
     * @param $pattern The pattern to match
     * @param $handler The handler to invoke
     */
    function post(string $pattern, callable $handler) {
        ;
    }
    /**
     * Adds a route that map PUT requests whose path matched the specified
     * pattern to the provided handler.
     * 
     * @param $pattern The pattern to match
     * @param $handler The handler to invoke
     */
    function put(string $pattern, callable $handler) {
        ;
    }
    /**
     * Adds a route that map DELETE requests whose path matched the specified
     * pattern to the provided handler.
     * 
     * @param $pattern The pattern to match
     * @param $handler The handler to invoke
     */
    function delete(string $pattern, callable $handler) {
        ;
    }
    /**
     * Adds a route that map all requests whose path matched the specified
     * pattern to the provided handler.
     * 
     * @param $pattern The pattern to match
     * @param $handler The handler to invoke
     */
    function request(string $pattern, callable $handler) {
        ;
    }
}