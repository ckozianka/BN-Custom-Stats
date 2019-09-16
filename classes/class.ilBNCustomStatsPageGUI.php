<?php

 /*
  *  @ilCtrl_isCalledBy ilBNCustomStatsPageGUI: ilUIPluginRouterGUI
  */

class ilBNCustomStatsPageGUI
{
    
    function __construct() 
    {
        global /*$ilCtrl,*/ $tpl;
        //$this->ctrl = $ilCtrl;
        $this->tpl = $tpl;
        $this->plugin = ilPlugin::getPluginObject(IL_COMP_SERVICE, 'UIComponent', 'uihk', 'BNCustomStats');
    }
    
    function executeCommand ()
    {
        $this->index();
    }
    
    function index()
    {
        $this->tpl->getStandardTemplate();
        $this->tpl->setTitle("eCampus-Statistik");
        $title_image = $this->plugin->getImagePath("ecampus_logo.svg");
        $this->tpl->setTitleIcon($title_image);
        $this->tpl->setDescription("Spezielle Auswertungen für das eCampus-Team");
        $this->tpl->setContent("Hallo Welt!");
        $this->tpl->show();
    }
    
    function initStatsForm()
    {
        
    }
    
    function fillStatsForm()
    {
        
    }
}