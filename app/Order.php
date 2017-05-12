<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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
