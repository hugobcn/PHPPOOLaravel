<?php

namespace Styde;

class Translator
{
    protected static $messages = [
        'BasicBowattack'=> ':unit dispara flecha :opponent',
        'BasicSwordattack'=> ':unit dispara flecha :opponent',
    ];

    public static function set(array $messages)
    {
        static::$messages = $messages;
    }

    public static function get($key, array $params = array())
    {
        if (! static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(static::$messages[$key], $params);
    }

    public static function has($key)
    {
        return isset (static::$messages[$key]);
    }

    public static function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value)
        {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}