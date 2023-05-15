<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
  public function getToken(Request $request){
         $request->request->add([
             'grant_type' => 'password',
             'client_id'=>2,
             'client_secret'=> '74ELFMbOyVbXIdji4jksmKEyd3KZ2qr4bBnBZ3Bt',
             'username'=> $request->username,
             'password'=>$request->password,
         ]);
         $requestToken = Request::create(env('APP_URL').'/oauth/token','post');
         $response= Route::dispatch($requestToken);
         $responseData=json_decode($response->getContent());
         if(isset($responseData->error)){
             return response()->json([
                'error'=>true,
                "access_token" => ""
            ]);
         }
         return response()->json([
            'error'=>false,
            "access_token"=>$responseData->access_token,
            "expires_in"=> $responseData->expires_in
        ]);
     }
    /**
     * Registration Req
     */
    public function register(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|string|email|max:255|unique:users,email,',
            'password' => 'required|min:8',
            'phone_number' => 'required|numeric|min:11',
            'address' => 'required|string|max:255'
        ]);
          
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address
        ]);
 
        $token = $user->createToken('LaravelAuthApp')->accessToken;
 
        return response()->json([
            'success'=>true,
            'message'=>'Successfully Register!!',
            'user' => $user,
            'token'=>$token
          ]);
  }
    /**
     * Login Req
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json([
                'success'=>true,
                'message'=>'Successfully Login!',          
                'token'=>$token,
                'data'=>$data  
            ]);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Login Failed,Please try again',
                'data'=>null            
          ]);
        }
    }
}
