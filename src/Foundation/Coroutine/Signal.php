<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 15/11/9
 * Time: 19:39
 */

namespace Zan\Framework\Foundation\Coroutine;


class Signal {
    const TASK_SLEEP        = 1;
    const TASK_AWAKE        = 2;
    const TASK_CONTINUE     = 3;
    const TASK_DIE          = 4;
    const TASK_RUNNING      = 5;

    public static function isSignal($signal) {
        if(!$signal) {
            return false;
        }

        if (!is_int($signal)) {
            return false;
        }

        if($signal < 1 ) {
            return false;
        }

        if($signal > 5) {
            return false;
        }

        return true;
    }
}