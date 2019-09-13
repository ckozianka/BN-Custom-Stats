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
        /*$this->tpl->getStandardTemplate();
        $this->tpl->setContent("Hallo Welt!");
        $this->tpl->show();*/
        $this->index();
    }
    function index()
    {
        $this->tpl->getStandardTemplate();
        $this->tpl->setContent("Hallo Welt!");
        $this->tpl->show();
    }
}