<?php

class msCertificateItemEnableProcessor extends modObjectProcessor
{
    public $objectType = 'msCertificateItem';
    public $classKey = 'msCertificateItem';
    public $languageTopics = ['mscertificate'];
    //public $permission = 'save';


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

            $object->set('active', true);
            $object->save();
        }

        return $this->success();
    }

}

return 'msCertificateItemEnableProcessor';
