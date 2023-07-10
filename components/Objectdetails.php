<?php namespace Openmindedit\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Openmindedit\Fieldengineeringtoolkit\Models\Objects;
use Openmindedit\Fieldengineeringtoolkit\Models\Maps;
use Openmindedit\Fieldengineeringtoolkit\Models\Visits;
use Openmindedit\Fieldengineeringtoolkit\Models\Customers;
use Openmindedit\Fieldengineeringtoolkit\Models\Engineers;

class Objectdetails extends ComponentBase
{
    public $objects;
    public $engineers;
    public $visit;

    public function componentDetails()
    {
        return [
            'name' => 'Objectdetails',
            'description' => 'Displays details of a single object.'
        ];
    }

    public function defineProperties()
    {
    }

    public function onRun()
    {
        $objects = Objects::with('customer', 'engineer', 'parentObject', 'relatedObjects')->get()->toArray();
        $this->page['object'] = $objects;

        $visit = Visits::with('engineer', 'customer')->get()->toArray();
        $this->page['visit'] = $visit;
    }
}
