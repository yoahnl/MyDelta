<div class="container">

    @if(Session::has('flash_message'))
        @if(Session::get('type') == 'error')
            <div class="alert alert-danger col-lg-4 col-lg-offset-4">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('flash_message')}}
            </div>
        @endif
        @if(Session::get('type') == 'sucess')
            <div class="alert alert-success col-lg-4 col-lg-offset-4">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('flash_message')}}

            </div>
        @endif
        <hr>
    @endif
</div>