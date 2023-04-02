<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    //
    public function index()
    {
        Redis::set('user:1:first_name', 'Sabih Khan');
        Redis::set('user:2:first_name', 'Azlaan Sabih');
        Redis::set('user:3:first_name', 'Abaan Sabih');

        for ( $i = 0; $i< 4; $i++) {
            echo Redis::get('user:' . $i . ':first_name') . "<br>";
        }
    }
}
