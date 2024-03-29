<?php

namespace App\Http\Controllers;

use App\Http\Resources\SiteCollection;
use App\Http\Resources\SiteResource;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $site= Site::with('blocks')->get();
        // return $site->toJson(JSON_PRETTY_PRINT);

        $site=Site::with('blocks')->paginate();
        return new SiteCollection($site);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Site  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Site $site)
    {
        return new SiteResource($site);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //I'LL ADD VALIDATION HERE.
        $sites=site::create([
            'site_name'=>$request->site_name,
            'user_id'=>$request->user_id
        ]);
        return response($sites,201);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Site $site)
    {
        $site->update($request->all());

        return response($site,200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy(Site $site)
    {
        $site->delete();
        return response()->json('Deleted',200);
    }
}
