@extends('template.master')

@section('judul')    
<h1>MANAJEMEN KELAS</h1>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <<form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputKelas">Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputKelas" placeholder="Enter Kelas">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputJurusan" placeholder="Enter Jurusan">
                  </div>
              <!-- /.card-body -->

              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection