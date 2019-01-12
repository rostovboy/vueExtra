<?php

class vueExtraItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'vueExtraItem';
    public $classKey = 'vueExtraItem';
    public $languageTopics = ['vueextra'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('vueextra_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('vueextra_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'vueExtraItemCreateProcessor';