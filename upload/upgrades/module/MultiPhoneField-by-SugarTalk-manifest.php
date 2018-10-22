<?php
global $manifest;
global $installdefs;

$manifest = array (
    'acceptable_sugar_versions' => array (
		  '6.1.*',
		  '6.2.*',
		  '6.3.*',
    ),
    'published_date' => '2011-09-19 14:00:00',

    'version' => '0.2',

    'author' => 'SugarTalk.net',
    'description' => 'Multi phone fields for SugarCRM',
    'is_uninstallable' => true,
    'name' => 'MultiPhoneFields by SugarTalk',
    'type' => 'module',
    'remove_tables' => 'prompt',
);

$installdefs = array (

    'id' => 'MultiPhones',
    'language'=> array(
        array(
			'from'=> '<basepath>/language/application.ru_ru.php',
			'to_module'=> 'application',
			'language'=>'ru_ru'
		),
		array(
			'from'=> '<basepath>/language/application.en_us.php',
			'to_module'=> 'application',
			'language'=>'en_us'
		),
		array(
			'from'=> '<basepath>/language/editcustomfields.ru_ru.php',
			'to_module'=> 'DynamicFields',
			'language'=>'ru_ru'
		),
		array(
			'from'=> '<basepath>/language/editcustomfields.en_us.php',
			'to_module'=> 'DynamicFields',
			'language'=>'en_us'
		),
		array(
			'from'=> '<basepath>/language/modulebuilder.ru_ru.php',
			'to_module'=> 'ModuleBuilder',
			'language'=>'ru_ru'
		),
		array(
			'from'=> '<basepath>/language/modulebuilder.en_us.php',
			'to_module'=> 'ModuleBuilder',
			'language'=>'en_us'
		),
    ),
    'copy' => array(
        array('from'=> '<basepath>/install/include/SugarFields/Fields/New_phone/',
              'to'=> 'include/SugarFields/Fields/New_phone/',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/TemplateNew_phone.php',
              'to'=> 'modules/DynamicFields/templates/Fields/TemplateNew_phone.php',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/Forms/new_phone.php',
              'to'=> 'modules/DynamicFields/templates/Fields/Forms/new_phone.php',
        ),
        array('from'=> '<basepath>/install/modules/DynamicFields/templates/Fields/Forms/new_phone.tpl',
              'to'=> 'modules/DynamicFields/templates/Fields/Forms/new_phone.tpl',
        ),
        array('from'=> '<basepath>/install/images',
              'to'=> 'custom/themes/default/images',
        ),
    ),
);
?>
