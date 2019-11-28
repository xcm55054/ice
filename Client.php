<?php
/**
 * Created by : PhpStorm
 * User: xuchaomin
 * Date: 2019/11/27
 * Time: 9:56
 */

require 'Ice.php'; //引入系统类库
require 'Printer.php'; //引入本地类库
$ic = null;
try
{
    $ic = Ice\initialize();  //客户端初始化

    //客户端连接。PrinterServer 是在Springboot中定义的一个服务名称 -h 127.0.0.1 是指定IP
    $base = $ic->stringToProxy("PrinterServer:default -h 127.0.0.1 -p 8081");

    //通过slice2php 生成的类，实例化一个服务对象
    $printerServer = demoice\PrinterPrxHelper::checkedCast($base);
    if(!$printerServer)
    {
        throw new RuntimeException("Invalid proxy");
    }
    //调用类中的方法
    $retVal = $printerServer->sayHello("Jackie");
    //输出结果
    var_dump($retVal);
}
catch(Exception $ex)
{
    echo $ex;
}

if($ic)
{
    $ic->destroy(); // Clean up
}
?>