@extends('layouts.main')
@section('content')
    <h1>Hello, world!</h1>


    <div class="row">
        @foreach ($data as $d)
            <div class="col-xxl-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/1024/768" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $d['name'] }}
                        </h5>
                        <p class="card-text">{{ $d['email'] }}</p>
                        <p class="card-text">{{ $d['password'] }}</p>
                        <p class="card-text">{{ $d['createdAt'] }}</p>
                        <p class="card-text">{{ $d['updatedAt'] }}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
