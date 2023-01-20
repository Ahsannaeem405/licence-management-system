<?php
use Illuminate\Http\Request;

class MyHelper 
{
    public static function adminimage(Request $request)
    {
        if($file=$request->hasfile('image'))
        {
            $file=$request->file('image');
            $fileName=uniqid().$file->getClientOriginalName();
            $destinationPath='profiles/';
            $file->move($destinationPath,$fileName);
            $request->image=$fileName;
        }
        $profile->image = $request->image;
    }
} 