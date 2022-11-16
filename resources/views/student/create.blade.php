@extends('template.master')

@section('title')
<h1>Manajemen Siswa</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">Nomor Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="InputNIS" placeholder="Enter NIS">
                  </div>

                <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="InputNama" placeholder="Enter Nama Anda">
                  </div>

                  <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa"></textarea>
                      </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection