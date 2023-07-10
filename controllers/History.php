<?php namespace OpenMindedIT\FieldEngineeringToolkit\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class History extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'Manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OpenMindedIT.FieldEngineeringToolkit', 'main-menu-item', 'side-menu-item');
    }
}
