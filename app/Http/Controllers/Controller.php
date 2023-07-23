<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function sendResponse(string $message, array $result=[], $code = 200)
    {
        // $result = encryptable($result);
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        return response()->json($response, $code)->withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ]);
    }

    public function sendError(string $error, $data = [], $code = 200)
    {

        // if(!isJson($data)){
        //     $errorMessages = json_encode($errorMessages);
        // }

        $response = [
            'success' => false,
            'data' => $data,
            'message' => $error,
        ];

        // if (!empty($errorMessages)) {
        //     $response['message'] .=  "\n Messages : \n";
        //     $response['message'] .=  $errorMessages;
        // }

        return response()->json($response, $code)->withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ]);
    }


}
