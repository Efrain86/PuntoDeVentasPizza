<?php
use Illuminate\Support\Facades\Route;


use App\Models\cliente;
use App\Models\productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('ListarClientes', function () {
//     return ['messange' =>'Hola'];
// });



// ******************************
// *********  Clientes  *********
// ******************************


Route::get('ListarClientes', function(){
    $datos['clientes'] = cliente::all();
    return response()->json(['status'=>'ok','data'=>$datos],200);
});


Route::get('BuscarClientes', function(Request $request){

    // $telefono = trim($request->get('Telefono'));
    $telefono = $request->input('Telefono');
    $datos['clientes'] = DB::table('Clientes')
        ->where('Telefono','LIKE','%'.$telefono.'%') 
        ->get();
    return response()->json(['status'=>'ok','data'=>$datos],200);
});


// ******************************
// *********  Productos  *********
// ******************************

Route::get('ListarProductos', function(){
    $datos['Productos'] = productos::all();
    return response()->json(['status'=>'ok','data'=>$datos],200);
});


Route::get('BuscarProductos', function(productos $request){

    $datos['productos']  = Db::table('productos')
                ->where('ProductoNombre', 'like', '%'+$request)
                ->get();

    return response()->json(['status'=>'ok','data'=>$datos],200);
});
