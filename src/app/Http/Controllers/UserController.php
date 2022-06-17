<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
    {
        public function login(Request $request)
        {
            $this->validate($request,[
                'email' => 'bail|required|email',
                'password' => 'bail|required|min:6',
            ]);
            if(Auth::attempt(['emnail' => $request->email, 'password' => $request->password])) {
                return response()->json(Auth::user(), 200);
            }else{
                return response()->json([
                    'msg' => 'Incorrect login details'
                ]);
            }

            $status = 401;
            $response = ['error' => 'Unauthorised'];

            $credentials = [
                'email' => request('email'),
                'password' => request('password')
            ];


            return response()->json($response, $status);
        }

        public function register(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 401);
            }
            $newUser = new User;
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = Hash::make($request->password);

            dd($newUser ->save());
            // return response()->json(['success' => $success]);

        }

        public function getDetails()
        {
            return response()->json(['success' => Auth::user()]);
        }
    }
