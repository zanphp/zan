<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/26
 * Time: 下午2:08
 */

namespace Zan\Framework\Network\Server\WorkerStart;

use Zan\Framework\Contract\Network\Bootable;
use Zan\Framework\Foundation\Core\Config;

class InitializeWorkerMonitor implements Bootable
{
    public function bootstrap($server,$workerId)
    {
        echo "InitializeWorkerMonitor:\n";
        var_dump($server);
    }

}