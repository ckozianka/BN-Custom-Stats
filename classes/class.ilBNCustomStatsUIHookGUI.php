<?php
 
/* Copyright (c) 1998-2010 ILIAS open source, Extended GPL, see docs/LICENSE */
 
include_once("./Services/UIComponent/classes/class.ilUIHookPluginGUI.php");
 
/**
 * User interface hook class
 *
 * @author 
 * @version $Id$
 * @ingroup ServicesUIComponent
 */
class ilBNCustomStatsUIHookGUI extends ilUIHookPluginGUI
{
 
	/**
	 * Modify HTML output of GUI elements. Modifications modes are:
	 * - ilUIHookPluginGUI::KEEP (No modification)
	 * - ilUIHookPluginGUI::REPLACE (Replace default HTML with your HTML)
	 * - ilUIHookPluginGUI::APPEND (Append your HTML to the default HTML)
	 * - ilUIHookPluginGUI::PREPEND (Prepend your HTML to the default HTML)
	 *
	 * @param string $a_comp component
	 * @param string $a_part string that identifies the part of the UI that is handled
	 * @param string $a_par array of parameters (depend on $a_comp and $a_part)
	 *
	 * @return array array with entries "mode" => modification mode, "html" => your html
	 */
	function getHTML($a_comp, $a_part, $a_par = array())
	{
	
	}
 
	/**
	 * Modify GUI objects, before they generate ouput
	 *
	 * @param string $a_comp component
	 * @param string $a_part string that identifies the part of the UI that is handled
	 * @param string $a_par array of parameters (depend on $a_comp and $a_part)
	 */
	function modifyGUI($a_comp, $a_part, $a_par = array())
	{
		// currently only implemented for $ilTabsGUI
 
		// tabs hook
		// note that you currently do not get information in $a_comp
		// here. So you need to use general GET/POST information
		// like $_GET["baseClass"], $ilCtrl->getCmdClass/getCmd
		// to determine the context.
		if (($_GET["cmdClass"]=="ilobjusertrackinggui" or $_GET["cmdClass"]=="illpobjectstatisticsgui" or $_GET["cmdClass"]=="ilsessionstatisticsgui") && $a_part == "tabs")
		{
			// $a_par["tabs"] is ilTabsGUI object
 			
			// add a tab (always)
			$a_par["tabs"]->addTab("test", "Bonn Custom Statistics", "stest");
		}
	}
 
}
?>
