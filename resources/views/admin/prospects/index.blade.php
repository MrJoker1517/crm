@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card my-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Перспективы</h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('admin.prospects.create') }}">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @if ($prospects->count())
                   <table class="table table-hover">
                       <thead>
                           <tr>
                               <th>Name</th>
                               <th>E-mail</th>
                               <th>Crate At</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>

                       </tbody>
                   </table>
                    
                @endif
            </div>
        </div>
    </div>
@endsection