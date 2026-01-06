<?php

namespace SkynetTechnologies\AllInOneAccessibility;

use Backend;
use System\Classes\PluginBase;
use Illuminate\Support\Facades\Request;

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
        if (!Request::is('admin/*')) {
            $widget_setting_ada=Settings::instance();
            /*$widget_setting_ada = ga_widget_settings();*/
            $isenabled = isset($widget_setting_ada->aioa_is_enabled)?$widget_setting_ada->aioa_is_enabled:false;
            $request_param=false;
            if($isenabled) {
                $color = (isset($widget_setting_ada->aioa_colorcode) && !empty($widget_setting_ada->aioa_colorcode))?$widget_setting_ada->aioa_colorcode:'420083';
                $color = trim(str_replace('#','',$color));
                $token = isset($widget_setting_ada->aioa_licensekey)?$widget_setting_ada->aioa_licensekey:'';
                /*== Integrate API to check key is valid or not ===*/
            
                $iconposition='bottom_right';
                if(isset($widget_setting_ada->aioa_iconposition)) {
                    $iconposition = str_replace('aioa_','',$widget_setting_ada->aioa_iconposition);
                }
                $iconsize='aioa-default-icon';
                if(isset($widget_setting_ada->aioa_iconsize)) {
                    $iconsize = str_replace('_','-',$widget_setting_ada->aioa_iconsize);
                }
                $icontype='aioa-icon-type-1';
                if(isset($widget_setting_ada->aioa_icontype)) {
                    $icontype = str_replace('_','-',$widget_setting_ada->aioa_icontype);
                }
                $time=rand(0,999);
                $request_param='colorcode=#'.$color.'&token='.$token.'&position='.$iconposition.'&t='.$time;
            }
        
            $current_domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '-';
            $response = \Http::post('https://ada.skynettechnologies.us/api/widget-settings', [
                'website_url' =>$current_domain
            ]);
            $responseArr = $response->json();
            $domain_prefix=(isset($responseArr['Data']['no_required_eu']) && $responseArr['Data']['no_required_eu']=='0')?'eu':'www';
            $request_param_script = 'https://'.$domain_prefix.'.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js?'.$request_param;
            echo "<script id='aioa-adawidget' src='$request_param_script' defer></script>";
        }
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
