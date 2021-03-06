<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\DB;

class WellcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('items')
        ->join('categories', 'items.category_id', '=', 'categories.id')
        ->select('items.item_name', 'items.item_price', 'categories.category_name', 'categories.description')
        ->get();
        
        $siteinfos = SiteInfo::all();

        $categories = Category::with('item')->get();

        $item_association = DB::table('item_associations')
        ->join ('items', 'item_associations.item_id', '=', 'items.id')
        // ->join ('items', 'item_associations.item2_id', '=', 'items.id')
        ->get();

        return view('welcome', [
            'item_association' => $item_association,    
            'categories'=> $categories,
            'siteinfos' => $siteinfos,
            'items' => $items
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
