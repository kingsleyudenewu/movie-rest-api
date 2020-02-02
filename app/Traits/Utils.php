<?php


namespace App\Traits;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Ixudra\Curl\Facades\Curl;

trait Utils
{
    private function getRequest($url, $header = [])
    {
        $response = Curl::to($url)
            ->withHeaders($header)
            ->asJson()
            ->get();

        if (!is_null($response)) return $response;
        return false;
    }

    private function postRequest($url, $data, $header = [])
    {
        $response = Curl::to($url)
            ->withHeaders($header)
            ->withData($data)
            ->asJson()
            ->post();

        if (!is_null($response)) return $response;
        return false;
    }

    private function sendSuccess($message, $data, $code = 200)
    {
        $response['message'] = $message;
        $response['data'] = $data;

        return response()->json(
            $response, $code
        );
    }

    private function sendError($message, $code = 404)
    {
        $response['message'] = $message;
        return response()->json(
            $response, $code
        );
    }

    private function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
