<?php

class msCertificate
{
    /** @var modX $modx */
    public $modx;


    /**
     * @param modX $modx
     * @param array $config
     */
    function __construct(modX &$modx, array $config = [])
    {
        $this->modx =& $modx;
        // $corePath = MODX_CORE_PATH . 'components/mscertificate/';
        // $assetsUrl = MODX_ASSETS_URL . 'components/mscertificate/';

        $corePath = $this->modx->getOption('msc_core_path');
        $assetsUrl = $this->modx->getOption('msc_assets_url');

        $this->config = array_merge([
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'processorsPath' => $corePath . 'processors/',

            'connectorUrl' => $assetsUrl . 'connector.php',
            'assetsUrl' => $assetsUrl,
            'cssUrl' => $assetsUrl . 'css/',
            'jsUrl' => $assetsUrl . 'js/',
        ], $config);

        $this->modx->addPackage('mscertificate', $this->config['modelPath']);
        $this->modx->lexicon->load('mscertificate:default');
    }

}