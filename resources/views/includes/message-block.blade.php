@if(count($errors)>0)
    <div class="row">
        <div class="noty_bar noty_type_error">
            <div class=" activity col-md-4 col-md-offset-4 error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="not_bar noty_type_success">
            <div class="col-md-4 col-md-offset-4 success">
                {{Session::get('message')}}
            </div>
        </div>
    </div>

@endif