




<div class="modal fade" id="deleteReply{{$reply->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: red;">Avertissement !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center mb-5" style="margin-top: 5px; ">
        <img src="{{asset('averr.jpg')}}" class="img-responsive"  style=" max-width: 20%; margin-top: 5px; ">
            <h2>Vous ête sûr</h2>
       Vous ête sûr de supprimer ce commentaire 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a  class="btn btn-danger" href="{{route('comments.destroy',$reply->id)}}" style="color: white;">Supprimer</a>
      </div>
    </div>
  </div>
</div>






