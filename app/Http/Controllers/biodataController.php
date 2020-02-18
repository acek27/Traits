<?php

namespace App\Http\Controllers;

use App\biodata;
use App\Traits\Resource;
use Illuminate\Http\Request;

class biodataController extends Controller
{
    use Resource;
    protected $model = biodata::class;
    protected $view = 'biodata';
    protected $route = 'biodata';

    public function __construct()
    {
        $this->middleware("can:admin");
    }
}
