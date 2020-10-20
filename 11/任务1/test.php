<?php
class Site{
	public $url;
	public $title;
	function __construct($url,$title){
		$this->url=$url;
		$this->title=$title;
	}
	function getInfo(){
		echo "名称:".$this->title." ";
		echo "url:".$this->url."<br>";
	}
}
$baidu = new Site("www.baidu.com","百度");
$taobao = new Site("www.taobao.com","淘宝");
$google = new Site("www.google.com","google");
$baidu->getInfo();
$taobao->getInfo();
$google->getInfo();