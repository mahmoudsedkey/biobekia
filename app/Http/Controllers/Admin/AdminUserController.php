<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\User as AppUser;
use Illuminate\Support\Facades\Validator;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allusers=User::all();
       return view('admin.users.admins',['allusers'=>$allusers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.users.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(Request $request)
    {

        //stoer data to users table


        $password=Hash::make($request->password2);
        //return $password;
          $rules=$this->getRules();
          $messages=$this->getMessages();
        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            //return "error";
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all())->with('message','خطأ');
        }
        else
        User::create([
                    'userName'=>$request->username,
                    'fullName'=>$request->name,
                    'password'=>$password,
                    'email'   =>$request->email,
                    'group_id'=>1,
                    'active'  =>1
        ]);
        return redirect()->back()->with('message','تم أنشاء مستخدم جديد');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       // return $this->destroy($id);

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

     //  $user=User::select('id','userName')->where('id',$id);//make error
       $user=User::select('id','userName','fullName','email')->where('id',$id)->first();
        //return view('admin.edituser',compact('user'));//true
        //return view('admin.edituser',['user'=>$user]);/true
        return view('admin.users.edituser')->with(['user'=>$user]);
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
        $user=User::select('id','userName','fullName','email')->where('id',$id)->first();
        $data=[];
        if(!$user)
           return redirect()->back();

        $rules=$this->getRules();
        $messages=$this->getMessages();
        $validator=Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            //return "error";
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all())->with('message','خطأ');
        }

          if($request->has('password1') && $request->password1!='')
               $data['password']=$request->password1;

               $data['userName']=$request->username;
               $data['fullName']=$request->name;
               $data['email']=$request->email;

            $user->update($data);
            return redirect()->route('users.index')->with(['message'=>'تم التحديث بنجاح']);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('id',$id)->first();
        //dd($user);
        if(!$user)
        return redirect()->back();

        $user->delete();
        return redirect()->back()->with(['message'=>'تم الحذف بنجاح ']);
    }

    public function getRules(){
        return $rules=[
            'username' =>'required|min:1|max:20',
            'password1'=>'required|min:8|max:30',
            'password2'=>'required|min:8|max:30',
            'name'     =>'required|min:8|max:30',
            'email'    =>'email'
    ];

    }

    public function getMessages(){
        return  $messages=[
            'username.min'=>'user name should be more than 1 char',
            'username.max'=>'user name should be less th 20 char',
            'password1.min'=>'password should be mor than 8 char',
            'password2.min'=>'password should be more than 8 char',
            'name.min'=>'full name should be more than 8 char',
            'name.max'=>'full name should be less than 30 char',
            'email.email'=>'email not correct',
            'email.unique'=>'email is used '
          ];
    }

}
