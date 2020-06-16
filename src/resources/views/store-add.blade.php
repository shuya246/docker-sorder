@extends('layouts.template')
@section('container')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>店舗追加</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">店舗</h3>
            </div>
            <!-- form start -->
          <form class="form-horizontal" action="{{route('store_add')}}" method="POST">
            @csrf
              <div class="card-body">
                <div class="form-group row">
                  <label for="store_num" class="col-sm-4 col-form-label text-right">店番</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="store_num" name="store_num" placeholder="店番を入力してください">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="store_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="store_name" name="store_name" placeholder="店番より自動入力されます">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">送信</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
    
@endsection
  <!-- Content Wrapper. Contains page content -->
  <!-- /.content-wrapper -->
  