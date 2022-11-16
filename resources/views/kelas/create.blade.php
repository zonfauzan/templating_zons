@extends('template.master')

@section('title')
<h1>Manajemen Kelas</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Nama kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="InputNIS" placeholder="Enter Your Class">
                  </div>

                <div class="form-group">
                    <label for="InputNama">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputNama" placeholder="Enter your jurusan">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection