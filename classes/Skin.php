<?php namespace Crydesign\Skinadmin\Classes;

use Backend\Skins\Standard as BackendSkin;

/**
 * Modified backend skin information file.
 *
 * This is modified to include an additional path to override the default layouts.
 *
 */

class Skin extends BackendSkin
{
    /**
     * {@inheritDoc}
     */
    public function getLayoutPaths()
    {
        return [
            plugins_path('/crydesign/skinadmin/layouts'),
            $this->skinPath . '/layouts'
        ];
    }
}
