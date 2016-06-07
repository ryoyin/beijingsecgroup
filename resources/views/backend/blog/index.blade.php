@extends('backend.template.layout')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      網站文章平台
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
      <li class="active">網站文章平台</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">站內文章</h3> <a href="{{ action('BlogController@create') }}" type="button" class="btn btn-primary" style="padding: 3px 10px; margin-left: 10px;">新增</a>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>標題</th>
                <th>類型</th>
                <th>標籤</th>
                <th>日期</th>
                <th>狀態</th>
                <th align="center">行動</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>大市評論</td>
                <td>分析</td>
                <td>分析,走勢,恆指</td>
                <td>2016-06-01</td>
                <td>已發佈</td>
                <td>編輯 | 刪除</td>
              </tr>
              <tr>
                <td>大市評論</td>
                <td>分析</td>
                <td>分析,走勢,恆指</td>
                <td>2016-06-01</td>
                <td>已發佈</td>
                <td>編輯 | 刪除</td>
              </tr>
              <tr>
                <td>大市評論</td>
                <td>分析</td>
                <td>分析,走勢,恆指</td>
                <td>2016-06-01</td>
                <td>已發佈</td>
                <td>編輯 | 刪除</td>
              </tr>
              </tbody>
              {{--<tfoot>
              <tr>
                <th>標題</th>
                <th>類型</th>
                <th>標籤</th>
                <th>日期</th>
                <th>狀態</th>
                <th>行動</th>
              </tr>
              </tfoot>--}}
            </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </div>

  </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">

<!-- DataTables -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin/plugins/fastclick/fastclick.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection

