<div class="wrapper d-flex align-items-stretch border-right">
    <nav id="sidebar">
        <div class="p-4">
            <a href="{{ url('/home') }}" class="img mb-0">
                <img src="assets/images/logo_techvilla.png" alt="">
            </a>
        </div>
        <hr>
        <div class="p-4 pt-0">
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="{{ url('/home') }}"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-square"></i> Medicine</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ url('/category') }}">Medicine category</a>
                        </li>
                        <li>
                            <a href="{{ url('/medicine') }}">Medicine</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fas fa-square"></i> Sales</a>
                </li>
                <li>
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-square"></i> Expenses</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a href="{{ url('#') }}"> Expense Category</a>
                        </li>
                        <li>
                            <a href="{{ url('#') }}"> All expenses</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fas fa-square"></i> Reporting</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-square"></i> Staff</a>
                </li>



                <li>
                    <a href="#"><i class="fas fa-square"></i> Settings</a>
                </li>

            </ul>
    </nav>
