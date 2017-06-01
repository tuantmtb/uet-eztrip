<?php

namespace App\Http\Controllers;

use App\Role;
use App\Tour;
use App\User;
use Illuminate\Support\Collection;

class TourBatchImportController extends Controller
{
    /**
     * @param array|Collection $data
     * @return Collection
     */
    private static function collect($data) {
        return $data instanceof Collection ? $data : collect($data);
    }

    /**
     * @param array|Collection $data
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function createOne($data, $id = null) {
        $data = self::collect($data);

        $tourguide_role = Role::findByName('tourguide');
        /**
         * @var User $tourguide
         */
        $tourguide = User::firstOrCreate([
            'email' => str_slug($data->get('tour_guide'), '.') . "@gmail.com"
        ], [
            'name' => $data->get('tour_guide'),
            'password' => \Hash::make('admin'),
        ]);
        $tourguide->attachRole($tourguide_role);

        $place = self::collect($data->get('place', []));
        $attrs = [
            'name' => $data->get('name'),
            'url_cover' => $data->get('cover'),
            'url_gird' => $data->get('gird'),
            'place' => $place->get('name'),
            'description' => "<p>" . str_replace('\n', '<br>', $data->get('description')) . "<p>",
            'short_description' => trim(explode('\n', strip_tags($data->get('description')))[0], 255),
            'tourguide_id' => $tourguide->id,
            'price' => $data->get('price', random_int(1, 100))
        ];
        if ($id) {
            $tour = Tour::firstOrCreate(compact('id'));
            $tour->update($attrs);
        } else {
            $tour = Tour::create($attrs);
        }
        return $tour;
    }
}
