<?php


namespace App\Http\Controllers;
/**
 * @OA\Info(
 *      title="Item API Title",
 *      version="1.0.0",
 *      description="Item API description"
 * )
 */


use Illuminate\Http\Request;
use App\Models\Item;

class ApiController extends Controller
{

    /**
     * @OA\Get(
     *     path="/api/items",
     *     tags={"Items"},
     *     summary="Get a list of items",
     *     description="Returns a list of all items",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        // GET method to fetch all items
        echo('here');
        $items = Item::all();
        return response()->json($items, 200);
    }


    public function store(Request $request)
    {
        // POST method to create a new item
        $item = Item::create($request->all());
        return response()->json($item, 201);
    }

 

    public function update(Request $request, $id)
    {
        // PUT method to update an existing item
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json($item, 200);
    }

   

    public function destroy($id)
    {
        // DELETE method to delete an item
        $item = Item::findOrFail($id);
        $item->delete();
        return response()->json(null, 204);
    }


}
