@extends('layouts.template')
    <!-- Content Wrapper. Contains page content -->
    @section('container')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>従業員管理</h1>
          </div>
          <div class="col-sm-6 text-right">
            <a href="user-add.html" class="btn btn-primary">従業員追加</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">絞り込み</h3>
                <div class="card-tools">
                  <button class="btn btn-default">送信</button>
                </div>
              </div>
              <!-- form start -->
              <form class="form-horizontal row">
                <div class="card-body col-sm-6">
                  <div class="form-group row">
                    <label for="store_id" class="col-sm-4 col-form-label text-right">店番</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" id="store_id" name="store_id"
                        placeholder="店番を入力してください" required>
                    </div>
                  </div>
                </div>
                <div class="card-body col-sm-6">
                  <div class="form-group row">
                    <label for="store_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="kind" id="kind">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">一覧</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered table-striped table-hover">
                <thead>                  
                  <tr>
                    <th>店番</th>
                    <th>店舗名</th>
                    <th>名前</th>
                    <th>ロール</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>248</td>
                    <td>木曽路浜松柳通店</td>
                    <td>大橋</td>
                    <td>一般</td>
                    <td>
                      <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">変更</button>
                      <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger">削除</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">変更</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                  <label for="store_id" class="col-sm-4 col-form-label text-right">ログインID</label>
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
                    <input type="number" class="form-control" id="store_id" name="store_id" placeholder="店番を入力してください" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="child_name" class="col-sm-4 col-form-label text-right">名前</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="child_name" name="child_name" placeholder="名前を正しく入力をしてください" required>
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
              <!-- /.card-footer -->
            </form>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-primary">変更</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-warning">
      <div class="modal-dialog">
        <div class="modal-content bg-warning">
          <div class="modal-header">
            <h4 class="modal-title">キャンセル</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p>キャンセルを実行します。よろしいですか</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-outline-dark">実行</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content bg-danger">
          <div class="modal-header">
            <h4 class="modal-title">削除</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p>削除を実行します。よろしいですか</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-outline-dark" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-default btn-outline-dark">実行</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    @endsection