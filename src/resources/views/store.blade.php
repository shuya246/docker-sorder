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
            <a href="store.html" class="nav-link active">
              <i class="nav-icon far fa-building"></i>
              <p>店舗管理</p>
            </a>
          </li>
          <li class="nav-header">受注</li>
          <li class="nav-item">
            <a href="order.html" class="nav-link">
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
              <h1>店舗管理</h1>
            </div>
            <div class="col-sm-6 text-right">
              <a href="store-add.html" class="btn btn-primary">店舗追加</a>
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
                        <input type="number" class="form-control" id="store_name" name="store_id"
                          placeholder="店舗名を入力してください" required>
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
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>248</td>
                      <td>木曽路浜松柳通店</td>
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
                    <label for="child_name" class="col-sm-4 col-form-label text-right">店番</label>
                    <div class="col-sm-8">
                      <input type="text" value="248" class="form-control" id="child_name" disabled name="child_name" placeholder="店舗名を正しく入力をしてください" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="child_name" class="col-sm-4 col-form-label text-right">店舗名</label>
                    <div class="col-sm-8">
                      <input type="text" value="木曽路浜松柳通店" class="form-control" id="child_name" name="child_name" placeholder="店舗名を正しく入力をしてください" required>
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