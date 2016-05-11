<?php
namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;
use App\Http\Requests\EditProfileRequest;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    
    public function index()
    {   if(\Auth::user()->level == "petugas")
            return redirect("/profile");
        else
        return view("profile.index", ['profile'=>Profile::all()]);
    }

    
    public function petugasProfile() {
        $profile=Profile::where("user_id", \Auth::user()->id)->paginate(11);
        return view("profile.petugas")
        ->with("profile", $profile);
    }
    
    public function show($id)
    {
       $profile=Profile::find($id);
        return view("profile.show", array("profile"=>$profile));
    }

   
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view("profile/form-edit")
        ->with("url",url("/profile/$id/update"))
        ->with("profile",$profile)
        ;
    }

    public function update(EditProfileRequest $request,$id)
    {
        $profile = Profile::find($id);
        $profile->nama      =$_POST['nama'];
        $profile->alamat    =$_POST['alamat'];
        $profile->email     =$_POST['email'];
        $profile->telp      =$_POST['telp'];
        $profile->save();
        return redirect(url("/petugas"));
    }

   
    public function delete($id)
    {
        Profile::destroy($id);
        return redirect(url("/petugas"));
    }

    public function contact()
    {   
        return view("profile.contact", ['profile'=>Profile::all()]);
    }
}
