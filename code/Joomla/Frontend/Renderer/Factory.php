<?php
namespace Joomla\Frontend;

class RendererFactory
{
	public function create($frontend, $type = '')
	{
		$frontend  = ucfirst(strtolower($frontend));
		$type      = ucfirst(strtolower($type));

		$filename  = $frontend . '/Renderer/' . $type . 'Renderer.php';
		$classname = __NAMESPACE__ . '\\' . $frontend . '\\' . $type . 'Renderer.php';

		try
		{
			if (!class_exists($classname))
			{
				include_once $filename;
			}

			return new $classname;
		}
		catch (\Exception $e)
		{
			throw(new RendererNotFoundException($frontend, $type));
		}
	}
}