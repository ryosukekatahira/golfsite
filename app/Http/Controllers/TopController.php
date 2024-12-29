<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Usr\TopService;

class TopController
{
    private $topService;

    public function __construct(TopService $topService)
    {
        $this->topService = $topService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('usr.top');
    }

}
