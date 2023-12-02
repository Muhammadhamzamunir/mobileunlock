<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class adminController extends Controller
{
    function show(){
     
        return view('admin');
    }
    function allClients(){
      $allclients=DB::table('users')->get();
      return view('allclients',compact('allclients'));
    }
    function addServices(){
      $customFields = DB::table('customfiledtype')->get();
      $serviceGroups = DB::table('service_groups')->get();
      return view('addServices',compact('customFields','serviceGroups'));
    }
    function storeCustomField(Request $request){
      $newCustomField = $request->input('newCustomField');
      DB::table('customfiledtype')->insert([
        'name' => $newCustomField,
    ]);

      return response()->json(['message' => 'Custom field added successfully']);
      
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_group' => '',
            'title' => 'required|string',
            'price' => 'required|numeric',
            'costprice' => 'required|numeric',
            'supplier' => 'required|string',
            'deliverytime' => 'required|string',
            'servicetype' => 'required|in:Database,Recalculate',
            'fieldtype' => 'required|in:Both,Single,Multiple,Custom',
            'image' => 'nullable|image|max:2048', 
            'details' => 'nullable|string',
            'feature' => 'nullable|array',
        ]);
    
        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('images', $imageName, 'public');
        }
        $slug = Str::slug($request->input('title'));
        // Insert data into the 'services' table using the query builder
        $featureArray = $request->input('feature');

$insertData = [
    'service_group_id' => $request->input('service_group'),
    'title' => $request->input('title'),
    'price' => $request->input('price'),
    'cost_price' => $request->input('costprice'),
    'supplier' => $request->input('supplier'),
    'delivery_time' => $request->input('deliverytime'),
    'service_type' => $request->input('servicetype'),
    'imei_field_type' => $request->input('fieldtype'),
    'custom_field_values' => json_encode($request->input('custom_field_values')),
    'image' => $imageName,
    'details' => $request->input('details'),
    'created_at' => now(),
    'updated_at' => now(),
    'slug' => $slug
];

if ($featureArray) { // Check if the array is not null
    $insertData['refundable'] = in_array('Refund available if code is not found', $featureArray);
    $insertData['service_available_24_7'] = in_array('Service available 24 * 7', $featureArray);
    $insertData['unlock_guaranteed'] = in_array('Unlock guaranteed', $featureArray);
    $insertData['no_refund_for_bad_requests'] = in_array('No Refund for bad requests', $featureArray);
    $insertData['working_on_business_days_only'] = in_array('Working on business days only', $featureArray);
}

DB::table('services')->insert($insertData);

        
        return redirect()->route('addServices.show')->with('success', 'Service added successfully');
    }

    function showServiceGroup(){
      return view('serviceGroup');
    }
    function serviceGroup(Request $request){
      $request->validate([
        'category' => 'required|string',
        'title' => 'required|string',
        'url' => 'required|string',
        'metatags' => 'nullable|string',
        'metakeyword' => 'nullable|string',
        'details' => 'nullable|string',
    ]);

    // Use the DB facade to perform the insert operation
    DB::table('service_groups')->insert([
        'category' => $request->input('category'),
        'title' => $request->input('title'),
        'url' => $request->input('url'),
        'metatags' => $request->input('metatags'),
        'metakeyword' => $request->input('metakeyword'),
        'details' => $request->input('details'),
        'remotecategory' => $request->has('remotecategory') ? 1 : 0,
        'disable' => $request->has('disable') ? 1 : 0,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('addServices.show')->with('success', 'Service group added successfully');

    }
}
