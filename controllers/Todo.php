<?php namespace OpenMindedIT\FieldEngineeringToolkit\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class Todo extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = [
        'Manager' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('OpenMindedIT.FieldEngineeringToolkit', 'main-menu-item', 'side-menu-item6');
    }

}
