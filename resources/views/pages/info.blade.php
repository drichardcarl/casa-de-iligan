@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    {{Auth::user()->name}}
@endif

    