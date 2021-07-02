<div class="modal fade" id="ModifyComment{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Votre Commentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{route('comments.update',$item->id)}}" method="POST">
           @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"></label>
            <textarea type="text" name="contenue" class="form-control" id="recipient-name">{!! $item->contenue !!}</textarea>
          </div>
          
      
      </div>
      <div class="modal-footer">
     
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
        </form>
    </div>
  </div>
</div>