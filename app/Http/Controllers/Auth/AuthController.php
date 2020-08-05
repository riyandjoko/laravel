<?php
public function welcome(Request $request)
{
    $firstname = $request["firstname"];
    $lastname = $request["lastname"];

    return view('welcome');
        
}
