<?php
/*
__PocketMine Plugin__
name=ExamplePlugin
description=Example plugin...
version=0.1.0
author=iPaddeylol
class=ExamplePlugin
apiversion=7,8,9,10,11,12,13
*/

class ExamplePlugin implements Plugin
{
	private $api, $config;
	
	public function __construct(ServerAPI $api, $server = false)
	{
		$this->api = $api;
	}
	
	public function init()
	{
		//alert console our plugin has loaded.
		console("[ExamplePlugin]: Plugin loaaded.");
		//generate configuration file.
		$this->config = new Config($this->api->plugin->ConfigPath($this)."config.yml", CONFIG_YAML, array(
		"Argument_1" => 1,
		"Argument_2" => FALSE));
	}
	
	public function __destruct()
	{

	}
}

?>