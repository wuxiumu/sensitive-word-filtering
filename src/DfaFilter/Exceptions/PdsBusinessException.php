<?php
/**
 * Class PdsBusinessException
 * User: wuxiumu
 * Date: 19-07-02
 * Time: 18:00
 */

namespace DfaFilter\Exceptions;

use Exception;

class PdsBusinessException extends Exception
{
    const EMPTY_CONTENT    = 10001;   // 空检测文本内容
    const EMPTY_WORD_POOL  = 10002;    // 空词库
    const CANNOT_FIND_FILE = 10003;    // 找不到词库文件
}
