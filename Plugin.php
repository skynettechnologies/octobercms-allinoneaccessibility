<?php

namespace SkynetTechnologies\AllInOneAccessibility;

use Backend;
use System\Classes\PluginBase;
use Event;
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
            'name'       => 'All in One Accessibility',
            'description' => 'Quick Web Accessibility Implementation with All in One Accessibility!',
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
        $domain_prefix='www';
        $responseCountry = \Http::post('https://ipapi.co/json/');
        if (!$responseCountry->successful()) {
        }
        else {
            $dataCountry = $responseCountry->json();
            if(isset($dataCountry['in_eu']) && $dataCountry['in_eu']){
                $domain_prefix='eu';
            }
        }
        $time=rand(0,999);
        $request_param ='colorcode=#420083&token=&t='.$time.'&position=bottom_right';
        $request_param_script = 'https://'.$domain_prefix.'.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?'.$request_param;

        Event::listen('cms.page.beforeDisplay', function ($controller, $url, $page) use($request_param_script) {
         $controller->addJs($request_param_script);
        });
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
    
    /* Registers setting for this plugin. */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'All in One Accessibility',
                'description' => 'Quick Web Accessibility Implementation with All in One Accessibility!',
                'category'    => 'All in One Accessibility',
                'icon'        => 'icon-pencil-square',
                'class'       => Settings::class,
                'order'       => 500,
                'keywords'    => 'All in One Accessibility'
            ]
        ];
    }
}
