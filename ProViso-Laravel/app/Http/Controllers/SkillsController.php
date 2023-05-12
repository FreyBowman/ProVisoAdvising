<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use Session;

class SkillsController extends Controller
{
    public function updateSkills(Request $request)
    {
        $email = Session::get('email');

        $existingSkills = Skills::where('Email', '=', $email)->first();

        if($existingSkills)
        {
            Skills::where('Email', '=', $email)->delete();
        }

        $skills = new Skills;

        $skills->Email = $email;
        $skills->html = $request->skillhtml;
        $skills->css = $request->skillcss;
        $skills->javascript = $request->skilljavascript;
        $skills->python = $request->skillpython;
        $skills->cpp = $request->skillcpp;
        $skills->networking = $request->skillnet;
        $skills->java = $request->skilljava;
        $skills->sql = $request->skillsql;

        $skills->save();

        return redirect('/skillset');
    }
}
