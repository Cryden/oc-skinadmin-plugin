<?php namespace Crydesign\Skinadmin;

use Backend;
use Config;
use System\Classes\PluginBase;

/**
 * skinadmin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'skinadmin',
            'description' => 'No description provided yet...',
            'author'      => 'crydesign',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        Config::set('backend.skin', 'Crydesign\Skinadmin\Classes\Skin');
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Crydesign\Skinadmin\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'crydesign.skinadmin.some_permission' => [
                'tab' => 'skinadmin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'skinadmin' => [
                'label'       => 'skinadmin',
                'url'         => Backend::url('crydesign/skinadmin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['crydesign.skinadmin.*'],
                'order'       => 500,
            ],
        ];
    }
}
