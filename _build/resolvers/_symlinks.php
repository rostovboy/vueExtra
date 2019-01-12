<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/vueExtra/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/vueextra')) {
            $cache->deleteTree(
                $dev . 'assets/components/vueextra/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/vueextra/', $dev . 'assets/components/vueextra');
        }
        if (!is_link($dev . 'core/components/vueextra')) {
            $cache->deleteTree(
                $dev . 'core/components/vueextra/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/vueextra/', $dev . 'core/components/vueextra');
        }
    }
}

return true;