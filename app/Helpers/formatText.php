<?php
/**
 * br2nl : br2nl opposite
 */
if (!function_exists('br2nl')) {
    function br2nl($str)
    {
        $breaks = array("<br />", "<br>", "<br/>", "<br />");
        return str_ireplace($breaks, "\r\n", $str);
    }
}
