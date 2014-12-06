<?php


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Show
 * @property int $ID
 * @property Carbon $datum
 * @property Carbon $zeit
 * @property int $fk_Veranstaltung_ID
 * @property Event $event
 */
class Show extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Vorstellung';

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
        'datum',
        'zeit',
        'fk_Veranstaltung_ID'
    );

    public function getDates()
    {
        return array('datum', 'zeit');
    }

    public function event() {
        return $this->belongsTo('Event', 'fk_Veranstaltung_ID');
    }
}
