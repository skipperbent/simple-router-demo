<?php
use Pecee\SimpleRouter\SimpleRouter;

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return string
 */
function url($name = null, $parameters = null, $getParams = null)
{
    return SimpleRouter::getUrl($name, $parameters, $getParams);
}

/**
 * @return \Pecee\Http\Response
 */
function response()
{
    return SimpleRouter::response();
}

/**
 * @return \Pecee\Http\Request
 */
function request()
{
    return SimpleRouter::request();
}

/**
 * Get input class
 * @return \Pecee\Http\Input\Input
 */
function input()
{
    return request()->getInput();
}

function redirect($url, $code = null)
{
    if ($code !== null) {
        response()->httpCode($code);
    }

    response()->redirect($url);
}