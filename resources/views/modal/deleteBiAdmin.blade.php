

<div class="modal fade" id="deleteBien{{$bien->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
            <h2> Vous ête sûr?</h2>
       Vous ête sûr de supprimer cet uilisateur  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <a  class="btn " href="{{route('bi.destroy',$bien->id)}}" style="background-color: rgb(214, 44, 44) ; color: white">Supprimer</a>
      </div>
    </div>
  </div>
</div>
