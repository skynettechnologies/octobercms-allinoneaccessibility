<?php

namespace SkynetTechnologies\AllInOneAccessibility\Models;

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
        $fields->aioa_icontype->hidden = true;
        $fields->aioa_iconsize->hidden = true;
        $fields->aioa_iconposition->hidden = true;
        $fields->aioa_colorcode->hidden = true;
        $fields->aioa_is_enabled->hidden = true;
        if($this->aioa_licensekey != '') {
            $fields->aioa_icontype->hidden = false;
            $fields->aioa_iconsize->hidden = false;
            $fields->aioa_iconposition->hidden = false;
            $fields->aioa_colorcode->hidden = false;
            $fields->aioa_is_enabled->hidden = false;
        }
    }
}
