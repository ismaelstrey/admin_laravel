@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">  
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Dados Da Empresa</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Admin</li>
						<li><i class="fa fa-file-text-o"></i>Empresa</li>
				<a class="pull-right" href="{{URL::to('/admin/empresa/create')}}">Novo</a>
               </div>
			</div>    
              <div class="row">
              			
                  <div class="col-lg-12">
                      <section class="panel">
                          <div class="panel-body">
                          <table class="table table-hover">
                          	<thead>
                          		<tr>
                          			<th></th>
                          		</tr>
                          	</thead>
                          	<tbody>
                          		<tr>
                          			<td></td>
                          		</tr>
                          	</tbody>
                          </table>
                          </div>
                      </section>
                  </div>
                
                 
              </div>             
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

@stop