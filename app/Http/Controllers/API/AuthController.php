<?php
namespace App\Http\Controllers\API;

use function Pest\Laravel\delete;
use function Pest\Laravel\startSession;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;

startSession();

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        
        //$token = $user->createToken('auth_token')->plainTextToken;

        /*
        return response()
            ->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer', ]);
        */
        return response()->json(['data' => $user ]);

    }

    public function login(Request $request){
        /*if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json(['message' => 'Unauthorized'], 401);
        }*/
        $user = User::where('email', $request['email'])->firstOrFail();

        //$token = $user->createToken('auth_token')->plainTextToken;

        /*
        return response()->
            json(['message' => 'Hi '.$user->name.', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer']);
        */
        return response()->json(['message' => 'Hi '.$user->name.', welcome to home']);

    }

    public function update(Request $request, $id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['User Not Found.']);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return response()->json(['User updated successfully.']);
    }
    public function logout(){
        auth()->user()->tokens()->delete();

        //auth()->user()->delete();
        return [
            'message' => 'You have Successfully logged out and the token was successfully deleted'
        ];
    }
    public function deleteUser($id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['User Not Found.']);
        }
        $user->delete();
    }
}
