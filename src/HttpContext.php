<?php
/**
 * The context to use when handling HTTP requests.
 */
class HttpContext implements MiddlewareContext {
    /**
     * The HTTP request received.
     */
    public Request $request;
    /**
     * The HTTP response to be sent after processing.
     */
    public Response $response;
}