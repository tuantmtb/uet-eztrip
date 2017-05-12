<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property int $id
 * @property string $full_name
 * @property string $phone
 * @property string $address
 * @property string $email
 * @property string $name_on_card
 * @property string $card_number
 * @property string $expiration_date_month
 * @property string $expiration_date_year
 * @property string $ccv
 * @property int $number_of_people
 * @property int $tour_id
 * @property int $tourist_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Tour $tour
 * @property-read \App\User $tourist
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCardNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCcv($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereExpirationDateMonth($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereExpirationDateYear($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereFullName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereNameOnCard($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereNumberOfPeople($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereTourId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereTouristId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $guarded = [];

    /**
     * return tour trong hóa đơn
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tour()
    {
        return $this->belongsTo('\App\Tour', 'tour_id');
    }


    /**
     * return user là Hướng dẫn viên tạo tour đó
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tourist()
    {
        return $this->belongsTo('\App\User', 'tourist_id');
    }

}
