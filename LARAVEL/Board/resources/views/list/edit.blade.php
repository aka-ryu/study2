@extends('layout');

@section('content')            
    
    <div class="detail-top">
      <div>
        <h1 class="list-pagename">Edit No. {{ $task->id }}</h1>
        <h3 class="card-title mb-2 text-muted">작성자 : {{ $task->writer }} </h3>
        <h3 class="card-title mb-2 text-muted">등록일 : {{ $task->created_at }}</h3>
      </div>
      
      </div>
        <form method="POST" action="{{ route('tasks.update', ['task'=> $task->id]) }}">
        @csrf
        @method('PUT')
        <input type="text" value="{{$task->id}}" name="id" style="display:none">
            <div class="mb-3">
              <label for="recipient-name"  class="col-form-label">제목</label>
              <input type="text" class="form-control" value="{{ $task->title }}" name="title">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">내용</label>
              <input type="text" id="db-content" class="form-control" value="{{ $task->content }}" style="display: none;">
              <textarea type="text" id="detail-content" rows="20" cols="50" class="form-control edit-content"  name="content"></textarea>
            </div>
          <button class="btn btn-success" onclick="history.back()">취소</button>
          <button type="submit" class="btn btn-warning"  >수정</button>
      </form>
          

         
 
  <script>
    const detailContent = document.getElementById('detail-content');
    const dbcontent = document.getElementById('db-content').value;
    detailContent.innerText = dbcontent;
  </script>

@endsection