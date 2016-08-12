<?php namespace Dt\Notes\Models;

use Model;

/**
 * Model
 */
class Keynote extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dt_notes_keynotes';

    public $belongsTo = [
        'section' => 'Dt\Notes\Models\Section',
        'table' => 'dt_notes_keynotes'
    ];
}