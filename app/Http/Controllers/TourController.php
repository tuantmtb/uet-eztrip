<?php

namespace App\Http\Controllers;

use App\Forms\TourForm;
use App\Http\Requests\CreateTourRequest;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Kris\LaravelFormBuilder\FormBuilder;
use Symfony\Component\Finder\SplFileInfo;

class TourController extends Controller
{
    /**
     * TourController constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:create_tour')->only('create', 'store');
    }


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

    public function create()
    {
        return view('tour.create');
    }

    public function store(CreateTourRequest $request)
    {
        $request_only = [
            'name',
            'short_description',
            'description',
            'place',
            'price',
            'time_duration',
            'url_cover',
            'url_gird'
        ];
        /**
         * @var Tour $tour
         */
        $tour = Tour::create(array_merge($request->only($request_only), [
            'tourguide_id' => \Auth::id()
        ]));

        return redirect()->route('tour.show', $tour->id);
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        $mapData = self::mapData([$tour]);

        return view('tour.show', compact('tour', 'mapData'));
    }

    public function edit($id) {
        $tour = Tour::findOrFail($id);
        return view('tour.edit', compact('tour'));
    }

    public function update($id, CreateTourRequest $request) {
        /**
         * @var Tour $tour
         */
        $tour = Tour::findOrFail($id);

        $request_only = [
            'name',
            'short_description',
            'description',
            'place',
            'price',
            'time_duration',
            'url_cover',
            'url_gird'
        ];

        $tour->update($request->only($request_only));

        return redirect()->route('tour.show', $tour->id);
    }

    public function lists()
    {
        $tours = Tour::paginate(10);
        $mapData = self::mapData($tours->items());

        return view('tour.list', compact('tours', 'mapData'));
    }

    public function delete($id) {
        /**
         * @var Tour $tour
         */
        $tour = Tour::findOrFail($id);
        $tour->delete();
        \Session::flash('toastr', [
            'level' => 'info',
            'title' => 'Delete tour',
            'message' => "$tour->name has just been deleted",
        ]);
        return redirect()->route('home');
    }
}
