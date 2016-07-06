@extends('admin.index')
@section('content')

  <!--main content start-->
      <section id="main-content">
          <section class=" wrapper">
          <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Cadastro de Banner</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{URL::to('/admin/home')}}">Home</a></li>
						<li><i class="icon_document_alt"></i>Banner</li>

				<a class="pull-right" href="{{URL::to('/admin/cadastro/banner/create')}}">Novo</a>
               </div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                  @include('admin.Cadastro.includes.session')
                    <table class="table table-hover">
                      <thead class="branco">
                        <tr>
                          <th>Nome</th>
                          <th>Link</th>
                          <th>Data de cadastro</th>
                            <th><i class="icon_cogs"></i> Ação</th>
                        </tr>
                      </thead>
                      <tbody class="branco">
                       @foreach ($banners as $banner)
                        <tr>
                          <td>{{$banner->nome}}</td>
                          <td>{{$banner->link}}</td>
                          <td>{{$banner->created_at}}</td>
                            <td>
                    <div class="btn-group">
          {!! Form::open (['method'=>'DELETE', 'url'=>['admin/cadastro/banner/'.$banner->id]]) !!}
            <a class="btn btn-success icon_check_alt2" href="{{ route('admin.cadastro.banner.show', ['id'=>$banner->id]) }}" title="Visualizar {{$banner->nome}}" ></a>
            <a class="btn btn-warning icon_check_alt2" href="{{ route('admin.cadastro.banner.show', ['id'=>$banner->id]).'/edit' }}" title="Editar {{$banner->nome}}" ></a>
            <input type="submit" class="btn btn-danger icon_check_alt2" value= "X"  title="Delete {{$banner->nome}}">
          {!! Form::close ()  !!}
                    </div>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

@stop