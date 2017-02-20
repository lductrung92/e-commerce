@extends('admin.base.base')

@section('title')
	Thêm nhóm sản phẩm
@endsection

@section('css')
  <link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css" />
@endsection

@section('content')
	<div id="page-wrapper" style="padding-top: 30px">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhóm sản phẩm</h1>
            </div>
           
            <!-- /.col-lg-12 -->
        </div>
            <a href="http://stackoverflow.com/questions/27638487/column-not-found-1054-unknown-column-laravel" id="show">
       Click Me
    </a>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm nhóm sản phẩm
                    </div>
                   
                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" id="messages">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" action="admin/category/insert" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Parent</label>
                                        <div class="col-md-4">
                                            <select class="form-control selectpicker" name="selParent">
                                                <option value="1">Please choose Category</option>
                                                @foreach($cate as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>}
                                                    option
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Name Category</label>  
                                        <div class="col-md-4">
                                            <input id="txtName" name="txtName" placeholder="Please input name Category" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Order Category</label>  
                                        <div class="col-md-4">
                                            <input id="txtOrder" name="txtOrder" placeholder="Please input order Category" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Keywords</label>  
                                        <div class="col-md-4">
                                            <input id="txtKeyWords" name="txtKeyWords" placeholder="Please input keywords" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" rows="5" id="txtDes" name="txtDes" placeholder="Plese input description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send"></label>
                                      <div class="col-md-4">
                                        <button id="insertCate" name="insertCate" class="btn btn-primary">Insert</button>
                                        <button id="reset" name="reset" class="btn btn-default">Reset</button>
                                      </div>
                                    </div>

                                    </fieldset>
                                    </form>

                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection


@section('script')
  <script src="bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
  <script src="js/validate.js" type="text/javascript"></script>
  <script src="js/message.js" type="text/javascript"></script>
@endsection

