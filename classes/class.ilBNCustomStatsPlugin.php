<?php
 
include_once("./Services/UIComponent/classes/class.ilUserInterfaceHookPlugin.php");
 
/**
 * Plugin for generating custom statistics for Bonn university
 *
 * @author Carsten Kozianka <alex.killing@gmx.de>
 * @version $Id$
 *
 */

class ilBNCustomStatsPlugin extends ilUserInterfaceHookPlugin
{
	function getPluginName()
	{
		return "BNCustomStats";
	}
}

?>
