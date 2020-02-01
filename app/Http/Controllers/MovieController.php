<?php

namespace App\Http\Controllers;

use App\Exceptions\ServiceException;
use App\Interfaces\StatusCode;
use App\Traits\Utils;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    use Utils;

    public function movies()
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

        return $this->sendSuccess("success", $movies->docs);
    }
}
