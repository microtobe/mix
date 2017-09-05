<?php

/**
 * ErrorException类
 * @author 刘健 <code.liu@qq.com>
 */

namespace mix\exception;

class ErrorException extends BaseException
{

    // 构造
    public function __construct($type, $message, $file, $line)
    {
        $this->code = $type;
        $this->message = $message;
        $this->file = $file;
        $this->line = $line;
        // 父类构造
        parent::__construct();
    }

}
