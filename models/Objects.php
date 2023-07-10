<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use October\Rain\Database\Traits\Sluggable;
use Illuminate\Support\Str;
use System\Models\File;
use Model;

/**
 * Model
 */
class Objects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Multisite;
    use \October\Rain\Database\Traits\Sluggable;
    
    protected $propagatable = [];
    protected $slugs = ['slug' => 'id'];
    protected $dates = ['deleted_at'];
    
    public $table = 'openmindedit_fieldengineeringtoolkit_objects';

    public $rules = [
    ];

    // start Sluggable
    public $sluggable = [
        'slug' => ['field' => 'id']
    ];

    public function generateSlug($value, $attribute = null)
    {
        return Str::slug($value);
    }
    // eind Sluggable
 
    // start maak unieke code per object
    public function beforeCreate()
    {
        // Generate a unique code for the object
        $code = Str::random(8);

        // Check if the code already exists in the database
        while (Objects::where('code', $code)->count() > 0) {
            $code = Str::random(8);
        }

        // Set the generated code for the object
        $this->code = $code;
    }
    // eind maak unieke code per object
 
    public $hasMany = [
        // 'relatedObjects' => Objects::class,
        'relatedObjects' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'related_id'],
        'visit' => Visits::class,
    ];

    public $belongsTo = [
        'parentObject' => ['OpenMindedIT\FieldEngineeringToolkit\Models\Objects', 'key' => 'parent_id'],
        'customer' => Customers::class,
        'engineer' => Engineers::class,
    ];

    public $relatedOrderBy = ['object_name' => 'asc'];

    public $attachMany = [
        'photos' => \System\Models\File::class
    ];
}
