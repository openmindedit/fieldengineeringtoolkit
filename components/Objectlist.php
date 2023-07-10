<?php namespace OpenMindedIT\FieldEngineeringToolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Objects;

class Objectlist extends ComponentBase
{
    public $item;
    public $object;
    public function componentDetails()
    {
        return [
            'name' => 'Objectlist',
            'description' => 'List of all the registred objects'
        ];
    }

    public function defineProperties()
    {
    }

    public function onRun()
    {
        $this->item = Objects::get()->toArray();
    }
}
