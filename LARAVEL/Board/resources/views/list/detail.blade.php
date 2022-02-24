@extends('layout');

@section('content')            
    
    <h2 class="list-pagename">Detail No. {{ $task->id }}</h2>
    
    <div class="mb-3">
              <label for="recipient-name" class="col-form-label">제목</label>
              <input type="text" class="form-control"  name="title" required>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">내용</label>
              <textarea class="form-control tasks-content" name="content" required></textarea>
            </div>


@endsection