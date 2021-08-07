<?php


class FileLog implements \Psr\Log\LoggerInterface
{
    use \Psr\Log\LoggerTrait;

    private static $logger;
    private $path = '';

    public static function getLogger()
    {
        if (is_null(self::$logger)){
            self::$logger = new self();
        }
        self::$logger->path = dirname(__FILE__);
        return self::$logger;
    }

    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function log($level, $message, array $context = array())
    {
        $context = json_encode($context);
        //  输出屏幕
        $log = date('Y-m-d H:i:s',time())." [{$level}] {$message} \t {$context} \n";
        //  输出日志
        file_put_contents($this->path."/log.log",$log,FILE_APPEND);
    }

    public function printLog()
    {
        $rs = @file_get_contents($this->path."/log.log");
        echo $rs;
    }


}