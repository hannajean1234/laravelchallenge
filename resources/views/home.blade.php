<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3">
        
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Aboutus">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contactus">Contact Us</a>
          </li>
        </ul>
        
      </div>
    </div>
  </div>
  <!-- navigation bar ends here -->



//@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

