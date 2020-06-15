<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>木曽路一升餅セット発注書</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../plugins/jquery-ui/jquery-ui.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- SEARCH FORM -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../index3.html" class="brand-link">
        <span class="brand-text font-weight-light">一升餅発注</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          </div>
          <div class="info">
            <a href="#" class="d-block">おぢか屋御中</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">発注</li>
            <li class="nav-item">
              <a href="index.html" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>発注</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="history.html" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>発注履歴</p>
              </a>
            </li>
          <li class="nav-header">管理</li>
          <li class="nav-item">
            <a href="user.html" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>従業員管理</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="store.html" class="nav-link">
              <i class="nav-icon far fa-building"></i>
              <p>店舗管理</p>
            </a>
          </li>
          <li class="nav-header">受注</li>
          <li class="nav-item">
            <a href="order.html" class="nav-link active">
              <i class="nav-icon far fa fa-sticky-note"></i>
              <p>受注管理</p>
            </a>
          </li>
          </ul>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>受注管理</h1>
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
                      <label for="child_name" class="col-sm-4 col-form-label text-right">発注日</label>
                      <div class="col-sm-8 input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i
                              class="far fa-calendar-alt"></i></span></div>
                        <input type="text" class="form-control" id="order_date" name="order_date" placeholder="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="store_id" class="col-sm-4 col-form-label text-right">お名前</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="child_name" name="child_name"
                          placeholder="お子様のお名前" required>
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
                      <th>到着希望日</th>
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
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">詳細</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2019/12/3</td>
                      <td>木曽路浜松柳通店</td>
                      <td>聡史(さとし)</td>
                      <td>白1個（商品No.1）</td>
                      <td>2019/12/24</td>
                      <td>
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">詳細</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2019/12/5</td>
                      <td>木曽路浜松柳通店</td>
                      <td>雅美(まさみ)</td>
                      <td>白3個・ピンク3個（商品No.16）</td>
                      <td>2019/12/25</td>
                      <td>
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">詳細</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2019/12/5</td>
                      <td>木曽路浜松柳通店</td>
                      <td>太郎(たろう)</td>
                      <td>白3個・ピンク3個（商品No.16）</td>
                      <td>2019/12/26</td>
                      <td>
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">詳細</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2019/12/7</td>
                      <td>木曽路浜松柳通店</td>
                      <td>花子(はなこ)</td>
                      <td>ピンク1個（商品No.2）</td>
                      <td>2020/1/5</td>
                      <td>
                        <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#modal-default">詳細</button>
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">発注内容</h4>
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
                      <input type="number" class="form-control" id="store_id" name="store_id" placeholder="店番を入力してください" required value="248" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="store_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="store_name" name="store_name" placeholder="店番より自動入力されます" disabled value="浜松柳通店">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name" class="col-sm-4 col-form-label text-right">お子様の名前</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="child_name" name="child_name" placeholder="お子様の名前を正しく入力をしてください" required value="紬" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name_ruby" class="col-sm-4 col-form-label text-right">読み仮名</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="child_name_ruby" name="child_name_ruby" placeholder="" required value="つむぎ" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kind" class="col-sm-4 col-form-label text-right">一升餅の種類</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="kind" id="kind" disabled>
                          <option>ピンク1個（商品No.2）</option>
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
                      <input type="text" class="form-control" id="arrival_date" name="arrival_date" placeholder="" required value="2019/12/16" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name" class="col-sm-4 col-form-label text-right">到着希望時間</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="child_name" name="child_name" placeholder="お子様の名前を正しく入力をしてください" required value="14時〜16時" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="note" class="col-sm-4 col-form-label text-right">備考</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id="note" name="note" placeholder="" disabled >備考が入ります</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="note" class="col-sm-4 col-form-label text-right">納付先</label>
                    <div class="col-sm-8">
                      木曽路 浜松柳通店 </br>
                      〒 430-0913</br>
                      静岡県浜松市中区船越町33-20</br>
                      電話: (053)411-9961</br>
                      FAX: (053)411-9962</br>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer -->
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">閉じる</button>
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
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>株式会社木曽路</b>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
    /* Japanese initialisation for the jQuery UI date picker plugin. */
    /* Written by Kentaro SATO (kentaro@ranvis.com). */
    (function (factory) {
      if (typeof define === "function" && define.amd) {

        // AMD. Register as an anonymous module.
        define(["../widgets/datepicker"], factory);
      } else {

        // Browser globals
        factory(jQuery.datepicker);
      }
    }(function (datepicker) {

      datepicker.regional.ja = {
        closeText: "閉じる",
        prevText: "&#x3C;前",
        nextText: "次&#x3E;",
        currentText: "今日",
        monthNames: ["1月", "2月", "3月", "4月", "5月", "6月",
          "7月", "8月", "9月", "10月", "11月", "12月"
        ],
        monthNamesShort: ["1月", "2月", "3月", "4月", "5月", "6月",
          "7月", "8月", "9月", "10月", "11月", "12月"
        ],
        dayNames: ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"],
        dayNamesShort: ["日", "月", "火", "水", "木", "金", "土"],
        dayNamesMin: ["日", "月", "火", "水", "木", "金", "土"],
        weekHeader: "週",
        dateFormat: "yy/mm/dd",
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: "年"
      };
      datepicker.setDefaults(datepicker.regional.ja);

      return datepicker.regional.ja;

    }));
    //Date range picker
    $('#order_date').datepicker();
    $('#arrival_date').datepicker();

    $("#child_name").change(function () {
      if ($(this).val()) {
        $("#confirm").html($(this).val());
      } else {
        $("#confirm").html("");
      }
    });
  </script>
</body>

</html>