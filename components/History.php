<?php namespace Openmindedit\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Renatio\FormBuilder\Models\FormLog;

/**
 * History Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class History extends ComponentBase
{
    public $item;

    public function componentDetails()
    {
        return [
            'name' => 'history',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->item = FormLog::get()->toArray();
        $this->addCss('/plugins/openmindedit/fieldengineeringtoolkit/assets/print.css');
    }
}
