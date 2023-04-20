@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Skill Title</h1>
      
    </div>

    <div class="section-body">
     

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Skill</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.skill-item.store')}}" method="POST" > 
                    @csrf
                 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Percent</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="percent" class="form-control" value="">
                      </div>
                    </div>
                   
      
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create</button>
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