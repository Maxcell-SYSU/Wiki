<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('information/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:information',
            'email' => 'required|unique:information|email',
            'year' => 'required|min:1|max:15',
            'campus' => 'required|in:East,Zhuhai',
            'department' => 'required',
            'phone' => 'integer',
            'wechatId' => 'alpha',
        ]);
        $information = new Information;
        $information->name = $request->name;
        $information->email = $request->email;
        $information->year = $request->year;
        $information->department = $request->department;
        $information->campus = $request->campus;
        $information->phone = $request->phone;
        $information->wechatId = $request->wechatId;
        if ($information->save()) {
            return redirect('/done');
        } else {
            return redirect()->back()->withInput()->withErrors('Fail!');
        }
    }
}
