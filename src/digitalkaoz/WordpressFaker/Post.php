<?php


namespace digitalkaoz\WordpressFaker;


/**
 * Post
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
class Post
{
    public $meta = array();

    public function __set($key, $value) {
        $this->{$key} = $value;
    }
}