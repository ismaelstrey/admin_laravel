@extends('admin.index')
@section('content')
<section id="main-content">
     <section class="wrapper">
     		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Cadastro</li>
						<li><i class="fa fa-file-text-o"></i>Anuncio</li>
					</ol>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							  <div class="col-lg-6">
							         <section class="panel">
						              <header class="panel-heading">
						                  Cadstro de Anuncios
						              </header>
						              <div class="panel-body">
						                  <form class="form-horizontal " action="#">
						                      <!--date picker start-->
						                      <div class="form-group">
						                          <label class="control-label col-sm-4">Default Datepicker</label>
						                          <div class="col-sm-6">
						                              <input id="cp1" type="text" value="28-10-2013" size="16" class="form-control">
						                          </div>
						                      </div>
						                      <div class="form-group">
						                          <label class="control-label col-sm-4">Starts with years view</label>
						                          <div class="col-sm-6">


						                              <div class="input-append date" id="dpYears" data-date="18-06-2013"
						                                   data-date-format="dd-mm-yyyy" data-date-viewmode="years">
						                                  <input class="form-control" size="16" type="text" value="28-06-2013" readonly>
						                                  <span class="add-on"><i class="icon-calendar"></i></span>
						                              </div>
						                          </div>
						                      </div>

						                      <div class="form-group">
						                          <label class="control-label col-sm-4"> Date Ranges</label>
						                          <div class="col-sm-6">
						                              <div class="input-prepend">
						                                  <input id="reservation" type="text" class=" form-control" />
						                              </div>
						                          </div>
						                      </div>
						                      <!--date picker end-->

						                      <!--color picker start-->
						                      <div class="form-group">
						                          <label class="control-label col-sm-4">Default</label>

						                          <div class="col-sm-5">
						                              <input type="text" value="#CCCCCC" class="cp1 form-control">
						                          </div>
						                      </div>
						                      <div class="form-group">
						                          <label class="control-label col-sm-4">RGBA</label>

						                          <div class="col-sm-5">
						                              <input type="text" data-color-format="rgba" value="rgb(255,255,255,1)" class="cp2 form-control">
						                          </div>
						                      </div>
						                      <!--color picker end-->
						                  </form>
						              </div>
						          </section>
						        </div>
						    <div class="col-lg-6">
							</div>
						</div> 
					</div>
				</div> 
	</section>
</section>
@stop