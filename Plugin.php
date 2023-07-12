<?php namespace OpenMindedIT\FieldEngineeringToolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Renatio.FormBuilder'];

    public function registerComponents()
    {
        return [
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Objectlist' => 'Objectlist',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Objectdetails' => 'Objectdetails',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Mapoverview' => 'Mapoverview',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Planninglist' => 'Planninglist',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\History' => 'History',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Hotlist' => 'Hotlist',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Customerlist' => 'Customerlist',
            '\OpenMindedIT\FieldEngineeringToolkit\Components\Todolist' => 'Todolist',
        ];
    }

    public function registerSettings()
    {
    }
}
