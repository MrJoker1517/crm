@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Перспективы <small class="text-muted">Отображение всех перспектив</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Действия
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Создать проспект</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->

        @if ($prospects->count())
            {{ $prospects->links() }}
            @foreach ($prospects as $prospect)
                @include('admin.prospects.partials.prospect-card', ['prospect' => $prospect])
            @endforeach
        @endif
    </div>
@endsection
