<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace App\Channels\Send;

interface SendInterface
{
	public function __construct($config);

	public function push($to, $title, $content, $data = array());

	public function getError();
}


?>
