<?php

 /*
  *  @ilCtrl_isCalledBy ilBNCustomStatsPageGUI: ilUIPluginRouterGUI
  */

class ilBNCustomStatsPageGUI
{
    function __construct() 
    {
        global $ilCtrl, $tpl;
        $this->ctrl = $ilCtrl;
        $this->tpl = $tpl;
    }
    
    function executeCommand ()
    {
        $this->index();
    }
    
    function index()
    {
        $this->tpl->getStandardTemplate();
        $this->tpl->setTitle("eCampus-Statistik");
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