@extends('admin.base.base');

@section('title')
	Thêm nhóm sản phẩm
@endsection

@section('css')
  <link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css" />
@endsection

@section('content')
	<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nhóm sản phẩm</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Thêm nhóm sản phẩm
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal">
                                    <fieldset>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Titre</label>
                                        <div class="col-md-4">
                                            <select class="form-control selectpicker">
                                                <option value="1">Mademoiselle</option>
                                                <option value="2">Madame</option>
                                                <option value="3">Monsieur</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="Nom22">Nom</label>  
                                        <div class="col-md-4">
                                            <input id="Nom22" name="Nom22" placeholder="Nom" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="send"></label>
                                      <div class="col-md-4">
                                        <button id="send" name="send" class="btn btn-primary">Envoyer</button>
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
  <<script src="bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
@endsection

