<?php
namespace PoC;

use Joomla\Frontend\Router;

include "../code/Joomla/autoload.php";

$r = new Router();

$r->addGetRoute('users', function($params) {
	echo "List all users\n";
	print_r($params);
})->setValues(array('action' => 'users.browse'));

$r->addDeleteRoute('users', function ($params) {
	echo "Delete all users\n";
	print_r($params);
})->setValues(array('action' => 'users.delete'));

$r->addGetRoute('users/:user', function ($params) {
	echo "Show a single user\n";
	print_r($params);
})->setValues(array('action' => 'user.show'));

$r->addGetRoute('users/:user/notes/:note?', function ($params) {
	echo "Handle notes for a single user\n";
	print_r($params);
})->setValues(array('action' => 'note.show', 'note' => 0));

$r->setCatchallRoute(function ($params) {
	echo "Default route\n";
	print_r($params);
})->setValues(array('action' => 'error'));

$urls = array(
	'users',
	'users/1234',
	'users/username',
	'users/1234/notes',
	'users/1234/notes/567',
	'unknown'
);

foreach ($urls as $url)
{
	foreach (array('GET', 'DELETE') as $method)
	{
		try
		{
			echo "\n$method $url\n";
			$route = $r->getMatchingRoute($method, $url);
			call_user_func($route->getCallback(), $route->getParameters());
		}
		catch (Router\NotFoundException $e)
		{
			echo "No matching route\n";
		}
	}
}
