<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\Province;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\ContactDataTable;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Federacion;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ContactDataTable $dataTable)
    {
        return  $dataTable->render('admin.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $paises = Country::all();
        $paises = Country::orderBy('Name')->get();
        $categorias = Categoria::orderBy('nombre')->get();
        $federaciones = Federacion::orderBy('nombre')->get();
        return view('admin.contact.edit',compact('paises','categorias','federaciones'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        //  dd($request->all());

         $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contactsWbcVers2,email'],
            'categoria'=>['string','max:250'],
            'federacion'=>['string','max:120'],
            'status'=>['string','max:100'],
            'empresa'=>['string','max:150'],
            'sexo'=>['string','max:100'],
            'cargo'=>['string','max:70'],
            'pais'=>['string','max:120'],
            'estado'=>['string','max:150'],
            'referencia'=>['string','max:150'],
            'direccionPostal'=>['string','max:250'],
            'direccionOficina'=>['string','max:250'],
            'direccionCasa'=>['string','max:250'],
            'telefonoCasa'=>['string','max:250'],
            'telefonoOficina'=>['string','max:250'],
            'telefonoMobil'=>['string','max:250'],
            'aniversario'=>['string','max:30'],
            'twitter'=>['string','max:30'],
            'asistenteRp'=>['string','max:70'],
            'datosAsistenteRp'=>['string','max:250'],
           
        ]);
        // dd($request->all());
        $contacto = new Contact();
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        $contacto->email = $request->email;
        $contacto->categoria = $request->categoria;
        $contacto->federacion = $request->federacion;
        $contacto->status = $request->status;
        $contacto->empresa = $request->empresa;
        $contacto->sexo = $request->sexo;
        $contacto->cargo = $request->cargo;
        $contacto->pais = $request->pais;
        $contacto->estado = $request->estado;
        $contacto->referencia = $request->referencia;
        $contacto->direccionPostal = $request->direccionPostal;
        $contacto->direccionOficina = $request->direccionOficina;
        $contacto->direccionCasa = $request->direccionCasa;
        $contacto->telefonoCasa = $request->telefonoCasa;
        $contacto->telefonoOficina = $request->telefonoOficina;
        $contacto->telefonoMobil = $request->telefonoMobil;
        $contacto->aniversario = $request->aniversario;
        $contacto->twitter = $request->twitter;
        $contacto->asistenteRp = $request->asistenteRp;
        $contacto->datosAsistenteRp = $request->datosAsistenteRp;
        $contacto->notas = $request->notas;
        $contacto->fallecido = $request->fallecido;
        $contacto->tarjetaNavidad = $request->tarjetaNavidad;
        $contacto->mailings = $request->mailings;
        $contacto->acceso = $request->acceso;
        $contacto->save();
        
        toastr()->success('Contacto guardado exitosamente!', 'Buen trabajo!');
        return redirect()->route('admin.contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $paises = Country::orderBy('Name')->get();
        $categorias = Categoria::orderBy('nombre')->get();
        $federaciones = Federacion::orderBy('nombre')->get();
        $contacto = Contact::findOrFail($id);
        $provinces = Province::where('Country',$contacto->pais)->get();
    //    dd($provinces);
        return view('admin.contact.edit',compact('paises','categorias','federaciones','contacto','provinces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getProvincesByCountry(string $country_id)
    {
      
        // $provinces = Province::where('Country',$country_id)->orderBy('Name')->get();
         $provinces =  DB::table('province')->where('Country',$country_id)->orderBy('Name')->get();
    //    dd( $provinces);
     
        return response()->json(['provinces'=> $provinces]);
    }
}