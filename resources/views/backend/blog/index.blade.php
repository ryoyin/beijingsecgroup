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
        @if (session('alert-success'))
          <div class="callout callout-success">
            <b>{!! session('alert-success') !!}</b>
          </div>
        @endif
        @if (session('alert-warning'))
          <div class="callout callout-warning">
            <b>{!! session('alert-warning') !!}</b>
          </div>
        @endif
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">站內文章</h3> <a href="{{ action('BlogController@create') }}" type="button" class="btn btn-primary" style="padding: 3px 10px; margin-left: 10px;">新增</a>
          </div><!-- /.box-header -->
          <div class="box-body">
            <table id="research" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>標題</th>
                <th>分析師</th>
                {{--<th>標籤</th>--}}
                <th>發佈日期</th>
                <th>狀態</th>
                <th>建立日期</th>
                <th>最後更新</th>
                <th align="center">行動</th>
              </tr>
              </thead>
              <tbody>
              @foreach($researches AS $research)
                <tr>
                  <td>{{$research['title']}}</td>
                  <td>{{$research['author']}}</td>
                  {{--<td>分析,走勢,恆指</td>--}}
                  <td>{{$research['publish_date']}}</td>
                  <td align="center">
                    {{--{{ Form::select('status', array( 0 => '草稿', 1 => '準備中', 2 => '發佈', 3 => '暫停', 4 => '刪除'), old('status'), array('class' => 'form-control')) }}--}}
                    <?php
                          switch($research['status']) {
                            case 0:
                              $btn_name = 'default';
                              $btn_displayname = '草稿';
                              break;
                            case 1:
                              $btn_name = 'primary';
                              $btn_displayname = '準備中';
                              break;
                            case 2:
                              $btn_name = 'success';
                              $btn_displayname = '發佈';
                              break;
                            case 3:
                              $btn_name = 'warning';
                              $btn_displayname = '暫停';
                              break;
                            case 4:
                              $btn_name = 'danger';
                              $btn_displayname = '刪除';
                              break;
                          }
                    ?>

                    <button type="button" class="btn btn-{{$btn_name}}" style="width: 65px">{{$btn_displayname}}</button>

                  </td>
                  <td>{{$research['created_at']}}</td>
                  <td>{{$research['updated_at']}}</td>
                  <td align="center">
                    <form action="{{ url('bjsgadmin/blog/'.$research->id.'/edit') }}" method="GET" style="display: inline-block">
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-warning">
                        <i class="fa fa-edit"></i> Edit
                      </button>
                    </form>

                    <form action="{{ url('bjsgadmin/blog/'.$research->id) }}" method="POST" style="display: inline-block">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                      <button type="submit" class="btn btn-danger" onclick="return delete_research('{{ $research['title'] }}');">
                        <i class="fa fa-trash"></i> Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
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
    $("#research").DataTable({
      "order": [[5, "desc"]]
    });
  });

  function delete_research(title) {
//    alert(title);
    var cfm = confirm("是否確定刪除文章 \""+title+"\"");

    if(cfm === false) {
      return false;
    }

  }
</script>
@endsection

