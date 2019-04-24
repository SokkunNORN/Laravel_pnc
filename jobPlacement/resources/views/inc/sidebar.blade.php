
          <!-- Sidebar -->
    <nav class="border-right bg-dark" id="sidebar-wrapper" style="position: fixed; z-index: 1;">
            <div class="sidebar-header">
                <br>
                <br>
                <br>
            </div>
    
            <ul class="list-group list-group-flush bg-dark">
                <li>
                    <a href="{{url('/managejob')}}" class="list-group-item list-group-item-action text-white bg-dark">Manage Job</a>
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" 
                        class="dropdown-toggle list-group-item list-group-item-action text-white bg-dark">
                        Manage Student
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('/approve')}}" class="list-group-item list-group-item-action text-white bg-dark">Approve</a>
                        </li>
                        <li>
                            <a href="{{url('/interview')}}" class="list-group-item list-group-item-action text-white bg-dark">Set Interview</a>
                        </li>
                        <li>
                            <a href="{{url('/setstudent')}}" class="list-group-item list-group-item-action text-white bg-dark">Set Student pass</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/viewstudent')}}" class="list-group-item list-group-item-action text-white bg-dark">View Student</a>
                </li>
            </ul>
        </nav>