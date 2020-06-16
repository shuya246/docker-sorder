@extends('layouts.template')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>従業員追加</h1>
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
              <h3 class="card-title">従業員</h3>
            </div>
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="name" class="col-sm-4 col-form-label text-right">ログインID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="login_id" name="login_id" placeholder="ログインID" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-4 col-form-label text-right">パスワード</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" placeholder="パスワード" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="store_id" class="col-sm-4 col-form-label text-right">店番</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="store_id" name="store_id" placeholder="店番を入力してください">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="store_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="store_name" name="store_name" placeholder="店番より自動入力されます" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="name" class="col-sm-4 col-form-label text-right">名前</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="child_name" name="name" placeholder="" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kind" class="col-sm-4 col-form-label text-right">ロール</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="kind" id="kind">
                        <option></option>
                        <option>一般</option>
                        <option>名古屋営業部</option>
                        <option>東京営業部</option>
                        <option>大阪営業部</option>
                        <option>管理者</option>
                      </select>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">送信</button>
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
<!-- /.content-wrapper -->
    
@endsection
  