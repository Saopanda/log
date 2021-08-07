<?php


class log
{
    static function setPath(string $path)
    {
        FileLog::getLogger()->setPath($path);
    }

    static function info($message,array $context = [])
    {
        FileLog::getLogger()->info($message,$context);
    }
    static function error($message,array $context = [])
    {
        FileLog::getLogger()->error($message,$context);
    }
    static function printLog()
    {
        FileLog::getLogger()->printLog();
    }

}