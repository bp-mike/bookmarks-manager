@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @include('inc.messages')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add" type="button" name="button">Add BookMark</button>
                    <hr>
                    <h3>My BookMarks</h3>
                    <ul class="list-group">
                        @if ($bookmarks->count())
                            @foreach ($bookmarks as $bookmark)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-10">
                                            <a href="{{ $bookmark->url }}" target="_blank" style="position: absolute;top:30%;">
                                                {{ $bookmark->name}}
                                                <span class="badge badge-default">{{ $bookmark->description}}</span>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <span class="button-group">
                                                <button class="btn btn-danger delete-bookmark" name="button" type="button" data-id="{{ $bookmark->id}}"> 
                                                    Delete
                                                    <i class="bi bi-x-circle"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @else
                            <p>No book marks saved</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal --}}
<div class="modal" tabindex="-1" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add BookMark</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('bookmarks.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>BookMark Name</label>
                    <input type="text" class="form-control" name="name" />     
                </div>           
                <div class="form-group">
                    <label>BookMark Url</label>
                    <input type="text" class="form-control" name="url" />     
                </div>           
                <div class="form-group">
                    <label>BookMark Description</label>
                    <textarea type="text" class="form-control" name="description"></textarea>     
                </div>        
                
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                <button type="submit" class="btn btn-primary">Save changes</button>   
            </form>
        </div>
        {{-- <div class="modal-footer">
        </div> --}}
      </div>
    </div>
  </div>
@endsection
