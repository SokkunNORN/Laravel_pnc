
          <nav class="navbar navbar-expand-lg navbar-light bg-primary border-bottom sticky-top" style="z-index: 1;">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <img src="img/logo.png" alt="" style="width: 10%;">
        
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <input type="text" placeholder="Job Post" class="form-control">
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">settings</i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/logout')}}">Log out</a>
                        <a class="dropdown-item" href="{{url('/profilestudent')}}">Profile</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </nav>