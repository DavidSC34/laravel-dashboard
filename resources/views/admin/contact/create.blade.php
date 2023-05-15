@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="#" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Contacto</h1>
      
    </div>

    <div class="section-body">
     

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Alta de Contacto</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.contact.store')}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                   
                    {{-- Nombre --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nombre</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                      </div>
                    </div>
                    {{-- Apellido --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Apellido</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="apellido" class="form-control" value="{{old('apellido')}}">
                      </div>
                    </div>
                     {{-- Email --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                      </div>
                    </div>
                     {{-- Categoria --}}
                     <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Categoria</label>
                        <div class="col-sm-12 col-md-7">
                          <select name="categoria" class="form-control selectric" >
                            <option>Select</option>
                              @foreach ($categorias as $categoria)
                              <option value="{{$categoria->nombre}}">{{$categoria->nombre}}</option>
                              @endforeach
                          
                          </select>
                        </div>
                     </div>
                      {{-- Federacion --}}
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Federacion</label>
                        <div class="col-sm-12 col-md-7">
                          <select name="federacion" class="form-control selectric" >
                            <option>Select</option>
                              @foreach ($federaciones as $federacion)
                              <option value="{{$federacion->nombre}}">{{$federacion->nombre}}</option>
                              @endforeach
                          
                          </select>
                        </div>
                     </div>
                     {{-- Status --}}
                     <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7">
                          <select name="status" class="form-control selectric" >
                            <option>Select</option>
                            <option value="activo" selected>Activo</option>
                            <option value="inactivo">Inactivo</option>
                          </select>
                        </div>
                     </div>
                  
                    {{-- Empresa --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Empresa</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="empresa" class="form-control" value="{{old('empresa')}}">
                      </div>
                    </div>
                    {{-- Sexo --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sexo</label>
                      <div class="col-sm-12 col-md-7">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="masculino" value="MASCULINO" checked>
                                <label class="form-check-label" for="masculino">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo" id="femenino" value="FEMENINO">
                                <label class="form-check-label" for="femenino">
                                  Femenino
                                </label>
                            </div>
                      </div>
                    </div>
                     {{-- Cargo --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cargo</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="cargo" class="form-control" value="{{old('cargo')}}">
                      </div>
                    </div>
                    {{-- Pais --}}
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pais</label>
                        <div class="col-sm-12 col-md-7">
                          <select name="pais" class="form-control selectric" id="pais">
                            <option>Select</option>
                              @foreach ($paises as $pais)
                              <option value="{{$pais->Name}}">{{$pais->Name}}</option>
                              @endforeach
                           
                          </select>
                        </div>
                    </div> 
                     {{-- Estado --}}
                     <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado</label>
                        <div class="col-sm-12 col-md-7">
                            <select name="estado" class="form-control selectric" id="estado">
                              <option>Select</option>                             
                            
                            </select>
                        </div>
                      </div> 
                    {{-- Referencia --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Referencia</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="referencia" class="form-control" value="{{old('referencia')}}">
                      </div>
                    </div>
                    {{-- Direccion Postal --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Direccion Postal</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="direccionPostal" class="form-control" value="{{old('direccionPostal')}}">
                      </div>
                    </div>
                    {{-- Direccion Oficina --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Direccion Oficina</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="direccionOficina" class="form-control" value="{{old('direccionOficina')}}">
                      </div>
                    </div>
                    {{-- Direccion Casa --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Direccion Casa</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="direccionCasa" class="form-control" value="{{old('direccionCasa')}}">
                      </div>
                    </div>
                    {{-- Telefono Casa --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefono Casa</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telefonoCasa" class="form-control" value="{{old('telefonoCasa')}}">
                      </div>
                    </div>
                    {{-- Telefono Oficina --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefono Oficina</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telefonoOficina" class="form-control" value="{{old('telefonoOficina')}}">
                      </div>
                    </div>
                     {{-- Telefono Movil --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Telefono Movil</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="telefonoMobil" class="form-control" value="{{old('telefonoMobil')}}">
                      </div>
                    </div>
                      {{-- Fecha nacimiento --}}
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fecha de cumpleaños</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="input" name="aniversario" class="form-control" value="{{old('aniversario')}}">
                        </div>
                      </div> 
                     {{-- Twitter --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="twitter" class="form-control" value="{{old('twitter')}}">
                      </div>
                    </div>
                     {{-- Asistente --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Asistente</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="asistenteRp" class="form-control" value="{{old('asistenteRp')}}">
                      </div>
                    </div>
                     {{-- Datos Asistente --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Datos Asistente</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="datosAsistenteRp" class="form-control" value="{{old('datosAsistenteRp')}}">
                      </div>
                    </div>                    
                    {{-- Notas --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Notas</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote"  name="notas">{{old('notas')}}</textarea>
                      </div>
                    </div>
                     {{-- Facellido --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Fallecido</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fallecido"  id="fallecidosi" value="SI" >
                          <label class="form-check-label" for="fallecidosi">
                            Si
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="fallecido"  id="fallecidono" value="NO" checked>
                          <label class="form-check-label" for="fallecidono">
                            No
                          </label>
                        </div>
                      </div>
                    </div>
                   
                     {{-- Tarjeta de Navidad --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tarjeta de navidad</label>
                        <div class="col-sm-12 col-md-7">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tarjetaNavidad"  id="tarjetasi" value="SI" checked>
                            <label class="form-check-label" for="tarjetasi">
                              Si
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tarjetaNavidad"  id="tarjetano" value="NO">
                            <label class="form-check-label" for="tarjetano">
                              No
                            </label>
                          </div>
                        </div>
                    </div>
                     {{-- Mailings --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">¿Recibe Mailings?</label>
                      <div class="col-sm-12 col-md-7">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="mailings"  id="si" value="si" checked>
                            <label class="form-check-label" for="si">
                              Si
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="mailings"  id="no" value="no">
                            <label class="form-check-label" for="No">
                              No
                            </label>
                          </div>
                      </div>
                    </div> 
                     {{-- Quien puede ver este contacto --}}
                     <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">¿Puede ser visto por cualquier usuario?</label>
                      <div class="col-sm-12 col-md-7">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="acceso"  id="si" value="si" checked>
                            <label class="form-check-label" for="si">
                              Si
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="acceso"  id="no" value="no">
                            <label class="form-check-label" for="No">
                              No
                            </label>
                          </div>
                      </div>
                    </div> 


                   

                  
               
                    
      
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Guardar</button>
                      </div>
                    </div>
                </form>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection


@push('scripts')
    <script>
    window.onload = function(){
         
      
          $("#pais").change(function(){
            const selectPais = document.getElementById('pais');
            let paisSeleccionado = selectPais.options[selectPais.selectedIndex].value; 
            let selectorEstado = document.getElementById('estado');
                selectorEstado.innerHTML = ''; 
            
            let ruta = "{{ route('admin.contact.province', ":paisSeleccionado") }}";
            ruta = ruta.replace(':paisSeleccionado', paisSeleccionado);
           
              $.ajax({        
                  // le pido a la url '/utils/provincia' el liostado de loclaidades
                  method: 'GET',
                  url:  ruta,                  
                  success: function(data) {
                    let opciones = ' <option>Select</option>';   
                                  
                      data.provinces.forEach(province => {
                        opciones +=`
                          <option value="${province.Name}">${province.Name}</option>
                          `;                        
                        });                     
                      
                      selectorEstado.innerHTML+= opciones;                                         
                      $('select#estado').selectric();      
                  }
              });
          });
     }

    </script>
@endpush