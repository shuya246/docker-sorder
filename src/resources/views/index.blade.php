@extends('layouts.template')
  <!-- Content Wrapper. Contains page content -->
  @section('container')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>発注</h1>
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
              <h3 class="card-title">発注内容</h3>

            </div>
            <!-- form start -->
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
                    <input type="text" class="form-control" id="arrival_date" name="arrival_date" placeholder="" required>
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
              <div class="card-footer">
                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-default">送信</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">漢字確認</h3>
            </div>
            <!-- form start -->
            <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group col-sm-12 text-center" style="font-size: 15vh;" id="confirm">
                </div>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">再確認</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>・お子様の名前を確認</p>
            <p>・商品の到着希望日は「5営業日前」まで</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
            <button type="button" class="btn btn-primary">送信</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
  @endsection
