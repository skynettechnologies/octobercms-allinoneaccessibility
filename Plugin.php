<?php

namespace SkynetTechnologies\AllInOneAccessibility;

use Backend;
use System\Classes\PluginBase;

use Lang;

use SkynetTechnologies\AllInOneAccessibility\Models\Settings;

/**
 * FooterSignature Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */        
    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => Lang::get('SkynetTechnologies.allinoneaccessibility::lang.name'),
            'description' => Lang::get('SkynetTechnologies.allinoneaccessibility::lang.description'),
            'author'      => 'SkynetTechnologies',
            'icon'        => 'icon-pencil-square'
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
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'SkynetTechnologies\AllInOneAccessibility\Components\AllInOneAccessibility' => 'allInOneAccessibility',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => Lang::get('skynettechnologies.allinoneaccessibility::lang.settings.title'),
                'description' => Lang::get('skynettechnologies.allinoneaccessibility::lang.settings.description'),
                'category'    => 'All In One Accessibility',
                'icon'        => 'icon-pencil-square',
                'class'       => Settings::class,
                'order'       => 500,
                'keywords'    => 'All In One Accessibility'
            ]
        ];
    }
}
