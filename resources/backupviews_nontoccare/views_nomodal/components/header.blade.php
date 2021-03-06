     <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid"><img class="logo" src="/assets/images/logo.png" alt="">
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

          <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                  <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                          <a class="nav-link text-uppercase font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                              <a class="nav-link text-uppercase font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>

                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            {{-- metto ul link al profilo --}}
                            

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('show_profile')}}">My profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

              </ul>
          </div>
      </div>
  </nav>
  @yield('scripts')

  {{-- @section('scripts')
  @parent
  
  <script>
  $(function () {
      $('#registerForm').submit(function (e) {
          e.preventDefault();
          let formData = $(this).serializeArray();
          $(".invalid-feedback").children("strong").text("");
          $("#registerForm input").removeClass("is-invalid");
          $.ajax({
              method: "POST",
              headers: {
                  Accept: "application/json"
              },
              url: "{{ route('register') }}",
              data: formData,
              success: () => window.location.assign("{{ route('home') }}"),
              error: (response) => {
                  if(response.status === 422) {
                      let errors = response.responseJSON.errors;
                      Object.keys(errors).forEach(function (key) {
                          $("#" + key + "Input").addClass("is-invalid");
                          $("#" + key + "Error").children("strong").text(errors[key][0]);
                      });
                  } else {
                      window.location.reload();
                  }
              }
          })
      });
  })
  </script>
  @endsection --}}



