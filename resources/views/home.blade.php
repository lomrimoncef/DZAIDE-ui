@extends('./layouts.cadre')

@section('content')
        <section class="dorne-welcome-area " >
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="card">
                        <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            You are logged in!
                        </div>
                    </div>
        </section>

@endsection


