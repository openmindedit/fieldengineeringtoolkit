<?php namespace Openmindedit\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Todo;

class Todolist extends ComponentBase
{
    public $task;
    public function componentDetails()
    {
        return [
            'name' => 'Todolist',
            'description' => 'tasks that still need to be done'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->task = Todo::with('engineer')->get()->toArray();
    }
}
