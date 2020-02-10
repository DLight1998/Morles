<?php
class HttpContext implements MiddlewareContext {
    /**
     * The HTTP request received.
     */
    private Request $request;
    /**
     * The HTTP response to be sent after processing.
     */
    private Response $response;

    function getRequest() {
        return $this->request;
    }
    function getResponse() {
        return $this->response;
    }
}