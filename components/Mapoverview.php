<?php namespace OpenMindedIT\FieldEngineeringToolkit\Components;

use Cms\Classes\ComponentBase;
use OpenMindedIT\FieldEngineeringToolkit\Models\Maps;
use OpenMindedIT\FieldEngineeringToolkit\Models\Objects;
use Request;

class Mapoverview extends ComponentBase
{
    public $item;
    public $assets;
    public function componentDetails()
    {
        return [
            'name' => 'Map Overview',
            'description' => 'A Map with all your objects'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [
            'maps_name' => [
                'title'             => 'Location',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    // Functie de de gegevens ophaalt uit de database
    public function getMaps_nameOptions()
    {
        return Maps::get()->lists('maps_name', 'maps_name');
    }

    public function onRun()
    {
        // $this->item = Maps::get()->toArray();
        $this->item = Maps::where('maps_name', $this->property('maps_name'))->get()->toArray();
        $this->assets = Objects::get()->toArray();
        $this->addCss('/plugins/openmindedit/fieldengineeringtoolkit/assets/leaflet.css');
        $this->addJs('/plugins/openmindedit/fieldengineeringtoolkit/assets/leaflet.js');
    }

}
