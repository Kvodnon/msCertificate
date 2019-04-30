<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/msCertificate/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/mscertificate')) {
            $cache->deleteTree(
                $dev . 'assets/components/mscertificate/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/mscertificate/', $dev . 'assets/components/mscertificate');
        }
        if (!is_link($dev . 'core/components/mscertificate')) {
            $cache->deleteTree(
                $dev . 'core/components/mscertificate/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/mscertificate/', $dev . 'core/components/mscertificate');
        }
    }
}

return true;