<?php
/**
 * A class representing HTTP request.
 */
class Request {
    /**
     * Constructs a new request object.
     */
    function __construct() {
    }
    /**
     * Gets the HTTP method used to send this request.
     * 
     * @return     string The method used
     */
    function getMethod(): string {
        return '';
    }
    /**
     * Gets the address of the client who sent this request.
     * 
     * @return     string Address of the client sent this request
     */
    function getSenderAddress(): string {
        return '';
    }
    /**
     * Gets the requested path, this is the part after domain name and port
     * (if any). For example: `/a.php` is the path of `http://localhost/a.php`
     * and `http://example.com:8080/a.php`.
     *
     * @return     string  The path in the request
     */
    function getPath(): string {
        return '';
    }
    /**
     * Gets the query. Query string is the part after the question mark `?`
     * in the URL, but not include the part starts with a hash sign `#`. For
     * example: in the URL `http://localhost/a.php?message=hello#title` the
     * query string is `?message=hello`.
     *
     * @return     string  The query string
     */
    function getQueryString(): string {
        return '';
    }
    /**
     * Gets the content of an HTTP header in this request.
     *
     * @param      string  $header  Name of the header
     *
     * @return     string  The header content
     */
    function getHeader(string $header): string {
        return '';
    }
    /**
     * Gets the content of all headers in this request.
     *
     * @return     array   An associative array with each element correspond
     *                     to a header in this request
     */
    function getAllHeaders(): array {
        return [
            'Header' => 'Content'
        ];
    }
    /**
     * Gets the body of this request as a string.
     *
     * @return     string  The body as a string
     */
    function getBody(): string {
        return '';
    }
}