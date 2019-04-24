<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\User;

class FileController extends Controller
{
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('file.create');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {



        $this->validate($request, [

                'filenames' => 'required',

                'filenames.*' => 'mimes:txt,pdf,docx,zip,xlsx'

        ]);



        if($request->hasfile('filenames'))

         {

            foreach($request->file('filenames') as $file)

            {

                $name=$file->getClientOriginalName();

                $file->move(public_path().'/files/', $name);  

                $data[] = $name;  

            }

         }



         $file= new File();

         $file->filenames=json_encode($data);

         $file->save();



        return back()->with('success', 'Data Your files has been successfully added');

    }


    // ==============================
    public function uploadFile() {
        return view('file.uploadFile');
    }

    public function uploadingFile(Request $request) {
        if ($request->hasFile('upload')) {
            $filename = $request->file('upload')->getClientOriginalName();

            // $user = User::find($id)->avatar()->update($filename);

            $request->file('upload')->storeAs('public/images', $filename);
            echo "file uploaded!";
        } else {
            echo "no file upload";
        };
    }

    public function profile() {
        Auth::user()->id;
        return view('file.profile');
    }

}
