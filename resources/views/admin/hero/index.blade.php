@extends('admin.layouts.layout')

@section('content')
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Hero Section</h1>
      
    </div>

    <div class="section-body">
     

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Update Hero Section</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.hero.update',1)}}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="title" class="form-control" value="{{$heroe->title}}">
                      </div>
                    </div>
                    {{-- Subtittle --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">SubTitle</label>
                      <div class="col-sm-12 col-md-7">
                       <textarea   name="sub_title" id=""  class="form-control" style="height:
                       120px">{{$heroe->sub_title}}</textarea>
                      </div>
                    </div>
                    {{-- Button Text --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button Text</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" value="{{$heroe->btn_text}}" name="btn_text" class="form-control">
                      </div>
                    </div>
                    {{-- Button URl --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Button URL</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" value="{{$heroe->btn_url}}" name="btn_url" class="form-control">
                      </div>
                    </div>

                    @if ($heroe->image)
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Preview image</label>
                        <div class="col-sm-12 col-md-7">
                            <img class="w-25" src="{{asset($heroe->image)}}" alt="">
                        </div>
                    </div>
                    @endif
                    {{-- Background image --}}
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Background image</label>
                      <div class="col-sm-12 col-md-7">
                          <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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