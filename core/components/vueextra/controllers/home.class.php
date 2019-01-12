<?php

/**
 * The home manager controller for vueExtra.
 *
 */
class vueExtraHomeManagerController extends modExtraManagerController
{
    /** @var vueExtra $vueExtra */
    public $vueExtra;


    /**
     *
     */
    public function initialize()
    {
        $this->vueExtra = $this->modx->getService('vueExtra', 'vueExtra', MODX_CORE_PATH . 'components/vueextra/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['vueextra:default'];
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
        return $this->modx->lexicon('vueextra');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->vueExtra->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->vueExtra->config['jsUrl'] . 'mgr/dist/app.js');

        $this->addHtml('<script type="text/javascript">
            let vueExtra = {
            connector_url: "' . $this->vueExtra->config['connectorUrl'] . '",
            modAuth: "' . $this->modx->user->getUserToken($this->modx->context->get('key')) . '",
        };
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="vueextra-panel-home-div"></div>';

        return '';
    }
}