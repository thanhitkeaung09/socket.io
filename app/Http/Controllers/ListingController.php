<?php

namespace App\Http\Controllers;

use App\Events\ListingViewed;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function getIndex()
    {
        return Listing::all();
    }
    public function getDetails($id)
    {
        $listing = Listing::find($id);
        event(new ListingViewed($listing));
        return $listing;
    }
}
