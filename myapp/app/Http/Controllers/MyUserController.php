<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyUser;

class MyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Hey!';
        $data = MyUser::all();
        return $this->viewMyUser($message, $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newMyUser = array(
                    'name' => $request->input('name')
                    ,'mail' => $request->input('mail')
                    ,'age' => $request->input('age')
                  );
        MyUser::create($newMyUser);

        $message = 'SUCCESS: store new data.';
        $data = MyUser::all();
        return $this->viewMyUser($message, $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = '';
        $selectedUser = MyUser::where('id', $id)->get();
        return $this->viewMyUserEdit($message, $selectedUser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function viewMyUser($message, $data)
    {
        return view('myuser'
                    ,['message' => $message
                       ,'data' => $data
                       ,'json_data' => json_encode($data)
                    ]
                   );
    }

    private function viewMyUserEdit($message, $data)
    {
        return view('myuser_edit'
                    ,['message' => $message
                       ,'data' => $data
                       ,'json_data' => json_encode($data)
                    ]
                   );
    }
}
