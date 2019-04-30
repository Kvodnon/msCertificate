<?php

/**
 * The home manager controller for msCertificate.
 *
 */
class msCertificateHomeManagerController extends modExtraManagerController
{
    /** @var msCertificate $msCertificate */
    public $msCertificate;


    /**
     *
     */
    public function initialize()
    {
        $this->msCertificate = $this->modx->getService('msCertificate', 'msCertificate', MODX_CORE_PATH . 'components/mscertificate/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['mscertificate:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('mscertificate');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->msCertificate->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/mscertificate.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->msCertificate->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        msCertificate.config = ' . json_encode($this->msCertificate->config) . ';
        msCertificate.config.connector_url = "' . $this->msCertificate->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "mscertificate-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="mscertificate-panel-home-div"></div>';

        return '';
    }
}