<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

use Ibexa\Platform\CodeStyle\PhpCsFixer\IbexaInternalConfigFactory;

@trigger_error(
    sprintf(
        '"%s" class is deprecated. Use "%s" instead.',
        'EzSystems\EzPlatformCodeStyle\PhpCsFixer\EzPlatformInternalConfigFactory',
        IbexaInternalConfigFactory::class
    ),
    E_USER_DEPRECATED
);

class_alias(IbexaInternalConfigFactory::class, 'EzSystems\EzPlatformCodeStyle\PhpCsFixer\EzPlatformInternalConfigFactory');

class_exists(IbexaInternalConfigFactory::class);
