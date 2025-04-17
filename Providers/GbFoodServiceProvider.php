<?php

declare(strict_types=1);

namespace Themes\GbFood\Providers;

use Modules\Xot\Providers\XotBaseThemeServiceProvider;

/**
 * Undocumented class.
 */
class GbFoodServiceProvider extends XotBaseThemeServiceProvider {
    public string $dir = __DIR__;
    public string $name = 'GbFood';
    public string $ns = 'pub_theme';
}
