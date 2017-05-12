<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
 */
	class Order extends \Eloquent {}
}

namespace App{
/**
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Permission extends \Eloquent {}
}

namespace App{
/**
 * App\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $perms
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Role extends \Eloquent {}
}

namespace App{
/**
 * App\Tour
 *
 * @property int $id
 * @property string $name
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
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeBegin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeDuration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTimeEnd($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereTourguideId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUrlCover($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Tour whereUrlGird($value)
 */
	class Tour extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tour[] $tours
 */
	class User extends \Eloquent {}
}

