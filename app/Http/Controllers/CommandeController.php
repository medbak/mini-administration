<?php


namespace App\Http\Controllers;

use App\Interfaces\WeatherInterface;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    private $weather;

    public function __construct(WeatherInterface $weather)
    {
        $this->weather = $weather;
    }

    public function getDataByname(Request $request)
    {
        $name = $request->query('name');
        $result = $this->weather->getDataByName($name);

        return response()->json($result);
    }

    public function showData($name)
    {
        $result = $this->weather->getDataByName($name);

        $data['list'] = $result;

        return view('weather.showData', $data);

    }
}