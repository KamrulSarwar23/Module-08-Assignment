<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(string $id)
    {
        $name = "Donal Trump";
        $age = "75";

        $data = [
            "name" => $name,
            "age" => $age,
        ];

        $cookieName = 'Laravel-Course-Token';
        $cookieValue = 'Ostad-123';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        $response = response('Cookie has been set.', 200);

        $response->withCookie($cookie);

        return $response;
    }
}
