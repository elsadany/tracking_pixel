<?php
namespace App\services;

use App\Models\TrackingData;
use Illuminate\Support\Facades\Log;

class TrackingPixelService 
{
    function StoreActivity($request) {
        $ipAddress = $request->ip();
        $userAgent = $request->header('User-Agent');
        $pageUrl = $request->query('page_url');

        // Log the data (optional)
        Log::info('Tracking Pixel Hit', [
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'page_url' => $pageUrl,
        ]);

        // Store the data in the database
        TrackingData::create([
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'page_url' => $pageUrl,
        ]);
    }
}