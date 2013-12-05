<?php


namespace digitalkaoz\WordpressFaker;


/**
 * Post
 * @author Robert Schönthal <robert.schoenthal@sinnerschrader.com>
 */
class Post
{
    public function __set($key, $value) {
        $this->{$key} = $value;
    }

//    public function __call($fn, $args) {
//
//        if (0 === strpos($fn, 'set')) {
//            die(var_dump($args));
//        }
//    }

}