<?php
$current_domain=isset($_SERVER['HTTP_HOST'])?$_SERVER['HTTP_HOST']:'-';

$string= [
    'name' => 'All in One Accessibility',
    'description' => 'Quick Web Accessibility Implementation with All in One Accessibility!',
    'fields' => [
        'title' => 'All in One Accessibility Settings',
        'aioa_licensekey'=>'License key required for full version',
        'aioa_licensekeydesc'=>'<strong id="aioa_licensekey_desc">Please <a href="https://www.skynettechnologies.com/add-ons/cart/?add-to-cart=116&variation_id=117&quantity=1&utm_source='.$current_domain.'&utm_medium=OctoberCMS-module&&utm_campaign=purchase-plan" target="_blank">Upgrade</a> to paid version of All in One Accessibility®.</strong>
    <span id="invalid-key-msg" class="text-danger" style="display: none;">Please enter a valid key</span><script>
    setTimeout(function() {
        const submitbtn=document.querySelector(\'button[type="submit"]\');
        submitbtn.addEventListener("click", function() {
            setTimeout(function() {
                //window.location.reload();
                var widget_position=document.querySelector( \'input[name="Settings[aioa_iconposition]"]:checked\').value;
                widget_position = widget_position.replace(/aioa_/g, \'\');
                
                var widget_color_code=document.querySelector( \'input[name="Settings[aioa_colorcode]"]\').value;
                
                var widget_icon_type=document.querySelector( \'input[name="Settings[aioa_icontype]"]:checked\').value;
                widget_icon_type = widget_icon_type.replace(/_/g, \'-\');
                
                var widget_icon_size=document.querySelector( \'input[name="Settings[aioa_iconsize]"]:checked\').value;
                widget_icon_size = widget_icon_size.replace(/_/g, \'-\');
                
                var widget_icon_size_type=document.querySelector( \'input[name="Settings[aioa_iconsizetype]"]:checked\').value;
                var is_widget_custom_size= (widget_icon_size_type=="aioa_iconsizetype_custom")?1:0;
                
                var widget_icon_size_custom=document.querySelector( \'input[name="Settings[aioa_custom_iconsize]"]\').value;
                
                var widget_position_type=document.querySelector( \'input[name="Settings[aioa_positiontype]"]:checked\').value;
                var is_widget_custom_position= (widget_position_type=="aioa_positiontype_custom")?1:0;
                
                var custom_position_horizontal=document.querySelector( \'input[name="Settings[aioa_custom_position_horizontal]"]\').value;
                var custom_position_vertical=document.querySelector( \'input[name="Settings[aioa_custom_position_vertical]"]\').value;
                var custom_position_horizontal_type=document.querySelector( \'select[name="Settings[aioa_custom_position_horizontal_type]"]\').value;
                var custom_position_vertical_type=document.querySelector( \'select[name="Settings[aioa_custom_position_vertical_type]"]\').value;
                var widget_position_left=(custom_position_horizontal_type=="to_the_left")?custom_position_horizontal:"";
                var widget_position_right=(custom_position_horizontal_type=="to_the_right")?custom_position_horizontal:"";
                var widget_position_top=(custom_position_vertical_type=="to_the_top")?custom_position_vertical:"";
                var widget_position_bottom=(custom_position_vertical_type=="to_the_bottom")?custom_position_vertical:"";
                var widget_size=document.querySelector( \'input[name="Settings[aioa_widget_size]"]:checked\').value;
                var widget_size= (widget_size=="aioa_widget_size_over_size")?1:0;
                
                const formdata = new FormData();
                formdata.append("u", "'.$current_domain.'");
                formdata.append("widget_position", widget_position);
                formdata.append("widget_color_code", widget_color_code);
                formdata.append("widget_icon_type", widget_icon_type);
                formdata.append("widget_icon_size", widget_icon_size);
                formdata.append("is_widget_custom_size", is_widget_custom_size);
                formdata.append("widget_icon_size_custom", widget_icon_size_custom);
                formdata.append("is_widget_custom_position", is_widget_custom_position);
                formdata.append("widget_position_left", widget_position_left);
                formdata.append("widget_position_right", widget_position_right);
                formdata.append("widget_position_top", widget_position_top);
                formdata.append("widget_position_bottom", widget_position_bottom);
                formdata.append("widget_size", widget_size);
                
                const requestOptions = {
                  method: "POST",
                  body: formdata,
                  redirect: "follow"
                };
                fetch("https://ada.skynettechnologies.us/api/widget-setting-update-platform", requestOptions)
                  .then((response) => response.text())
                  .then((result) => console.log(result))
                  .catch((error) => console.error(error));
            
            },700);
        });
    },500);
</script>
<style>
  .custom-iconsize {
    width: 40% !important;
  }
  .custom-position {
    width: 20% !important;
    margin-right: 5px;
  }
  .settings-page.size-large{
    max-width: 1050px;
    background: #e9efff;
    border-radius: 19px;
    margin: 0 auto 40px;
    padding: 27px 20px 30px 20px;
    display:block;
    height:auto;
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
  .ada-banner-section{padding-left: 15px; padding-right: 15px; margin-bottom: 20px;}
  form.layout.settings-page.size-large .form-buttons {
    padding-top:30px;
  }
</style>',
        'aioa_is_enabled'=>'Enable',
        'aioa_colorcode'=>'Pick a color for widget:',
        'aioa_colorcodedesc'=>'',
        'aioa_iconposition'=>'Fixed Position Options',
        'aioa_iconpositiondesc'=>'Where would you like to place the accessibility icon on your site?',
        'aioa_positiontype'=>'Position Type:',
        'aioa_positiontypedesc'=>'<script>
        function position_options(a) {
             if (a == "aioa_positiontype_fixed") {
                  document.querySelectorAll(\'.custom-position\').forEach(option => {
                    option.style.display = "none";
                    });
                  document.querySelectorAll(\'.default-position\').forEach(option1 => {
                    option1.style.display = "";
                  });
             } else {
                    document.querySelectorAll(\'.custom-position\').forEach(option => {
                        option.style.display = "";
                    });
                  document.querySelectorAll(\'.default-position\').forEach(option1 => {
                    option1.style.display = "none";
                  });
             }
        }
       
     
       function size_options(a) {
           console.log(a);
           if (a == "aioa_iconsizetype_fixed") {
                  document.querySelectorAll(\'.custom-iconsize\').forEach(option => {
                    option.style.display = "none";
                    });
                  document.querySelectorAll(\'.default-iconsize\').forEach(option1 => {
                    option1.style.display = "";
                  });
                 console.log("if");
             } else {
                    document.querySelectorAll(\'.custom-iconsize\').forEach(option => {
                        option.style.display = "";
                    });
                  document.querySelectorAll(\'.default-iconsize\').forEach(option1 => {
                    option1.style.display = "none";
                  });
                  console.log("else");
             }
      }
      
      setTimeout(function() {
           const positionOptions = document.querySelectorAll(\'input[name="Settings[aioa_positiontype]"]\');
            positionOptions.forEach(option => {
                option.addEventListener("click", (event) => {
                position_options(event.target.value);
            });
          });
          
          const widgetIconSizeOptions = document.querySelectorAll(\'input[name="Settings[aioa_iconsizetype]"]\');
            widgetIconSizeOptions.forEach(option => {
                option.addEventListener("click", (event) => {
                size_options(event.target.value);
            });
          });
          var selectedPositionType="aioa_positiontype_fixed";
          if(document.querySelector(\'input[name="Settings[aioa_positiontype]"]:checked\')!==undefined){
            selectedPositionType= document.querySelector(\'input[name="Settings[aioa_positiontype]"]:checked\').value;
          }
          var selectedIconType="aioa_iconsizetype_fixed";
          if(document.querySelector(\'input[name="Settings[aioa_iconsizetype]"]:checked\')!==undefined){
            selectedIconType= document.querySelector(\'input[name="Settings[aioa_iconsizetype]"]:checked\').value;
          }
         
        position_options(selectedPositionType);
        size_options(selectedIconType);
       },500);
      </script>',
        'aioa_positiontype_fixed'=>'Fix Position',
        'aioa_positiontype_custom'=>'Custom Position',
        'aioa_custom_position_horizontal'=>'Horizontal (px)',
        'aioa_custom_position_vertical'=>'Vertical (px)',
        'aioa_custom_position_horizontal_type'=>'Position',
        'aioa_custom_position_vertical_type'=>'Position',
        'to_the_left'=>'to the Left',
        'to_the_right'=>'to the Right',
        'to_the_top'=>'to the Top',
        'to_the_bottom'=>'to the bottom',
        'aioa_widget_size'=>'Widget Size',
        'aioa_widget_sizedesc'=>'It only work on desktop view',
        'aioa_widget_size_regular_size'=>'Regular Size',
        'aioa_widget_size_over_size'=>'Oversize',
        'aioa_icontype'=>'Icon Type:',
        'aioa_icon_type_1'=>'Icon Type',
        'aioa_icon_type_2'=>'Icon Type',
        'aioa_icon_type_3'=>'Icon Type',
        'aioa_icon_type_4'=>'Icon Type',
        'aioa_icon_type_5'=>'Icon Type',
        'aioa_icon_type_6'=>'Icon Type',
        'aioa_icon_type_7'=>'Icon Type',
        'aioa_icon_type_8'=>'Icon Type',
        'aioa_icon_type_9'=>'Icon Type',
        'aioa_icon_type_10'=>'Icon Type',
        'aioa_icon_type_11'=>'Icon Type',
        'aioa_icon_type_12'=>'Icon Type',
        'aioa_icon_type_13'=>'Icon Type',
        'aioa_icon_type_14'=>'Icon Type',
        'aioa_icon_type_15'=>'Icon Type',
        'aioa_icon_type_16'=>'Icon Type',
        'aioa_icon_type_17'=>'Icon Type',
        'aioa_icon_type_18'=>'Icon Type',
        'aioa_icon_type_19'=>'Icon Type',
        'aioa_icon_type_20'=>'Icon Type',
        'aioa_icon_type_21'=>'Icon Type',
        'aioa_icon_type_22'=>'Icon Type',
        'aioa_icon_type_23'=>'Icon Type',
        'aioa_icon_type_24'=>'Icon Type',
        'aioa_icon_type_25'=>'Icon Type',
        'aioa_icon_type_26'=>'Icon Type',
        'aioa_icon_type_27'=>'Icon Type',
        'aioa_icon_type_28'=>'Icon Type',
        'aioa_icon_type_29'=>'Icon Type',
        'aioa_icontypedesc'=>'<div class="row mb-3 d-none">
<div class="col-md-1" id="aioa_icon_type_1_image"><img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg" width="55" height="55" style="background-color:#420083;border-radius:100%"></div>
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
            document.querySelector(\'input[name="Settings[aioa_colorcode]"]\').value="#420083";
        }
    },500);
    
    setTimeout(function() {
        var getSelectedValueaioa_icontype_value = document.querySelector( \'input[name="Settings[aioa_icontype]"]:checked\').value;
        //var resImage = getSelectedValueaioa_icontype_value.replace("_", "-");
        var resImage=getSelectedValueaioa_icontype_value.replace(new RegExp(\'_\', \'g\'), \'-\');
        var resImage = "https://www.skynettechnologies.com/sites/default/files/"+resImage+".svg";
        
        var aioa_color_element =document.querySelector(\'input[name="Settings[aioa_colorcode]"]\');
        var aioa_color="#420083";
        if(aioa_color_element !== null && aioa_color_element !== undefined){
            aioa_color=aioa_color_element.value;
        }
        
        var aioa_big_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_big_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_big_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" id="aioa_big_icon" alt="Big" title="Big" width="75" height="75" style="background-color:\'+aioa_color+\';border-radius:100%">\';
        
        var aioa_medium_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_medium_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_medium_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" id="aioa_medium_icon" alt="Medium" title="Medium" width="65" height="65" style="background-color:\'+aioa_color+\';border-radius:100%">\';
        
        var aioa_default_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_default_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_default_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" id="aioa_default_icon" alt="Default" title="Default" width="55" height="55" style="background-color:\'+aioa_color+\';border-radius:100%">\';
        
        var aioa_small_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_small_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_small_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" id="aioa_small_icon" alt="Small" title="Small" width="45" height="45" style="background-color:\'+aioa_color+\';border-radius:100%">\';
        
        var aioa_extra_small_icon_id=document.querySelector(\'input[name="Settings[aioa_iconsize]"][value="aioa_extra_small_icon"]\').id;
        document.querySelector(\'label[for="\'+aioa_extra_small_icon_id+\'"]\').innerHTML=\'<img src="\'+resImage+\'" id="aioa_extra_small_icon" alt="Extra Small" title="Extra Small" width="35" height="35" style="background-color:\'+aioa_color+\';border-radius:100%">\';
    },500);
}


    setTimeout(function() {
        /*=== Set Image to radio button label ===*/
        for (let typei = 1; typei <= 29; typei++) {
            var aioa_icon_type_1_id=document.querySelector(\'input[name="Settings[aioa_icontype]"][value="aioa_icon_type_\'+typei+\'"]\').id;
            document.querySelector(\'label[for="\'+aioa_icon_type_1_id+\'"]\').innerHTML=\'<img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-\'+typei+\'.svg" id="aioa_icon_type_\'+typei+\'" alt="Accessibility" title="Accessibility" width="55" height="55" style="background-color:#420083;border-radius:100%">\';
        }
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
    function seticoncolorpreview() {
        var aioa_color =document.querySelector(\'input[name="Settings[aioa_colorcode]"]\');
      var aioa_icon_types = document.getElementsByName("Settings[aioa_icontype]");
        console.log(aioa_color.value);
        for(var i = 1; i <= aioa_icon_types.length; i++) {
            document.getElementById("aioa_icon_type_"+i).style.backgroundColor=aioa_color.value;
        }
        document.getElementById("aioa_big_icon").style.backgroundColor=aioa_color.value;
        document.getElementById("aioa_medium_icon").style.backgroundColor=aioa_color.value;
        document.getElementById("aioa_default_icon").style.backgroundColor=aioa_color.value;
        document.getElementById("aioa_small_icon").style.backgroundColor=aioa_color.value;
        document.getElementById("aioa_extra_small_icon").style.backgroundColor=aioa_color.value;
    }
    var aioa_color =document.querySelector(\'input[name="Settings[aioa_colorcode]"]\');
    aioa_color.addEventListener("change", function() {
        seticoncolorpreview();
    });
    setTimeout(function() {
        seticoncolorpreview();
    },550);
    
    
    
</script>',
        'aioa_top_left'=>'Top Left',
        'aioa_top_center'=>'Top Center',
        'aioa_top_right'=>'Top Right',
        'aioa_middle_left'=>'Middle Left',
        'aioa_middle_right'=>'Middle Right',
        'aioa_bottom_left'=>'Bottom Left',
        'aioa_bottom_center'=>'Bottom Center',
        'aioa_bottom_right'=>'Bottom Right',
        'aioa_iconsizetype'=>'Widget Icon Size for Desktop',
        'aioa_iconsizetype_fixed'=>'Fixed Icon Size',
        'aioa_iconsizetype_custom'=>'Custom Icon Size',
        'aioa_iconsize'=>'Fixed Icon Size:',
        'aioa_iconsizedesc'=>'',
        'aioa_custom_iconsize'=>'Custom Widget Icon Size for Desktop (px)',
        'aioa_custom_iconsizedesc'=>'20-150 px are recommended values.',
        'aioa_big_icon'=>'Big',
        'aioa_medium_icon'=>'Medium',
        'aioa_default_icon'=>'Default',
        'aioa_small_icon'=>'Small',
        'aioa_extra_small_icon'=>'Extra Small'
    ],
    'settings' => [
        'title' => 'All in One Accessibility Settings',
        'description' => 'Manage All in One Accessibility settings'
    ]
];


return $string;
