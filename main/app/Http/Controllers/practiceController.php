<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    /**
     * bootstrapの勉強
     *
     * @param  int  $id
     * @return Response
     */
    public function bootstrap()
    {
        return view('bootstrap');
    }
}
