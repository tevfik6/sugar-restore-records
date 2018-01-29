<?php

    $admin_option_defs = array();
    $admin_option_defs['Administration']['<section key>'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'restore_records',

        //Link name label 
        'LBL_RESTORE_RECORDS',

        //Link description label
        'LBL_RESTORE_RECORDS_DESCRIPTION',

        //Link URL - For Sidecar modules
        'javascript:void(parent.SUGAR.App.router.navigate("Restore_records/config", {trigger: true}));',

        //Alternatively, if you are linking to BWC modules
        //'./index.php?module=<module>&action=<action>',
    );

    $admin_group_header[] = array(
        //Section header label
        'LBL_SECTION_RESTORE_RECORDS',

        //$other_text parameter for get_form_header()
        '',

        //$show_help parameter for get_form_header()
        false,

        //Section links
        $admin_option_defs, 

        //Section description label
        'LBL_SECTION_RESTORE_RECORDS_DESCRIPTION'
    );