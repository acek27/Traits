<?php

namespace App\Http\Controllers;

use App\biodata;
use App\sekolah;
use App\Traits\Resource;
use Illuminate\Http\Request;

class sekolahController extends Controller
{
    use Resource;
    protected $model = sekolah::class;
    protected $view = 'sekolah';
    protected $route = 'sekolah';

    public function __construct()
    {
        $this->middleware('can:admin');
    }
}
