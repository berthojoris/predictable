<?php
if (!function_exists('setActive')) {
    function setActive($name)
    {
        $url = explode("/", url()->current());
        if (empty($url[3]) && $name == "index") {
            return "active";
        } elseif (!empty($url[3]) && $url[3] == $name) {
            return "active";
        } else {
            return "";
        }
    }
}
