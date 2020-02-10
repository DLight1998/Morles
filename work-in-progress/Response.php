<?php
/**
 * A class representing HTTP response.
 */
class Response {
    /**
     * Constructs a new response object.
     */
    function __construct() {
    }
    /**
     * Gets the status code of this response.
     *
     * @param      integer  $code   The code
     */
    function getStatusCode() {
        return 200;
    }
    /**
     * Sets the status code of this response.
     *
     * @param      integer  $code   The code
     */
    function setStatusCode(int $code) {
    }
    /**
     * Gets the content of a header in this response.
     *
     * @param      string  $header  The header name
     *
     * @return     string  The header content
     */
    function getHeader(string $header): string {
        return '';
    }
    /**
     * Sets the content of a header in this response.
     *
     * @param      string       $header  The header name
     * @param      string       $value   The header content
     */
    function setHeader(string $header, string $value) {
    }
    /**
     * Gets the content of all header in this response.
     *
     * @param      string  $header  The header name
     *
     * @return     array   An associative array with each element correspond
     *                     to a header in this response
     */
    function getAllHeaders(): array {
        return '';
    }
    /**
     * Gets the response body.
     *
     * @return     string  The response body.
     */
    function getBody(): string {
        return '';
    }
    /**
     * Sets the response body.
     *
     * @param      string  $content  The body content
     */
    function setBody(string $content) {
    }
}