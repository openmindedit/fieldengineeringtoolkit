<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Customers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;
    
    protected $propagatable = [];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_customers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // public $belongsToMany = [
    //     'planning' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Planning', 'key' => 'id'],
    // ];

    public $hasMany = [
        'objects' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'customer_id'],
        'visits' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Visits', 'key' => 'visit_date'],
        'planning' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Planning', 'key' => 'id'],
        'modem' => \OpenMindedIT\FieldEngineeringToolkit\Models\Modems::class
    ];
    
    public $attachMany = [
        'photos' => \System\Models\File::class
    ];
}
