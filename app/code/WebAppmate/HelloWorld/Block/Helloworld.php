<?php

namespace WebAppmate\HelloWorld\Block;

class Helloworld extends \Magento\Framework\View\Element\Template
{
	public function getResult(){
		return "Hello World";
	}
}
