  <!-- Start header -->
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="/images/logo.svg" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                   
                    <li><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Start Learning
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/lectures">Lectures</a>
                          <a class="dropdown-item" href="/videos">Videos</a>
                          
                          <a class="dropdown-item" href="/materials">Materials</a>
                          
                        </div>
                    </li>
                    <li><a class="nav-link" href="/contact">Contact us</a></li>

                    @guest
              
                    <li><a class="nav-link" href="{{route('register')}}">Sign up</a></li>
                    <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>


                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('requests.create')}}">Lecture Request</a>
                        <a class="dropdown-item" href="{{route('videos.create')}}">Submit video</a>
                        <a class="dropdown-item" href="{{route('lectures.create')}}">Create lecture</a>
                        <a class="dropdown-item" href="{{route('materials.create')}}">Submit material</a>
                        <a class="dropdown-item" href="/lectures">Edit Details</a>


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li><a class="nav-link" href="#">Notifications</a></li>



                    @endguest
                </ul>
            </div>
            <div class="search-box">
                <input type="text" class="search-txt" placeholder="Search">
                <a class="search-btn">
                    <img src="{{asset('/images/search_icon.png')}}" alt="#" />
                </a>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->