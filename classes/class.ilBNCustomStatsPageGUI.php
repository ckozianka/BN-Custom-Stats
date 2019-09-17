<?php

 /*
  *  @ilCtrl_isCalledBy ilBNCustomStatsPageGUI: ilUIPluginRouterGUI
  *  @ilCtrl_Calls ilBNCustomStatsPageGUI: ilObjUserTrackingGUI, ilObjSystemFolderGui
  */

class ilBNCustomStatsPageGUI
{
    
    function __construct() 
    {
        global $ilCtrl, $tpl, $ilTabs, $ilLocator;
        $this->ctrl = $ilCtrl;
        $this->tpl = $tpl;
        $this->tabs = $ilTabs;
        $this->locator = $ilLocator;
        $this->plugin = ilPlugin::getPluginObject(IL_COMP_SERVICE, 'UIComponent', 'uihk', 'BNCustomStats');
    }

    function executeCommand ()
    {
        $this->index();
    }
    
    function index()
    {
        //Get standard template
        $this->tpl->getStandardTemplate();
        
        //Set locator/breadcrumbs
        $this->ctrl->setParameterByClass("ilObjSystemFolderGUI", "ref_id", 9);
        $this->locator->addItem("Administration", $this->ctrl->getLinkTargetByClass(array('ilAdministrationGUI','ilObjSystemFolderGUI')));
        $this->ctrl->setParameterByClass("ilObjUserTrackingGUI", "ref_id", 17);
        $this->locator->addItem("Statistics and Learning Progress", $this->ctrl->getLinkTargetByClass(array('ilAdministrationGUI','ilObjUserTrackingGUI'), 'view'));
        $this->locator->addItem("eCampus-Statistik", $this->ctrl->getLinkTargetByClass(array('ilUIPluginRouterGUI', 'ilBNCustomStatsPageGUI'),'index'));
        $this->tpl->setLocator();
        
        //Set page title
        $this->tpl->setTitle("eCampus-Statistik");
        
        //Set page icon
        $title_image = $this->plugin->getImagePath("ecampus_logo.svg");
        $this->tpl->setTitleIcon($title_image);
        
        //Set page description
        $this->tpl->setDescription("Spezielle Auswertungen für das eCampus-Team");
        
        //Tabs
        $this->tabs->addTab("settings", "Settings", $this->ctrl->getLinkTargetByClass(array('ilAdministrationGUI', 'ilObjUserTrackingGUI')));
        $this->tabs->activateTab("settings");
        $this->tabs->addTab("ecampus-statistik", "eCampus-Statistik", $this->ctrl->getLinkTargetByClass(array('ilUIPluginRouterGUI', 'ilBNCustomStatsPageGUI')));
        $this->tabs->activateTab("ecampus-statistik");
        
        //Set output to main content
        $this->tpl->setContent("Hallo Welt!");
        
        //Render template
        $this->tpl->show();
    }
    
    function initStatsForm()
    {
        
    }
    
    function fillStatsForm()
    {
        
    }
}