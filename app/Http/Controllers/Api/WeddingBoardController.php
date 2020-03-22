<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\WeddingBoard;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Throwable;

class WeddingBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $response = [];
        $response['result'] = WeddingBoard::select('no', 'name', 'text', 'date')->get();

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $text = $request->input('text');
        $name = $request->input('name');

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $weddingBoard = new WeddingBoard();
        $weddingBoard->name = $name;
        $weddingBoard->text = $text;
        $weddingBoard->date = Carbon::now();
        $weddingBoard->agent = $agent;
        $weddingBoard->ip = $ip;
        $weddingBoard->save();

        $data = [];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param WeddingBoard $weddingBoard
     * @return Response
     */
    public function show(WeddingBoard $weddingBoard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param WeddingBoard $weddingBoard
     * @return Response
     */
    public function update(Request $request, WeddingBoard $weddingBoard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param WeddingBoard $weddingBoard
     * @return Response
     */
    public function destroy(WeddingBoard $weddingBoard)
    {
        //
    }
}
