<?php
//önceden AdminHomecontrollerdı
namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPageHomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $category=Category::all();
        $data= Home::all();
        return view('admin.home.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Category::all();
        return view('admin.home.create',[
            'data' =>$data
            ]);

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
        $data=new Home();
        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->min_price =$request->min_price;
        $data->max_price =$request->max_price;
        $data->dwelling_type =$request->dwelling_type;
        $data->num_of_rooms =$request->num_of_rooms;
        $data->warming_type =$request->warming_type;
        $data->province =$request->province;
        $data->district =$request->district;
        $data->building_age =$request->building_age;
        $data->floor_location =$request->floor_location;
        $data->status =$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models/Home $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home,$id)
    {
        //echo "Show area: ",$id;
        $data= Home::find($id);
        return view('admin.home.show',[
            'data' => $data
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home,$id)
    {
        // echo "my edit id:",$id;

        $data= Home::find($id);
        $datalist=Category::all();
               return view('admin.home.edit',[
                   'data' => $data,
                   'datalist' => $datalist
               ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home,$id)
    {
        //
        $data=Home::find($id);
        $data->category_id =$request->category_id;
        $data->user_id =0; //$request->user_id;
        $data->title =$request->title;
        $data->keywords =$request->keywords;
        $data->description =$request->description;
        $data->detail =$request->detail;
        $data->min_price =$request->min_price;
        $data->max_price =$request->max_price;
        $data->dwelling_type =$request->dwelling_type;
        $data->num_of_rooms =$request->num_of_rooms;
        $data->warming_type =$request->warming_type;
        $data->province =$request->province;
        $data->district =$request->district;
        $data->building_age =$request->building_age;
        $data->floor_location =$request->floor_location;
        $data->status =$request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home,$id)
    {
        //
        $data=Home::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/home');

    }
}
