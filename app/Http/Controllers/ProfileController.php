<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {

        $name = "Kamrul Hasan";
        $age = "28";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        $response = response()->json($data)->cookie(
            $cookieName,
            $cookieValue,
            $minutes,
            $path,
            $domain,
            $secure,
            $httpOnly
        );

        return $response;
    }
}
