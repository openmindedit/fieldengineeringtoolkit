<?php namespace OpenMindedIT\FieldEngineeringToolkit\Models;

use Model;

class Formhistory extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = [];
    
    public $timestamps = false;

    public $table = 'renatio_formbuilder_form_logs';

    public $rules = [
    ];
}
