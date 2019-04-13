<?php

class TestClass
{
    public function __construct()
    {
    }

    public static function now()
    {
        static::func1();
    }

    public static function now2()
    {
        return new static();
    }

    public static function now3()
    {
        return new TestClass();
    }

    public static function func1()
    {
    }
}