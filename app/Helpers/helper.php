<?php

if (! function_exists('show_nav')) {
    /**
     * Generate a URL to a controller action.
     *
     * @param  string  $name
     * @param  array   $parameters
     * @param  bool    $absolute
     * @return string
     */
    function show_nav($url)
    {
        $className = '';
        if (($url == Request::is('admin/post*') || $url == Request::is('admin/upload*'))) {
            $className = 'active';
        }
        return $className;
    }
}
