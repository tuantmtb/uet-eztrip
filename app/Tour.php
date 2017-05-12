<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
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
