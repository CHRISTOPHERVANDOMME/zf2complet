<?php

require './vendor/autoload.php';
$vm = new \Zend\View\Model\ViewModel(array('nom'=>'tintin'));
$vm->setVariables(array(
	'title'=>'tintin',
	'description'=>'bande dessinée',
	'link'=>'http://manews.fr'
	));
$vm->setTemplate('liste');

$resol = new Zend\View\Resolver\TemplateMapResolver(array(
	'liste'=> __DIR__.'/liste.phtml',
	)
);
$rendu = new \Zend\View\Renderer\FeedRenderer();
$rendu->setResolver($resol);
echo $rendu->render($vm);