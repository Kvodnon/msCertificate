<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
} else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msCertificate $msCertificate */
$msCertificate = $modx->getService('msCertificate', 'msCertificate', MODX_CORE_PATH . 'components/mscertificate/model/');
$modx->lexicon->load('mscertificate:default');

// handle request
$corePath = $modx->getOption('mscertificate_core_path', null, $modx->getOption('core_path') . 'components/mscertificate/');
$path = $modx->getOption('processorsPath', $msCertificate->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);