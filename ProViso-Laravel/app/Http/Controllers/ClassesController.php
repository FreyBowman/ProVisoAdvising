<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //Redirect to correct page
    public function degreeClasses(Request $request)
    {
        $major = $request->major;
        $minor = $request->minor;

        if($major == "computerscience")
        {
            if($minor == "Maths")
            {
                return redirect("/cs-major-math-minor");
            }
            if($minor == "Physics")
            {
                return redirect("/cs-major-phy-minor");
            }
            if($minor == "Accounting")
            {
                return redirect("/cs-major-Acc-minor");
            }
            if($minor == "Statistics")
            {
                return redirect("/cs-major-Stat-minor");
            }
            if($minor == "No-minor")
            {
                return redirect("/only-cs-major");
            }
        }
        if($major == "computerengineering")
        {
            if($minor == "Maths")
            {
                return redirect("/cseng-major-math-minor");
            }
            if($minor == "Physics")
            {
                return redirect("/cseng-major-phy-minor");
            }
            if($minor == "Accounting")
            {
                return redirect("/csengr-major-Acc-minor");
            }
            if($minor == "Statistics")
            {
                return redirect("/csengr-major-Stat-minor");
            }
            if($minor == "No-minor")
            {
                return redirect("/only-cseng-major");
            }
        }
        if($major == "cybersecurity")
        {
            if($minor == "Maths")
            {
                return redirect("/cyb-major-math-minor");
            }
            if($minor == "Physics")
            {
                return redirect("/cyb-major-phy-minor");
            }
            if($minor == "Accounting")
            {
                return redirect("/cyb-major-Acc-minor");
            }
            if($minor == "Statistics")
            {
                return redirect("/cyb-major-Acc-minor");
            }
            if($minor == "No-minor")
            {
                return redirect("/only-cyb-major");
            }
        }
    }
}
