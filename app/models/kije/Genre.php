<?php

namespace kije;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class kije\Genre
 *
 * @property int $ID
 * @property string $name
 * @property Collection $events
 * @method static \Illuminate\Database\Query\Builder|\kije\Genre whereID($value)
 * @method static \Illuminate\Database\Query\Builder|\kije\Genre whereName($value)
 */
class Genre extends BaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected static $tablename = 'Genre';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'name'
    );

    public function events()
    {
        return $this->hasMany('kije\Event', 'fk_Genre_ID');
    }

}
