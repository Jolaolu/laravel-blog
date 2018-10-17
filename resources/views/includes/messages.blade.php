@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <span class="container">
            <div class="alert alert-danger">
                {{$error}}
            </div>
        </span>
     @endforeach
 @endif
 <div class="container">
    @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
    @endif
    @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
    @endif
</div>
