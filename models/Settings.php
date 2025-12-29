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
            if (!$responseCountry->successful()) {
            
            }
            else {
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

}
