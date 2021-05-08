<?php
	$doc=simplexml_load_string('<library></library>');
	$book=$doc->addChild('book');
	$book->addAttribute('price','300');
	$book->addChild('author','Р.А.Уайк');
	$book->addChild('title','PHP. Справочник');
	$doc->asXML('task2.xml');
?>