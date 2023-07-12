<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Todo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = [];

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'openmindedit_fieldengineeringtoolkit_todo';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    public $belongsTo = [
        'engineer' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Engineers'],
    ];

}
