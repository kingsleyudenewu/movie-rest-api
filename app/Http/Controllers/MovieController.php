<?php

namespace App\Http\Controllers;

use App\Traits\Utils;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    use Utils;

    public function movies()
    {
        $movies = $this->getRequest(env('BASE_URL'));

        if (is_null(optional($movies)->docs))
        {
            return $this->sendError("Data not found");
        }

        return $this->sendSuccess("success");
    }
}
