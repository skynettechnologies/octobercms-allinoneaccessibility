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
    
    public function filterFields($fields, $context = null) {
        
        $current_domain=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'-';
        $current_domain='https://octobercmsdemo.skynettechnologies.us';
        $response=\Http::post('https://ada.skynettechnologies.us/api/get-autologin-link', [
            'website' => "'" . base64_encode($current_domain) . "'"
        ]);
        $responseArr=$response->json();
        
        if(isset($responseArr['status']) && $responseArr['status']==0) {
            $user = BackendAuth::getUser();
            $package_type = "free-widget";
            $arr_details = array(
                'name'              => $user->first_name.' '.$user->last_name,
                'email'             => $user->email,
                'company_name'      => '',
                'website'           => base64_encode($current_domain),
                'package_type'      => $package_type,
                'start_date'        => date('Y-m-d H:i:s'),
                'end_date'          => '',
                'platform'           => 'october-cms',
                'is_free_widget'    => '1',
                'country'           => ''
            );
            $response_store_free_widget=\Http::post('https://ada.skynettechnologies.us/api/add-user-domain', $arr_details);
        }
        
        $fields->aioa_icontype->hidden = false;
        $fields->aioa_iconsize->hidden = false;
    }
}
