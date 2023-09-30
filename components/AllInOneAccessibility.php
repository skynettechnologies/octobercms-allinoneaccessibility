<?php

namespace SkynetTechnologies\AllInOneAccessibility\Components;

use Cms\Classes\ComponentBase;
use Event;

use SkynetTechnologies\AllInOneAccessibility\Models\Settings;

class AllInOneAccessibility extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'All In One Accessibility',
            'description' => 'Quick Web Accessibility Implementation with All In One Accessibility!'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    
    public function getWidgetTokenParam()
    {
        /*return Settings::instance()->text;*/
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
            if(isset($widget_setting_ada->icontype)) {
                $icontype = str_replace('_','-',$widget_setting_ada->icontype);
            }
            $time=rand(0,999);
            $request_param='colorcode=#'.$color.'&token='.$token.'&t='.$time.'&position='.$iconposition.'.'.$icontype.'.'.$iconsize;
        }
        return $request_param;
    }
    
    public function text()
    {
        /*return Settings::instance()->text;*/
        return 'testText';
    }
    

    public function icon()
    {
        if(Settings::get('randomIcon'))
            $icon = Settings::get('icons')[rand(0, count(Settings::get('icons')) - 1)]['classes'];
        else
            $icon = Settings::get('selectedIcon');

        return $icon;
    }

}
