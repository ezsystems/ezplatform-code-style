<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

use Ibexa\Platform\CodeStyle\PhpCsFixer\Config;

@trigger_error(
    sprintf(
        '"%s" class is deprecated. Use "%s" instead.',
        'EzSystems\EzPlatformCodeStyle\PhpCsFixer\Config',
        Config::class
    ),
    E_USER_DEPRECATED
);

class_alias(Config::class, 'EzSystems\EzPlatformCodeStyle\PhpCsFixer\Config');

class_exists(Config::class);
