<?php namespace Openmindedit\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Customers;


class Customerlist extends ComponentBase
{
    public $customer;
    public function componentDetails()
    {
        return [
            'name' => 'customerlist Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->customer = Customers::with('objects', 'visits', 'planning')->get()->toArray();
    }
}
