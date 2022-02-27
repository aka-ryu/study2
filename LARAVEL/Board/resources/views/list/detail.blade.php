@extends('layout');

@section('content')            
    
    <div class="detail-top">
      <div>
        <h1 class="list-pagename">Detail No. {{ $task->id }}</h1>
        <h3 class="card-title mb-2 text-muted">작성자 : {{ $task->writer }} </h3>
        <h3 class="card-title mb-2 text-muted">등록일 : {{ $task->created_at }}</h3>
      </div>
    </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">제목</label>
              <input type="text" class="form-control" value="{{ $task->title }}" name="title" readonly>
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">내용</label>
              <input type="text" id="db-content" class="form-control" value="{{ $task->content }}" style="display: none;">
              <textarea type="text" id="detail-content" rows="20" cols="50" class="form-control edit-content"  name="content" readonly></textarea>
            </div>

            <button class="btn btn-success" onclick="history.back()">목록</button>
          <button class="btn btn-warning" onclick="location.href='/edit/{{$task->id}}'" >수정</button>
          <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">삭제</button>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">경고 !</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        삭제한 게시물은 다시 복구할수 없습니다.<br>
        정말 삭제하시겠습니까?
      </div>

      <form method="POST" id="delete" action="/detail/{{$task->id}}">
        @csrf
        @method('delete')
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
        <button type="submit" form="delete" class="btn btn-danger">삭제</button>
      </div>
    </div>
  </div>
</div>
           
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>       
  <script>
    const detailContent = document.getElementById('detail-content');
    const dbcontent = document.getElementById('db-content').value;
    detailContent.innerText = dbcontent;
  </script>


@endsection