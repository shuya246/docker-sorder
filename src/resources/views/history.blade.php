@extends('layouts.template')

    <!-- Content Wrapper. Contains page content -->
    @section('container')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>発注履歴</h1>
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
                  <div class="form-group row">
                    <label for="store_id" class="col-sm-4 col-form-label text-right">お名前</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="child_name" name="child_name"
                        placeholder="お子様のお名前" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name" class="col-sm-4 col-form-label text-right">発注日</label>
                    <div class="col-sm-8 input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i
                            class="far fa-calendar-alt"></i></span></div>
                      <input type="text" class="form-control" id="order_date" name="order_date" placeholder="">
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
                  <div class="form-group row">
                    <label for="store_name" class="col-sm-4 col-form-label text-right">商品</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="kind" id="kind">
                        <option></option>
                        <option>白1個（商品No.1）</option>
                        <option>ピンク1個（商品No.2）</option>
                        <option>白1個（商品No.16）</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name" class="col-sm-4 col-form-label text-right">到着希望日</label>
                    <div class="col-sm-8 input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i
                            class="far fa-calendar-alt"></i></span></div>
                      <input type="text" class="form-control" id="arrival_date" name="arrival_date" placeholder="">
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
                    <th>発注日</th>
                    <th>店舗</th>
                    <th>お名前</th>
                    <th>種類</th>
                    <th>到着予定日</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2019/12/1</td>
                    <td>木曽路浜松柳通店</td>
                    <td>紬(つむぎ)</td>
                    <td>白3個・ピンク3個（商品No.16）</td>
                    <td>2019/12/20</td>
                    <td>
                    </td>
                  </tr>
                  <tr>
                    <td>2019/12/3</td>
                    <td>木曽路浜松柳通店</td>
                    <td>聡史(さとし)</td>
                    <td>白1個（商品No.1）</td>
                    <td>2019/12/24</td>
                    <td>
                      <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">変更</button>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-warning">キャンセル</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2019/12/5</td>
                    <td>木曽路浜松柳通店</td>
                    <td>雅美(まさみ)</td>
                    <td>白3個・ピンク3個（商品No.16）</td>
                    <td>2019/12/25</td>
                    <td>
                      <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">変更</button>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-warning">キャンセル</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2019/12/5</td>
                    <td>木曽路浜松柳通店</td>
                    <td>太郎(たろう)</td>
                    <td>白3個・ピンク3個（商品No.16）</td>
                    <td>2019/12/26</td>
                    <td>
                      <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">変更</button>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-warning">キャンセル</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2019/12/7</td>
                    <td>木曽路浜松柳通店</td>
                    <td>花子(はなこ)</td>
                    <td>ピンク1個（商品No.2）</td>
                    <td>2020/1/5</td>
                    <td>
                      <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">変更</button>
                      <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-warning">キャンセル</button>
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
                  <label for="store_id" class="col-sm-4 col-form-label text-right">店番</label>
                  <div class="col-sm-8">
                    <input type="number" class="form-control" id="store_id" name="store_id" placeholder="店番を入力してください" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="store_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="store_name" name="store_name" placeholder="店番より自動入力されます" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="child_name" class="col-sm-4 col-form-label text-right">お子様の名前</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="child_name" name="child_name" placeholder="お子様の名前を正しく入力をしてください" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="child_name_ruby" class="col-sm-4 col-form-label text-right">読み仮名</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="child_name_ruby" name="child_name_ruby" placeholder="" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kind" class="col-sm-4 col-form-label text-right">一升餅の種類</label>
                  <div class="col-sm-8">
                      <select class="form-control" name="kind" id="kind">
                        <option></option>
                        <option>白1個（商品No.1）</option>
                        <option>ピンク1個（商品No.2）</option>
                        <option>白3個・ピンク3個（商品No.16）</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="child_name" class="col-sm-4 col-form-label text-right">商品到着希望日</label>
                  <div class="col-sm-8 input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control change-arrival_date" name="arrival_date" placeholder="" required>
                  </div>
                  <div class="text-right col-sm-12">
                      <small class="text-muted">※ 使用日の前日を指定(5日前締切)</small>
                   </div>
                </div>
                <div class="form-group row">
                  <label for="note" class="col-sm-4 col-form-label text-right">備考</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" id="note" name="note" placeholder="" ></textarea>
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
    @endsection
      <!-- Content Header (Page header) -->