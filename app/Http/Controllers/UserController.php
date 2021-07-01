<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function upload_csv(Request $request){
        $file = $request->file;

        $data = $this->csvToArray($file);


        if(is_array($data)){
            
            foreach($data as $i => $user){

                $password = base64_encode(time().uniqid());
                
                $user['is_admin'] = 0;
                $user['password'] =  $password;
                $user['created_by'] = Auth::id();
                $data[$i] = $user;
            }
        }

        User::insert($data);
        return redirect('admin')->with('success','File upload successfully!');
    }

    function csvToArray($filename = '', $delimiter = ',')
    {
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header){
                    $header = $row;
                    $header = ['full_name', 'email'];
                } else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

    return $data;

        
    }
    // show all data of user
    public function users_list(){
        $user = User::all();
        return view('user_list',['users'=>$user]);
        
    }

    // for logout

    public function logout(Request $request)
	{
        
	    Auth::logout();

	    $request->session()->invalidate();

	    $request->session()->regenerateToken();

	    return redirect('/login')->with('');

	}
}
