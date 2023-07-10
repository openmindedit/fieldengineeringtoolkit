<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Engineers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_engineers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'planning' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Planning', 'key' => 'id'],
    ];

    public $belongsTo = [
        'visits' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Visits', 'key' => 'id'],
    ];
}
