@extends('layout.elegant')
@section('slide')
<div class="banner" id="templatemo_banner_slide">
    <ul>
    @if (isset($dados['banner']))       
   
        @foreach ($dados['banner'] as $banner) 
            <li class="templatemo_banner_slide_0{{$banner->id++}}">
                <div class="slide_caption">
                    <h1>{{$banner->nome}} </h1>
                    <p>{{$banner->descricao}}</p>
                </div>
            </li>
        @endforeach
         @endif
    </ul>
</div>
@stop
@section('sobre')
    <div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
<h1>Nossos serviços</h1>
@if (isset($dados['servicos']))
    @foreach ($dados['servicos'] as $servico)        
            <div class="col-sm-6 col-md-3 about_icon">
                <div class="imgwap mission"><i class="fa {{$servico->icone}}"></i></div>
                <h2><a href="{{ url('empresa/servicos/').'/'.$servico->id }}" title="{{$servico->nome}}">{{$servico->nome}}</a></h2>
                <p>{{$servico->descricao}}</p>
            </div>
    @endforeach
 @endif       
     

        <div class="clearfix testimonial_top_bottom_spacer"></div>
        <div class="col-xs-1 pre_next_wap" id="prev_testimonial">
            <a href="#"><span class="glyphicon glyphicon-chevron-left pre_next"></span></a>
        </div>
        <div id="testimonial_text_wap" class="col-xs-9 col-sm-10">
              <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/templatemo_member_01.jpg" class="img-responsive" alt="Business Development Manager" />
                </div>
                <div class="col-sm-9">
                    <h2>Tracy Mya</h2>
                    <h3>Business Development Manager</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/templatemo_member_02.jpg" class="img-responsive" alt="Chief Public Relation Officer" />
                </div>
                <div class="col-sm-9">
                    <h2>Mary Kas</h2>
                    <h3>Chief Public Relation Officer</h3>
                    <p>Fusce et orci mollis, congue lorem vitae, semper erat. Curabitur quis pellentesque nisl, at adipiscing libero. Integer at sem dui. Fusce posuere aliquet dolor, at viverra odio accumsan sed. Sed pharetra vel risus a convallis. Maecenas in adipiscing libero, id molestie odio. Phasellus id pharetra mauris, sit amet varius velit. Aliquam non dapibus libero.</p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/templatemo_member_03.jpg" class="img-responsive" alt="Marketing Executive" />
                </div>
                <div class="col-sm-9">
                    <h2>Julia Pan</h2>
                    <h3>Marketing Executive</h3>
                    <p>Maecenas nec rhoncus orci. Morbi tempus ut leo ac varius. Cras convallis sagittis dignissim. Aenean diam libero, venenatis eu risus eu, tincidunt porttitor orci. Nulla consequat mi et lectus vehicula condimentum. Nulla ullamcorper dolor vehicula dolor interdum, eget fermentum ligula bibendum. Sed vel dolor libero.</p>
                </div>
            </div><!--.testimonial_text-->
            <div class="testimonial_text">
                <div class="col-sm-3">
                    <img src="images/templatemo_member_04.jpg" class="img-responsive" alt="Chief Executive Officer" />
                </div>
                <div class="col-sm-9">
                    <h2>Linda Von</h2>
                    <h3>Chief Executive Officer</h3>
                    <p>Donec lacinia erat quis venenatis varius. Suspendisse non turpis vitae libero interdum lacinia. Nulla in nibh arcu. Donec quam neque, porta at pellentesque at, imperdiet ut velit. Pellentesque luctus ac nunc et hendrerit. Aliquam eu scelerisque eros. Vestibulum scelerisque mi nec augue condimentum rhoncus.</p>
                </div>
            </div><!--.testimonial_text-->        </div><!--#testimonial_text_wap-->
        <div class="col-xs-1 pre_next_wap" id="next_testimonial">
            <a href="#"><span class="glyphicon glyphicon-chevron-right pre_next"></span></a>
        </div>
        <div class="clearfix testimonial_top_bottom_spacer"></div>
    </div>
</div><!--templatemo_about-->
@stop
@section('event')
    <div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
        <h1>Postagens</h1>
            @if (isset($dados['postagens']))
                @foreach ($dados['postagens'] as $postagen) 
                   <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
                        <div class="event_box_wap event_animate_left">
                            <div class="event_box_img">
                                <img src="{{ url('images/uploads/'.$postagen->imagem) }}" class="img-responsive" alt="Web Design Trends" />
                            </div>
                            <div class="event_box_caption">    
                    <h1>{{$postagen->nome}}</h1>
                    <p><span class="glyphicon glyphicon-map-marker"></span> New Hotel, Bangkok, Thailand &nbsp;&nbsp; <span class="glyphicon glyphicon-time"></span> {{$postagen->created_at}}</p>
                  <p>{{$postagen->descricao}}</p>  
                    </div>
                        </div>
                    </div>      
                @endforeach
             @endif       
    </div>
</div>
@stop
@section('content')


<div id="templatemo_timeline" class="container_wapper">
    <h1>Timeline</h1>
    <div class="container-fluid">
        <div class="time_line_wap">
            <div class="time_line_caption">10 days ago</div>
            <div class="time_line_paragraph">
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">George</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Web Design</a>, <a href="#">Responsive</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">3 comments</a>
                </p>
                <p>Aliquam adipiscing nibh sem, vitae aliquet ipsum rutrum nec. Nulla nec fermentum libero. Duis quis fermentum libero. Nunc facilisis ultrices fringilla. Nullam sed ligula ac libero venenatis pellentesque vitae nec mauris.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">2 weeks ago</div>
            <div class="time_line_paragraph">
                <h1>Excepteur sint occaecat cupidatat</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Kyor Kyor</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">HTML5</a>, <a href="#">Mobile</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">2 comments</a>
                </p>
                <p>Vestibulum pellentesque leo mi, non adipiscing odio tristique in. Aliquam suscipit magna nisi, non dapibus purus cursus in. Sed vitae quam bibendum mauris vehicula pretium. Curabitur ac ornare magna. Vestibulum dapibus dolor porttitor urna pretium euismod. Aliquam lobortis enim at lacinia mollis.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">one month ago</div>
            <div class="time_line_paragraph">
                <h1>Doloremque laudantium</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Cooker</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Web Design</a>, <a href="#">CSS3</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">3 comments</a>
                </p>
                <p>Fusce feugiat sem dolor. Curabitur a consectetur quam. Maecenas ut purus rutrum, bibendum eros eu, suscipit diam. Praesent semper bibendum gravida. Praesent eget leo ac arcu aliquet pellentesque sit amet at tortor. Cras sagittis nec tellus nec imperdiet.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">15 May 2084</div>
            <div class="time_line_paragraph">
                <h1>Neque porro quisquam</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Brain</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">HTML5</a>, <a href="#">Animation</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">6 comments</a>
                </p>
                <p>Ut varius nibh adipiscing sagittis lobortis. Sed imperdiet risus enim, sit amet tempus nisi lobortis a. Etiam in gravida leo, non interdum sapien. Sed mi odio, pharetra at tellus ac, adipiscing pulvinar dolor. Nulla quis suscipit urna. Integer congue non nunc a luctus.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">20 April 2084</div>
            <div class="time_line_paragraph">
                <h1>Sed do eiusmod tempor</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">John West</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">3D Effect</a>, <a href="#">CSS3</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">4 comments</a>
                </p>
                <p>Maecenas in ipsum pulvinar, dapibus leo ut, adipiscing neque. Phasellus tincidunt arcu eleifend placerat posuere. Nullam nec eros in leo facilisis blandit id in neque. Proin varius, neque in eleifend porta, neque arcu dapibus risus, vel congue ante nibh varius nisi.</p>
            </div>
        </div>
        <div class="time_line_wap">
            <div class="time_line_caption">5 April 2084</div>
            <div class="time_line_paragraph">
                <h1>Ut enim ad minim veniam</h1>
                <p>
                       <span class="glyphicon glyphicon-user"></span> <a href="#">Moon Plus</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-bookmark"></span> <a href="#">Web Design</a>, <a href="#">Responsive</a> &nbsp;&nbsp;
                       <span class="glyphicon glyphicon-edit"></span> <a href="#">5 comments</a>
                </p>
                <p>Duis lacinia leo erat, eu tincidunt mauris congue ut. Ut auctor turpis a sapien commodo, ac ultrices dui vehicula. Etiam in tristique felis. Sed eleifend turpis sed purus venenatis fringilla. <br><br> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vel sollicitudin eros, vel vulputate leo.</p>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact</h1>
        <div class="col-xs-12">
            <div id="templatemo_contact_map"></div>
        </div>
        <div class="col-md-4">
            <h2>Contact Info.</h2>
            <p>Sed viverra nunc magna, quis placerat augue pellentesque quis. Sed nec pellentesque dolor. Aenean in lectus enim. Phasellus eu egestas libero. Vivamus ultrices ligula a dapibus lobortis.</p>
            <br>
            <p><strong>Email:</strong> info@company.com<br /><strong>Phone:</strong> 010-020-0340<br /><strong>Website:</strong> www.company.com<br /><strong>Address:</strong> 123 Thamine Street, Digital Estate, Yangon 10620, Myanmar</p>
            <ul class="list-inline social-link">
                <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-facebook"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-youtube"></i></a> 
                </li>
                <li>
                    <a href="#"><i class="fa fa-github"></i></a> 
                </li>
           </ul>
        </div>
        <form action="#" method="post" class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                <h2>Send Enquiry</h2>
                </div>
                <div class="col-md-6">
                    <p>Name</p>
                    <input type="text" name="name" id="name" placeholder="Your Name" />
                </div>
                <div class="col-md-6">
                    <p>Email</p>
                    <input type="text" name="email" id="email" placeholder="Your Email" />
                </div>
                <div class="col-md-12">
                    <p>Subject</p>
                    <input type="text" name="subject" id="subject" placeholder="Subject" />
                </div>
                <div class="col-md-12">
                    <p>Message</p>
                    <textarea name="message" id="message"  placeholder="Write your message here..."></textarea>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop
