<?php

namespace App\Http\Controllers;

use App\Exceptions\ServiceException;
use App\Interfaces\StatusCode;
use App\Traits\Utils;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    use Utils;

    public function movies(Request $request)
    {
        $headers = [
            'Authorization: Bearer ' . env('API_KEY'),
            'Content-Type: application/json'
        ];
        $movies = $this->getRequest(env('BASE_URL'), $headers);

        if (is_null(optional($movies)->docs) || !$movies)
        {
            throw new ServiceException("Data not found", StatusCode::NOT_FOUND);
        }


        switch ($request->sort_by) {
            case "budget":
                $data = collect($movies->docs)->sortBy('budgetInMillions')->toArray();
                return $this->sendSuccess("success", $data);
                break;
            case "runtime":
                $data = collect($movies->docs)->sortBy('runtimeInMinutes')->toArray();
                return $this->sendSuccess("success", $data);
                break;
            case "box_office":
                $data = collect($movies->docs)->sortBy('boxOfficeRevenueInMillions')->toArray();
                return $this->sendSuccess("success", $data);
                break;
            default:
                return $this->sendSuccess("success", $movies->docs);
        }


    }
}
