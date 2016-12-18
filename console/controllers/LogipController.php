<?php
namespace console\controllers;

use Yii;
use yii\console\Exception;
use yii\console\Controller;

class LogipController extends Controller
{
    public function actionIndex()
    {
        echo 'welcome!';
        return 1;
    }

    public function actionLog()
    {
        $logFile = __DIR__ .'/../log/last_ip.log';
        if (file_exists($logFile)) {
            echo "exist!\n";
        }
        $source = 'http://123.57.2.149/ip.php';
        $ret = @file_get_contents('http://123.57.2.149/ip.php', 'r');
        $str = '['.date('Y-m-d H:i:s').'] '.$ret."\n";
        @file_put_contents($logFile, $str, FILE_APPEND);
        echo $str.' write in '.$logFile." done!\n";
        return 1;
    }

}
