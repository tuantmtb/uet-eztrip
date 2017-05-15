<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tour
 *
 * @property int $id
 * @property string $name
 * @property string $short_description
 * @property string $description
 * @property string $place
 * @property string $city
 * @property float $price
 * @property string $time_begin
 * @property string $time_end
 * @property int $time_duration
 * @property string $url_cover
 * @property string $url_gird
 * @property int $tourguide_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read \App\User $tourguide
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour wherePlace($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereShortDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeBegin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTourguideId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUrlCover($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUrlGird($value)
 * @mixin \Eloquent
 */
class Tour extends Model
{
    protected $guarded = [];
    /**
     * return user là Hướng dẫn viên tạo tour đó
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tourguide()
    {
        return $this->belongsTo('\App\User', 'tourguide_id');
    }

    /**
     * return các hóa đơn đã đặt trong tour đó
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('\App\Order', 'tour_id');
    }


}
