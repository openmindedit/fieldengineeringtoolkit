<?php namespace OpenMindedIT\FieldEngineeringToolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Planning;
use Carbon\Carbon;

class Planninglist extends ComponentBase
{
    public $plan;
    public $customer;
    public $engineer;
    public function componentDetails()
    {
        return [
            'name' => 'Planninglist',
            'description' => 'Generates a Planning'
        ];
    }

    public function defineProperties()
    {
    }

    public function onRun()
    {
        $plan = Planning::with('customer', 'engineer')->get()->toArray();

        $plan = array_filter($plan, function($item) {
            return strtotime($item['plandate']) >= strtotime('today');
        });
        usort($plan, function($a, $b) {
            return strtotime($a['plandate']) - strtotime($b['plandate']);
        });
        
        $this->page['plan'] = $plan;
    }
}
