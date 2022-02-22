@extends('layout');

@section('content')            
    
    <h2 class="list-pagename">List Page</h2>

@foreach ($tasks as $task)

    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $task->writer }} {{ $task->created_at }}</h6>
            <p class="card-text">{{ $task->content }}</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

@endforeach

<div class="pagination">
    <div>
        {{ $tasks->links('vendor.pagination.bootstrap-4') }}
    </div>
    <div class="btn btn-primary write-btn mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">글쓰기</div>
    
    <div class="list-search-write">
        
        <select class="form-select search-option mb-3" id="inputGroupSelect02">
            <option selected>--</option>
            <option value="1">제목</option>
            <option value="2">내용</option>
            <option value="3">작성자</option>
        </select>
        
        <div class="input-group mb-3 search-from">   
            <input type="text" class="form-control seacth-content" placeholder="검색 내용" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-secondary" type="button" id="button-addon2">검색</button>
        </div>
</div>


<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">글쓰기</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="POST" action="{{ route('task.store') }}">
              @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">제목</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">내용</label>
              <textarea class="form-control tasks-content" id="message-text"></textarea>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
          <button type="button" class="btn btn-primary">저장</button>
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection