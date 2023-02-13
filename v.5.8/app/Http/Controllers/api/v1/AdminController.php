<?php

namespace App\Http\Controllers\api\v1;

use App\Post;
use App\Models\Talent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function talent()
    {
        $data = Talent::all();
        // return dd($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Talent',
            'data'    => $data
        ],200);
    }
    //
    public function index()
    {
        $data = Post::all();
        // return dd($data);
        return response()->json([
            'success' => true,
            'message' => 'Data Post',
            'data'    => $data
        ],200);
    }
    //
    public function store(Request $request)
    {
        try{
            //validate data
            $validator = Validator::make($request->all(), [
                'title'     => 'required',
                'content'   => 'required',
            ],
                [
                    'title.required' => 'Masukkan Title Post !',
                    'content.required' => 'Masukkan Content Post !',
                ]
            );

            if($validator->fails()) {

                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);
    
            } else {
    
                $post = Post::create([
                    'title'     => $request->input('title'),
                    'content'   => $request->input('content')
                ]);
    
                if ($post) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Post Berhasil Disimpan!',
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Post Gagal Disimpan!',
                    ], 401);
                }
            }

        } catch (\Exception $e) {

        
            $data = Talent::all();
            // return dd($data);
            return response()->json([
                'success' => true,
                'message' => 'Data Talent',
                'data'    => $data
            ],200);
        }

    }
    //
    public function show($id)
    {
        try
        {
            $post = Post::whereId($id)->first();


            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Detail Post!',
                    'data'    => $post
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Tidak Ditemukan!',
                    'data'    => ''
                ], 401);
            }
    
        } catch (\Exception $e) {
            dd('Exception block', $e);
        }
    }
    //
    public function update(Request $request)
    {
        try{

            //validate data
            $validator = Validator::make($request->all(), [
                'title'     => 'required',
                'content'   => 'required',
            ],
                [
                    'title.required' => 'Masukkan Title Post !',
                    'content.required' => 'Masukkan Content Post !',
                ]
            );

            if($validator->fails()) {

                return response()->json([
                    'success' => false,
                    'message' => 'Silahkan Isi Bidang Yang Kosong',
                    'data'    => $validator->errors()
                ],401);

            } else {

                $post = Post::whereId($request->input('id'))->update([
                    'title'     => $request->input('title'),
                    'content'   => $request->input('content'),
                ]);

                if ($post) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Post Berhasil Diupdate!',
                    ], 200);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Post Gagal Diupdate!',
                    ], 401);
                }

            }

        } catch (\Exception $e) {
            dd('Exception block', $e);
        }
    }
    //
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Post Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Gagal Dihapus!',
            ], 400);
        }
    }
}
