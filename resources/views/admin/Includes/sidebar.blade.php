 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">

                      <a class="" href="{{URL::to('/admin/home')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Cadastro</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{URL::to('/admin/cadastro/anuncio')}}"> Auncios </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastro/banner')}}"> Banners </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastro/planos')}}"> Planos </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastro/postagen')}}"> Postagens </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastro/servicos')}}"> Serviços </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastro/usuarios')}}"> Usuario </a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{URL::to('/admin/pagina/elementos')}}">Elements</a></li>
                          <li><a class="" href="{{URL::to('/admin/pagina/buttons')}}">Buttons</a></li>
                          <li><a class="" href="{{URL::to('/admin/pagina/grids')}}">Grids</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="{{URL::to('/admin/pagina/widgets')}}">
                          <i class="icon_genius"></i>
                          <span>Widgets</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="{{URL::to('/admin/pagina/chart-chartjs')}}">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Cadastrados</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{{URL::to('/admin/cadastrados/anuncio')}}"> Auncios </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastrados/banner')}}"> Banners </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastrados/planos')}}"> Planos </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastrados/postagen')}}"> Postagens </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastrados/servicos')}}"> Serviços </a></li>
                          <li><a class="" href="{{URL::to('/admin/cadastrados/usuarios')}}"> Usuario </a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Empresa</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{{URL::to('/admin/empresa/')}}">Empresa</a></li>
                          <li><a class="" href="{{URL::to('/admin/empresa/login')}}"><span>Login Page</span></a></li>
                          <li><a class="" href="{{URL::to('/admin/empresa/blank')}}">Blank Page</a></li>
                          <li><a class="" href="{{URL::to('/admin/empresa/404')}}">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->