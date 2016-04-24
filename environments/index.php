<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */

// enumerated applications
$apps = ['website', ];

// compose folders that need to be writable during runtime
function composeWritables($apps) {
    return compose($apps, ['runtime', 'web/assets']);
}

// compose files where to put cookie validation key
function composeCookieValidationKeyFiles($apps)
{
    return compose($apps, ['config/main-local.php']);
}

function compose($apps, $paths)
{
    $compositions = [];
    foreach ($paths as $path) {
        foreach ($apps as $app) {
            $compositions[] = "$app/$path";
        }
    }

    return $compositions;
}

$writables = composeWritables($apps);
$cookieValidationKeyFiles = composeCookieValidationKeyFiles($apps);

return [
    'dev' => [
        'path' => 'dev',
        'setWritable' => $writables,
        'setExecutable' => [
            'yii',
            'tests/codeception/bin/yii',
        ],
        'setCookieValidationKey' => $cookieValidationKeyFiles,
    ],
    'prod' => [
        'path' => 'prod',
        'setWritable' => $writables,
        'setExecutable' => [
            'yii',
        ],
        'setCookieValidationKey' => $cookieValidationKeyFiles,
    ],
];
