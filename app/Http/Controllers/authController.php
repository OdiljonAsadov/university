<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TimeTable;
use Illuminate\Support\Facades\Hash;
use Session;

class authController extends Controller
{
    public function login()
    {
        return view('main.login');
    }

    public function registration()
    {
        return  view('main.registration');
    }
    public function userProfil()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', Session::get('loginId'))->first();
        }

        return  view('main.table', compact('data'));
    }
    public function logOut()
    {
        Session::forget('loginId');
        
        return  redirect('/');
    }

    public function loginUser(Request $request)
    {
        $timeTables = TimeTable::all();
        $firsts = TimeTable::where('group_id', 4)->get();
        $sconds = TimeTable::where('group_id', 5)->get();
        $tres = TimeTable::where('group_id', 6)->get();
        $fours = TimeTable::where('group_id', 7)->get();
        $dushanbas = TimeTable::where('day_id', 1)->get();
        $seshanbas = TimeTable::where('day_id', 2)->get();
        $chorshanbas = TimeTable::where('day_id', 3)->get();
        $payshanbas = TimeTable::where('day_id', 4)->get();
        $jumas = TimeTable::where('day_id', 5)->get();
        $shanbas = TimeTable::where('day_id', 6)->get();

        return  view('main.table', compact('timeTables', 'firsts', 'dushanbas', 'seshanbas', 'chorshanbas', 'payshanbas', 'jumas', 'shanbas'));

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);

        $users = User::where('email','=',$request->email)->first();

        if ($users) {
            if(Hash::check($request->password,$users->password))
            {
                $request->session()->put('loginId', $users->id);
                return redirect('/table');
            }else{
                return back()->with('fail', 'Parolda xatolik mavjud');
            }
        } else {
            return back()->with('fail', 'Ushbu email tasdiqlanmagan');
        }

        return redirect('/registration')->with('success','Muvaffaqiyatli bajarildi');
    }
}
