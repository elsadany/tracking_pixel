<?php
namespace App\Http\Controllers;

use App\Http\Resources\TrackingPixelsResource;
use Illuminate\Http\Request;
use App\Models\TrackingData;
use App\services\TrackingPixelService;
;
use Illuminate\Support\Facades\Log;

class TrackingPixelController extends Controller
{
    function index(){
        return response()->json(TrackingPixelsResource::collection(TrackingData::latest('id')->paginate(20))->response()->getData(true),200);
    }

    public function track(Request $request)
    {
        app(TrackingPixelService::class)->StoreActivity($request);
        $pixel = base64_decode('R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
        return response($pixel, 200)->header('Content-Type', 'image/gif');
    }
}