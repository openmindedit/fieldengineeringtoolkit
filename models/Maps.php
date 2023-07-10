<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Maps extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;
    
    protected $propagatable = [];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_maps';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'objects' => \OpenMindedIT\FieldEngineeringToolkit\Models\Objects::class
    ];
}
