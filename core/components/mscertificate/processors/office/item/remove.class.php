<?php

class msCertificateOfficeItemRemoveProcessor extends modObjectProcessor
{
    public $objectType = 'msCertificateItem';
    public $classKey = 'msCertificateItem';
    public $languageTopics = ['mscertificate'];
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
            return $this->failure($this->modx->lexicon('mscertificate_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var msCertificateItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('mscertificate_item_err_nf'));
            }

            $object->remove();
        }

        return $this->success();
    }

}

return 'msCertificateOfficeItemRemoveProcessor';