<?php

class msCertificateOfficeItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'msCertificateItem';
    public $classKey = 'msCertificateItem';
    public $languageTopics = ['mscertificate'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('mscertificate_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('mscertificate_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'msCertificateOfficeItemCreateProcessor';