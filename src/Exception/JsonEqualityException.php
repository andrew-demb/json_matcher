<?php

namespace Fesor\JsonMatcher\Exception;

class JsonEqualityException extends MatchException
{
    /**
     * @return static
     */
    public static function create(array $options)
    {
        if (self::isPositive($options)) {
            $message = sprintf('Expected equivalent JSON%s', self::getAt($options));
        } else {
            $message = sprintf('Expected inequivalent JSON%s', self::getAt($options));
        }

        return new static($message);
    }
}
