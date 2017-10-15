<?php
namespace GDO\Usergroup;

use GDO\Core\GDO_Module;

final class Module_Usergroup extends GDO_Module
{
	public function getClasses()
	{
		return array(
			'\\GDO\\Usergroup\\GDO_Usergroup',
		);
	}
}
