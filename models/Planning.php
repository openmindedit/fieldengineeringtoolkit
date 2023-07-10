<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;
use Carbon\Carbon;

/**
 * Model
 */
class Planning extends Model
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
    public $table = 'openmindedit_fieldengineeringtoolkit_planning';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne = [
        'customer' => Customers::class,
    ];

    public $belongsTo = [
        'engineer' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Engineers']
    ];

    public function beforeSave()
    {
        if ($this->plandate) {
            $planDate = Carbon::parse($this->plandate);
            $now = Carbon::now();
            $daysPassed = $now->diffInDays($planDate);

            if ($planDate->isPast() && $daysPassed <= 30) {
                $this->status = 'Due';
            } elseif ($daysPassed > 30) {
                $this->status = 'Closed';
            }
        }
    }

}
