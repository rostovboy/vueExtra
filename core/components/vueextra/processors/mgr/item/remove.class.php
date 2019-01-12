<?php

class vueExtraItemRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'vueExtraItem';
    public $classKey = 'vueExtraItem';
    public $languageTopics = ['vueextra'];
    //public $permission = 'remove';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('vueextra_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var vueExtraItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('vueextra_item_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'vueExtraItemRemoveProcessor';