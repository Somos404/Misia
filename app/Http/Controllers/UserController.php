<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\UserController as BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserPasswordRequest;
use App\User;
use App\Role;
use App\Products;



class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
         //$this->middleware('auth');
    }

    public function index()
    {
        try{

            $records = User::orderBy('id', 'desc')->paginate(10);           
            return view('admin/users/index', ['users' => $records]);

        }catch (\Exception $e) {

            return view('admin/index');      
        }
    }

    public function create()
    {
        try{

            $roles = Role::orderBy('name')->get();
            return view('admin/users/create', ['roles' => $roles]);

        }catch (\Exception $e) {

            //flash("Algo salió  mal, intente de nuevo.", 'danger');
            return redirect()->route('users.main');     
        }
    }

    public function store(UserRequest $request)
    {
        try{
            
            $user = new User($request->all());
            $user->password = bcrypt($user->password);

            $user->save();

            //flash("Se ha registrado " . $user->name . " de forma exitosa.");
            return redirect()->route('users.main');

        }catch (\Exception $e) {

            //flash("Algo salió mal, intente de nuevo.", 'danger');
            return redirect()->route('users.main');      
        }
    }

    public function show($id)
    {
        try{

            $user = User::find($id);

            if($user)
            {
                $role = Role::find($user->role_id);

                return view('admin/users/view', ['user' => $user, 
                                                 'role' => $role]);
            }
            else
            {
                //flash("Algo salió mal, intente de nuevo.", 'danger');
            	return redirect()->route('users.main');        
            }

        }catch (\Exception $e) {

           // flash("Algo salió mal, intente de nuevo.", 'danger');
            return redirect()->route('users.main');         
        }
    }

    public function edit($id)
    {   
        
        try{
            $user = User::find($id);

            if($user)
            {
                $roles = Role::orderBy('name')->get();
                return view('admin/users/update', ['user' => $user, 
                                                   'roles' => $roles]);
            }
            else
            {
                //flash("Algo salió mal, intente de nuevo.", 'danger');
            	return redirect()->route('users.main');         
            }

        }catch (\Exception $e) {

            //flash("Algo salió mal, intente de nuevo.", 'danger');
            return redirect()->route('users.main');       
        }
    }

    

    public function update(UserEditRequest $request, $id)
    {
        try{

            $user = User::find($id);
            $user->fill($request->all());

            $user->save();

            //flash("El usuario " . $user->name . " ha sido actualizado de forma exitosa.");

            return redirect()->route('users.main');

        }catch (\Exception $e) {

            return redirect()->route('users.main');         
        }
    }

    public function editpassword($id)
    {
        try{

            $user = User::find($id);

            if($user)
            {
                return view('admin/users/password', ['user' => $user]);
            }
            else
            {
                return redirect()->route('users.main');        
            }

        }catch (\Exception $e) {

            return redirect()->route('users.main');         
        }
    }

    public function updatepassword(UserPasswordRequest $request, $id)
    {
        try{
            
            $user = User::find($id);
            $user->fill($request->all());

            $user = User::find($id);

            if (\Hash::check($request->password, $user->password))
            {
                $user->password = bcrypt($request->new_password);
                $user->save();

                return redirect()->route('users.main');
            }
            else
            {
                return redirect()->route('users.main');
            }

        }catch (\Exception $e) {

            return redirect()->route('users.main');      
        }
    }

    public function destroy($id)
    {
        try{

            $user = User::find($id);
            $message = "";

            /*$articles = Producto::where('user_id', $user->id)->get();

            //If user have not any article
            if($articles->count() == 0)
            {
                $message = " ha sido eliminado de forma exitosa.";
                $user->delete();
            }
            else
            {
                $message = " no puede ser eliminado (relaciÃ³n con otras entidades).";
            }  
            */   
            $user->delete();
            return redirect()->route('users.main');

        }catch (\Exception $e) {
            
            return redirect()->route('users.main');         
        }
    }





}

