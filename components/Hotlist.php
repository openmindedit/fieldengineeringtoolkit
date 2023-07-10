<?php namespace Openmindedit\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Modems;

class Hotlist extends ComponentBase
{
    public $modem;
    public function componentDetails()
    {
        return [
            'name' => 'Modem Hotlist',
            'description' => 'ProActive Modem Issue (without customer contact) Data is manually gathered from CMTS.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->modem = Modems::with('customer')->get()->sortByDesc('status')->toArray();
    }
}
