<?php namespace Acme\Settings\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['social'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_settings_team';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
