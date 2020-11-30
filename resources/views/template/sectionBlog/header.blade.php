 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
     <div class="container">
         <a class="navbar-brand" href="index.html">{{config('app.nama', 'Blog')}}</a>
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fas fa-bars"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="{{url('post')}}">Tambah Blog</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="{{url('userpost')}}">Postingan</a>
                 </li>
                 <li class="nav-item">
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
    
                                                                       document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>
                  
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                                </a>

                              </div>
                               </ul>
                           </div>
                       </div>
                 </li>
 </nav>

 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/home-bg.jpg')">
     <div class="overlay"></div>
     <div class="container">
         <div class="row">
             <div class="col-lg-8 col-md-10 mx-auto">
                 <div class="site-heading">
                     <h1>This is Blog</h1>
                     <span class="subheading">Blog Tempat Terbaik bagi Penulis</span>
                 </div>
             </div>
         </div>
         
     </div>
 </header>