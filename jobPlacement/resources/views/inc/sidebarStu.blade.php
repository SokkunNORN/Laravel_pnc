
          <!-- Sidebar -->
          <nav class="border-right bg-dark" id="sidebar-wrapper" style="position: fixed; z-index: 1;">
                <div class="sidebar-header">
                    <br>
                    <br>
                    <br>
                </div>
        
                <ul class="list-group list-group-flush bg-dark">
                    <li>
                        <a href="{{url('/jobpoststudent')}}" class="list-group-item text-white list-group-item-action bg-dark">Job Post</a>
                    </li>
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" 
                            class="dropdown-toggle list-group-item list-group-item-action text-white bg-dark">
                            Notification
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="{{url('/interest')}}" class="list-group-item list-group-item-action text-white bg-dark">Interest</a>
                            </li>
                            <li>
                                <a href="{{url('/comment')}}" class="list-group-item list-group-item-action text-white bg-dark">Comment</a>
                            </li>
                            <li>
                                <a href="{{url('/apply')}}" class="list-group-item list-group-item-action text-white bg-dark">Apply Job</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/candidate')}}" class="list-group-item list-group-item-action text-white bg-dark">Candidate</a>
                    </li>
                </ul>
            </nav>