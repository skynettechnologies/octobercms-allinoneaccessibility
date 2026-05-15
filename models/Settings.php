<?php

namespace SkynetTechnologies\AllInOneAccessibility\Models;

//use Backend\Facades\BackendAuth;
use Backend\Facades\BackendAuth;
use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = [
        'System.Behaviors.SettingsModel',
        'RainLab.Translate.Behaviors.TranslatableModel'
    ];

    /**
     * @var array Translatable fields
     */
    public $translatable = [
        'text'
    ];

    // A unique code
    public $settingsCode = 'skynet_allinoneaccessibility_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    /*use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'aioa_licensekey' => ['required', 'between:4,16']
    ];*/

    /**
     * Retrieve options for the "Selected icon" dropdown
     *
     * @return Collection
     */
    /*public function getSelectedIconOptions()
    {
        return collect($this->icons)->pluck('name', 'classes');
    }*/

    public function filterFields($fields, $context = null)
    {

        $current_domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '-';
        $response = \Http::post('https://ada.skynettechnologies.us/api/get-autologin-link-new', [
            'website' => "'" . base64_encode($current_domain) . "'"
        ]);
        $responseArr = $response->json();

        if (isset($responseArr['status']) && $responseArr['status'] == 0) {
            $user = BackendAuth::getUser();
            $url = str_replace('https://', '', $current_domain);
            $url = str_replace('http://', '', $url);
            $url = str_replace('www.', '', $url);
            $url = trim($url, '/');
            $email = 'no-reply@' . $url;

            $package_type = "free-widget";
            $no_required_eu=1;
            $country_code='';
            $responseCountry = \Http::post('https://ipapi.co/json/');
            if ($responseCountry->successful()) {
                $dataCountry = $responseCountry->json();
                if(isset($dataCountry['in_eu']) && $dataCountry['in_eu']){
                    $no_required_eu=0;
                }
                if(isset($dataCountry['country_code']) && $dataCountry['country_code']){
                    $country_code=$dataCountry['country_code'];
                }
            }
            
            $arr_details = array(
                'name' => $url,
                'email' => $email,
                'company_name' => '',
                'website' => base64_encode($current_domain),
                'package_type' => $package_type,
                'start_date' => date('Y-m-d H:i:s'),
                'end_date' => '',
                'platform' => 'october-cms',
                'is_free_widget' => '1',
                'country' => $country_code,
                'no_required_eu' => $no_required_eu
            );
            $response_store_free_widget = \Http::post('https://ada.skynettechnologies.us/api/add-user-domain', $arr_details);
        }

        $fields->aioa_icontype->hidden = false;
        $fields->aioa_iconsize->hidden = false;
    }

    public function afterSave(){
        $attributes_json = $this->attributes;    
        $settings = json_decode($attributes_json['value'], true);
        
        /*==  Update Setting json API Execute ==*/
        $current_domain = $_SERVER['HTTP_HOST'] ?? '';  
        $custom_position_horizontal = $settings["aioa_custom_position_horizontal"];
        $custom_position_vertical = $settings["aioa_custom_position_vertical"];
        $custom_position_horizontal_type = $settings["aioa_custom_position_horizontal_type"];
        $custom_position_vertical_type = $settings["aioa_custom_position_vertical_type"];
        $widget_position_left = ($custom_position_horizontal_type=="to_the_left")?$custom_position_horizontal:null;
        $widget_position_right = ($custom_position_horizontal_type=="to_the_right")?$custom_position_horizontal:null;
        $widget_position_top = ($custom_position_vertical_type=="to_the_top")?$custom_position_vertical:null;
        $widget_position_bottom = ($custom_position_vertical_type=="to_the_bottom")?$custom_position_vertical:null;
        $is_widget_custom_position = (isset($settings['aioa_positiontype']) && $settings['aioa_positiontype'] =='aioa_positiontype_custom')?1:0;

        $widget_icon_size_type=$settings["aioa_iconsizetype"];
        $is_widget_custom_size= ($widget_icon_size_type=="aioa_iconsizetype_custom")?1:0;         
        
        $widget_size=$settings["aioa_widget_size"];
        $widget_size= ($widget_size=="aioa_widget_size_over_size")?1:0;

        $postData = [
            "u" => $current_domain,
            "widget_position" => str_replace("aioa_","",$settings['aioa_iconposition']) ?? null,
            "widget_color_code" => $settings['aioa_colorcode'] ?? null,
            "widget_icon_type" => str_replace("_","-",$settings['aioa_icontype']) ?? null,
            "widget_icon_size" => str_replace("_","-",$settings['aioa_iconsize']) ?? null,
            "is_widget_custom_size" => $is_widget_custom_size,
            "widget_icon_size_custom" => $settings['aioa_custom_iconsize'] ?? null,
            "is_widget_custom_position" => $is_widget_custom_position,
            "widget_position_left" => $widget_position_left,
            "widget_position_right" => $widget_position_right,
            "widget_position_top" => $widget_position_top,
            "widget_position_bottom" => $widget_position_bottom,
            "widget_size" => $widget_size,
        ];
         $response_store_free_widget = \Http::post('https://ada.skynettechnologies.us/api/widget-setting-update-platform', $postData);
    }

}
