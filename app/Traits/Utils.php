<?php


namespace App\Traits;


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
        return response()->json(
            $message, $code
        );
    }
}
