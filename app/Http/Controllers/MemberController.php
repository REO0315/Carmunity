<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Auth;

class MemberController extends Controller
{
    public function show()
    {
        $members = Member::where('user_id',Auth::id())->get();
        
        return view('profile.index',compact('members'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $member = Member::where('user_id',Auth::id())->get();
        if (count($member) > 0) {
            return redirect()->route('toppage');
        }
        return view('profile.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mem = new Member;
        $mem->image_path = "";
        $mem->gender = $request->gender;
        $mem->area = $request->area;
        $mem->birthday = $request->birthday;
        $mem->mycar = $request->mycar;
        $mem->spot = $request->spot;
        $mem->self = $request->self;
        $mem->user_id = Auth::id();
        $mem->save();
        
        return view('toppage');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mems = Member::find($id);
        return view('profile.edit',['member' => $mems]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $path = $request->file('image')->store('public/images');
        $same_values = [
        'image_path' => basename($path),
        'gender' => $request->gender,
        'area' => $request->area,
        'birthday' => $request->birthday,
        'mycar' => $request->mycar,
        'spot' => $request->spot,
        'self' => $request->self,
            ];
        Member::where('id',$request->id)->update($same_values);
        
        $members = Member::where('user_id',Auth::id())->get();
        return view('profile.index',compact('members'))->with('filename',basename($path));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
