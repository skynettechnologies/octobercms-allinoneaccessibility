<?php
$current_domain=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'-';
$string= [
    'name' => 'All In One Accessibility',
    'description' => 'Quick Web Accessibility Implementation with All In One Accessibility!',
    'fields' => [
        'title' => 'All In One Accessibility Settings',
        'aioa_licensekey'=>'License Key',
        'aioa_licensekeydesc'=>'Please <a href="https://ada.skynettechnologies.us/trial-subscription?utm_source='.$current_domain.'&utm_medium=OctoberCMS-module&utm_campaign=trial-subscription" target="_blank">subscribe</a> for a 10 days free trial and receive a license key to enable 52+ features of All in One Accessibility Pro.<br>No payment charged upfront, Cancel anytime.',
        'aioa_is_enabled'=>'Enable',
        'aioa_colorcode'=>'Hex color code:',
        'aioa_colorcodedesc'=>'You can customize the ADA Widget color. For example: FF5733',
        'aioa_iconposition'=>'Icon Position:',
        'aioa_iconpositiondesc'=>'Where would you like to place the accessibility icon on your site?',
        'aioa_icontype'=>'Icon Type:',
        'aioa_icon_type_1'=>'Accessibility',
        'aioa_icon_type_2'=>'Wheelchair',
        'aioa_icon_type_3'=>'Low Vision',
        'aioa_icontypedesc'=>'<div class="row mb-3">
<div class="col-md-1"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
<div class="col-md-1"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-2.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
<div class="col-md-2"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-3.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
</div>',
        'aioa_top_left'=>'Top Left',
        'aioa_top_center'=>'Top Center',
        'aioa_top_right'=>'Top Right',
        'aioa_middel_left'=>'Middle Left',
        'aioa_middel_right'=>'Middle Right',
        'aioa_bottom_left'=>'Bottom Left',
        'aioa_bottom_center'=>'Bottom Center',
        'aioa_bottom_right'=>'Bottom Right',
        'aioa_iconsize'=>'Icon Size:',
        'aioa_iconsizedesc'=>'',
        'aioa_big_icon'=>'Big',
        'aioa_medium_icon'=>'Medium',
        'aioa_default_icon'=>'Default',
        'aioa_small_icon'=>'Small',
        'aioa_extra_small_icon'=>'Extra Small'
    ],
    'settings' => [
        'title' => 'All In One Accessibility Settings',
        'description' => 'Manage All In One Accessibility settings'
    ]
];


return $string;
