<?php
$current_domain=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'-';
$string= [
    'name' => 'All In One Accessibility',
    'description' => 'Quick Web Accessibility Implementation with All In One Accessibility!',
    'fields' => [
        'title' => 'All In One Accessibility Settings',
        'aioa_licensekey'=>'License Key',
        'aioa_licensekeydesc'=>'<span id="aioa_licensekey_desc">Please <a href="https://ada.skynettechnologies.us/trial-subscription?utm_source='.$current_domain.'&utm_medium=OctoberCMS-module&utm_campaign=trial-subscription" target="_blank">subscribe</a> for a 10 days free trial and receive a license key to enable 52+ features of All in One Accessibility Pro.<br>No payment charged upfront, Cancel anytime.</span><script>var aioa_licensekeyInput = document.getElementById("Form-field-Settings-aioa_licensekey");
if (aioa_licensekeyInput && aioa_licensekeyInput.value) {
  var aioa_licensekey_desc = document.getElementById("aioa_licensekey_desc");
  aioa_licensekey_desc.style.display = "none";
}
aioa_licensekeyInput.addEventListener("change", function() {
    document.getElementById("Form-field-Settings-aioa_is_enabled").checked=true;
    if (aioa_licensekeyInput.value=="") {
        document.getElementById("Form-field-Settings-aioa_is_enabled").checked=false;
    }
});
setTimeout(function() {
        const submitbtn=document.querySelector(\'button[type="submit"]\');
        submitbtn.addEventListener("click", function() {
            setTimeout(function() {
                window.location.reload();
            },700);
            
        });
    },500);
</script>
<style>
  
  .settings-page.size-large{
      max-width: 850px;
      background: #e9efff;
    border-radius: 19px;
    /* margin: 0 auto 40px; */
    padding: 27px 20px 30px 20px;
  }
  [type="radio"]:checked,
  [type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
  }
  [type="radio"]:checked+label,
  [type="radio"]:not(:checked)+label {
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
  }
  [type="radio"]:checked+label:before,
  [type="radio"]:not(:checked)+label:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ced4da;
    border-radius: 100%;
    background: #fff;
  }
  [type="radio"]:checked+label:after,
  [type="radio"]:not(:checked)+label:after {
    content: "";
    width: 10px;
    height: 10px;
    background: #420083;
    position: absolute;
    top: 4px;
    left: 4px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  [type="radio"]:not(:checked)+label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  [type="radio"]:checked+label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  [data-field-name="aioa_icontype"],
  [data-field-name="aioa_iconsize"] {
    display: flex;
    flex-wrap: wrap;
  }
  [data-field-name="aioa_icontype"] .form-label,
  [data-field-name="aioa_iconsize"] .form-label {
    flex: 0 0 100%;
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-label,
  [data-field-name="aioa_iconsize"] .form-check .form-check-label {
    width: 130px;
    height: 130px;
    padding: 10px !important;
    text-align: center;
    background-color: #fff;
    outline: 4px solid #fff;
    outline-offset: -4px;
    border-radius: 10px;
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-label::after,
  [data-field-name="aioa_iconsize"] .form-check .form-check-label::after {
    content: none !important;
    display: none !important;
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-label img,
  [data-field-name="aioa_iconsize"] .form-check .form-check-label img {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-input[type="radio"]:not(:checked)+label::before,
  [data-field-name="aioa_iconsize"] .form-check .form-check-input[type="radio"]:not(:checked)+label::before {
    content: none;
    display: none;
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-input[type="radio"]:checked+label,
  [data-field-name="aioa_iconsize"] .form-check .form-check-input[type="radio"]:checked+label {
    outline-color: #80c944;
  }
  [data-field-name="aioa_icontype"] .form-check .form-check-input[type="radio"]:checked+label::before,
  [data-field-name="aioa_iconsize"] .form-check .form-check-input[type="radio"]:checked+label::before {
    content: "";
    width: 20px;
    height: 20px;
    position: absolute;
    left: auto;
    right: -4px;
    top: -4px;
    background: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 25 25\' class=\'aioa-feature-on\'%3E%3Cg%3E%3Ccircle fill=\'%2343A047\' cx=\'12.5\' cy=\'12.5\' r=\'12\'%3E%3C/circle%3E%3Cpath fill=\'%23FFFFFF\' d=\'M12.5,1C18.9,1,24,6.1,24,12.5S18.9,24,12.5,24S1,18.9,1,12.5S6.1,1,12.5,1 M12.5,0C5.6,0,0,5.6,0,12.5S5.6,25,12.5,25S25,19.4,25,12.5S19.4,0,12.5,0L12.5,0z\'%3E%3C/path%3E%3C/g%3E%3Cpolygon fill=\'%23FFFFFF\' points=\'9.8,19.4 9.8,19.4 9.8,19.4 4.4,13.9 7.1,11.1 9.8,13.9 17.9,5.6 20.5,8.4 \'%3E%3C/polygon%3E%3C/svg%3E") no-repeat center center/contain !important;
    border: none;
  }
  [data-field-name="aioa_iconposition"] {
    display: flex;
    flex-wrap: wrap;
    margin-left: -15px;
    margin-right: -15px;
  }
  [data-field-name="aioa_iconposition"] .form-label,
  [data-field-name="aioa_iconposition"] .form-text {
    flex: 0 0 calc(100% - 30px);
    width: calc(100% - 30px);
    margin-left: 15px;
    margin-right: 15px;
  }
  [data-field-name="aioa_iconposition"] .form-check {
    flex: 0 0 calc(25% - 30px);
    width: calc(25% - 30px);
    margin-left: 15px;
    margin-right: 15px;
  }
</style>',
        'aioa_is_enabled'=>'Enable',
        'aioa_colorcode'=>'Hex color code:',
        'aioa_colorcodedesc'=>'You can customize the ADA Widget color. For example: FF5733',
        'aioa_iconposition'=>'Icon Position:',
        'aioa_iconpositiondesc'=>'Where would you like to place the accessibility icon on your site?',
        'aioa_icontype'=>'Icon Type:',
        'aioa_icon_type_1'=>'Accessibility',
        'aioa_icon_type_2'=>'Wheelchair',
        'aioa_icon_type_3'=>'Low Vision',
        'aioa_icontypedesc'=>'<div class="row mb-3 d-none">
<div class="col-md-1" id="aioa_icon_type_1_image"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
<div class="col-md-1 d-none" id="aioa_icon_type_2_image"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-2.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
<div class="col-md-2 d-none" id="aioa_icon_type_3_image"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-3.svg" width="55" height="55" style="background-color:#6f42c1;border-radius:100%"></div>
</div><script>function showhideaioicontype() {
    setTimeout(function() {
         var getSelectedValue = document.querySelector( \'input[name="Settings[aioa_iconposition]"]:checked\');
        if(getSelectedValue == null) {
            document.querySelector(\'input[name="Settings[aioa_iconposition]"][value="aioa_bottom_right"]\').click();
        }
        var getSelectedValueaioa_icontype = document.querySelector( \'input[name="Settings[aioa_icontype]"]:checked\');
        if(getSelectedValueaioa_icontype == null) {
            document.querySelector(\'input[name="Settings[aioa_icontype]"][value="aioa_icon_type_1"]\').click();
        }
    
        var getSelectedValueaioa_iconsize = document.querySelector( \'input[name="Settings[aioa_iconsize]"]:checked\');
        if(getSelectedValueaioa_iconsize == null) {
            document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_default_icon"]\').click();
        }
        var getSelectedValueaioa_colorcode = document.querySelector( \'input[name="Settings[aioa_colorcode]"]\').value;
        if(getSelectedValueaioa_colorcode == "") {
            document.querySelector(\'input[name="Settings[aioa_colorcode]"]\').value="420083";
        }
    },500);
    
    setTimeout(function() {
        var getSelectedValueaioa_icontype_value = document.querySelector( \'input[name="Settings[aioa_icontype]"]:checked\').value;
        //var resImage = getSelectedValueaioa_icontype_value.replace("_", "-");
        var resImage=getSelectedValueaioa_icontype_value.replace(new RegExp(\'_\', \'g\'), \'-\');
        var resImage = "https://www.skynettechnologies.com/sites/default/files/"+resImage+".svg";
        console.log(resImage);
        
        var aioa_big_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_big_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_big_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" alt="Big" title="Big" width="75" height="75" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_medium_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_medium_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_medium_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" alt="Medium" title="Medium" width="65" height="65" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_default_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_default_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_default_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" alt="Default" title="Default" width="55" height="55" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_small_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_small_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_small_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" alt="Small" title="Small" width="45" height="45" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_extra_small_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_extra_small_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_extra_small_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" alt="Extra Small" title="Extra Small" width="35" height="35" style="background-color:#6f42c1;border-radius:100%">\';
    },500);
}

    setTimeout(function() {
        /*=== Set Image to radio button label ===*/
        var aioa_icon_type_1_id=document.querySelector(\'input[name="Settings[aioa_icontype]"][value="aioa_icon_type_1"]\').id;
        document.querySelector(\'label[for="\'+aioa_icon_type_1_id+\'"]\').innerHTML=\'<img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" alt="Accessibility" title="Accessibility" width="55" height="55" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_icon_type_2_id=document.querySelector(\'input[name="Settings[aioa_icontype]"][value="aioa_icon_type_2"]\').id;
        document.querySelector(\'label[for="\'+aioa_icon_type_2_id+\'"]\').innerHTML=\'<img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-2.svg" alt="Wheelchair" title="Wheelchair" width="55" height="55" style="background-color:#6f42c1;border-radius:100%">\';
        
        var aioa_icon_type_3_id=document.querySelector(\'input[name="Settings[aioa_icontype]"][value="aioa_icon_type_3"]\').id;
        document.querySelector(\'label[for="\'+aioa_icon_type_3_id+\'"]\').innerHTML=\'<img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-3.svg" alt="Low Vision" title="Low Vision" width="55" height="55" style="background-color:#6f42c1;border-radius:100%">\';
        
    },500);
    
    var aioa_icon_types = document.getElementsByName("Settings[aioa_icontype]");
    
    var prev="aioa_icon_type_1";
    for(var i = 0; i < aioa_icon_types.length; i++){
        aioa_icon_types[i].addEventListener("change", function() {
            //console.log("change call"+this.value+" pr "+prev);
            if (this.value != prev) {
                prev = this.value;
                showhideaioicontype();
            }
        });
    }
showhideaioicontype();
</script>',
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
