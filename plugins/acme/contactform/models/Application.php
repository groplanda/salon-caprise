<?php namespace Acme\Contactform\Models;

use Model;

/**
 * Model
 */
class Application extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_contactform_order';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'file' => 'System\Models\File'
    ];
}
