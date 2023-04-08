<?php

namespace PowerComponents\LivewirePowerGrid\Themes;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \PowerComponents\LivewirePowerGrid\Themes\ThemeManager
 */
class Theme extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'theme';
    }
}
