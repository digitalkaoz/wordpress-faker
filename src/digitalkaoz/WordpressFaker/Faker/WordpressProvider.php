<?php


namespace digitalkaoz\WordpressFaker\Faker;


/**
 * WordpressProvider
 * @author Robert Schönthal <robert.schoenthal@gmail.com>
 */
class WordpressProvider
{
    public function serialize($value)
    {
        return serialize($value);
    }
} 