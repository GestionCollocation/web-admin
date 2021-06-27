<div class="modal fade" id="deletePost{{$tem->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: red;">Avertissement !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <i class="fas fa-exclamation-circle"></i> Vous ne pourrez pas récupérer ce Poste
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a  class="btn btn-danger" href="{{route('post.destroy',$tem->id)}}" style="color: white;">Supprimer</a>
      </div>
    </div>
  </div>
</div>
