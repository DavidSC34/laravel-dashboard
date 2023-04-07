@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Service</h1>
      
    </div>

    <div class="section-body">
     

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Edit Service</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.service.update',$service->id)}}" method="POST" > 
                    @csrf
                    @method('PUT')
                 
                    <div class="form-group row mb-4">
                        <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                        <div class="col-sm-12 col-md-7">
                          <input  id="name" type="text" name="name" class="form-control" value="{{$service->name}}">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                        <div class="col-sm-12 col-md-7">
                        <textarea name="description" id="description" class="form-control" style="height:10rem" >{{$service->description}}</textarea>
                        </div>
                      </div>
                   
      
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
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