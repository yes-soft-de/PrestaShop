<?php

class AdminHeaderAdsController extends ModuleAdminController
{
    public function init()
    {
        parent::init();
    }
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate('logan.tpl');
    }
}