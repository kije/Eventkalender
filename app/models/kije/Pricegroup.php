<?php


namespace kije;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class kije\Pricegroup
 *
 * @property int $ID
 * @property string $name
 * @property string $preis
 * @propertx Collection $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\
 *             'kije\Event[] $events
 * @property-read \Illuminate\Database\Eloquent\Collection|\
 *             'kije\Event[] $events
 * @method static \Illuminate\Database\Query\Builder|\kije\Pricegroup whereID($value) 
 * @method static \Illuminate\Database\Query\Builder|\kije\Pricegroup whereName($value) 
 * @method static \Illuminate\Database\Query\Builder|\kije\Pricegroup wherePreis($value) 
 */
class Pricegroup extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Preisgruppe';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
        'name',
        'preis'
    );

    public function events()
    {
        return $this->belongsToMany(
            'kije\Event',
            'Veranstaltung_hat_Preisgruppe',
            'fk_Preisgruppe_ID',
            'fk_Veranstaltung_ID'
        );
    }

}
