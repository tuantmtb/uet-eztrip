<?php

namespace App\Http\Controllers;

use App\Forms\TourForm;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Kris\LaravelFormBuilder\FormBuilder;
use Symfony\Component\Finder\SplFileInfo;

class TourController extends Controller
{
    /**
     * @param Collection|array $tours
     * @return array
     */
    public static function mapData($tours) {
        if (!($tours instanceof Collection)) {
            $tours = collect($tours);
        }

        $pins = collect(\File::allFiles(public_path('img/pins')))
            ->map(function($file) {
                /**
                 * @var SplFileInfo $file
                 */
                return str_replace('.png', '', $file->getFilename());
            });
        $markersData = $tours
            ->mapWithKeys(function($tour) use ($pins) {
                /**
                 * @var Tour $tour
                 */
                return [$pins->random() => [[
                    'name' => $tour->name,
                    'location_latitude' => 21 + random_int(272272, 459610)/10000000.0,
                    'location_longitude' => 105 + random_int(7991848, 8526787)/10000000.0,
                    'map_image_url' => $tour->url_gird,
                    'name_point' => $tour->name,
                    'description_point' => str_limit($tour->short_description ?: '', 75),
                    'get_directions_start_address' => '',
                    'phone' => config('app.phone'),
                    'url_point' => route('tour.show', $tour->id),
                ]]];
            });
        $center = [
            'location_latitude' => $markersData->map(function($tour) {
                return collect($tour)->avg('location_latitude');
            })->avg(),
            'location_longitude' => $markersData->map(function($tour) {
                return collect($tour)->avg('location_longitude');
            })->avg(),
        ];
        $mapData = compact('markersData', 'center');
        return $mapData;
    }

    public function create(FormBuilder $formBuilder)
    {
        if (\Auth::user() == null) {
            return redirect('/login');
        }

        $form = $formBuilder->create(TourForm::class, [
            'method' => 'POST',
            'url' => route('tour.store'),
        ]);

        return view('tour.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {

        $form = $formBuilder->create(TourForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        /**
         * @var Tour $tour
         */
        $tour = Tour::create($form->getRequest()->only([
            'name',
            'short_description',
            'description',
            'place',
            'price',
            'time_duration',
            'url_cover',
            'url_gird',
            'tourguide_id'
        ]));

        return redirect()->route('tour.show', $tour->id);
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        $mapData = self::mapData([$tour]);

        return view('tour.show', compact('tour', 'mapData'));
    }

    public function lists()
    {
        $tours = Tour::paginate(10);
        $mapData = self::mapData($tours->items());

        return view('tour.list', compact('tours', 'mapData'));

    }
}
