<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

use App\Http\Admin\Validation\PermissionesValidation;

return [
    \App\Http\Admin\Validation\AuthorizationValidation::class => \App\Http\Admin\Validation\AuthorizationValidation::class,
    \App\Exception\ValidationException::class => \App\Exception\ValidationException::class,
    PermissionesValidation::class => PermissionesValidation::class
];
