@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/select2/select2.min.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{asset('assets/backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/backend/assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/js/components/select2-init.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="path-ke-direktori-js/select2.min.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection

@section('content')
<section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <center>
                                <div class="card-header">Tambah Artikel</div>
                            </center>

                            <div class="card-body">
                                <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Judul</label>
                                        <input class="form-control
                                        @error('judul') is-invalid @enderror" type="text"
                                        name="judul" id="" required>
                                        @error('judul')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input class="form-control
                                        @error('foto') is-invalid @enderror" type="file"
                                        name="foto" id="" required>
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tag</label>
                                        <select class="form-control
                                        @error('tag') is-invalid @enderror" name="tag[]" id="s2_demo3" multiple="multiple" required>
                                            @foreach ($tag as $data)
                                                <option value="{{$data->id}}">
                                                    {{ $data->nama_tag }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tag')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <select class="form-control
                                        @error('kategori') is-invalid @enderror" name="id_kategori" id="" required>
                                            @foreach ($kategori as $data)
                                                <option value="{{$data->id}}">
                                                {{$data->nama_kategori}}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                            <label for="">Konten</label>
                                            <textarea class="form-control ckeditor
                                            @error('konten') is-invalid @enderror"
                                            name="konten"  required>
                                            </textarea>
                                            @error('konten')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
            </section>
@endsection
