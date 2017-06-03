<ul class="nav navbar-nav">




    {{menu('admin')}}






    <li class="dropdown">
        <a href="#tools-dropdown-element" data-toggle="collapse" aria-expanded="false" target="_self">
            <span class="icon voyager-tools"></span>
            <span class="title">Tools</span>
        </a>
        <div id="tools-dropdown-element" class="panel-collapse collapse ">
            <div class="panel-body">
                <ul class="nav navbar-nav">




                    <li class="">

                        <a href="{{URL::to('admin/menus')}}" target="_self">
                            <span class="icon voyager-list"></span>
                            <span class="title">Menu Builder</span>
                        </a>
                    </li>


                    <li class="">
                        <a href="{{URL::to('admin/databases')}}" target="_self">
                            <span class="icon voyager-data"></span>
                            <span class="title">Database</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </li>