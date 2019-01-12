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
/** @var vueExtra $vueExtra */
$vueExtra = $modx->getService('vueExtra', 'vueExtra', MODX_CORE_PATH . 'components/vueextra/model/');
$modx->lexicon->load('vueextra:default');

// handle request
$corePath = $modx->getOption('vueextra_core_path', null, $modx->getOption('core_path') . 'components/vueextra/');
$path = $modx->getOption('processorsPath', $vueExtra->config, $corePath . 'processors/');
$modx->getRequest();

/** @var modConnectorRequest $request */
$request = $modx->request;
$request->handleRequest([
    'processors_path' => $path,
    'location' => '',
]);