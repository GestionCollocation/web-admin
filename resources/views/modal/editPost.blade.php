<style type="text/css">
  .close:hover{
    color:red;
  }

</style>

<div class="modal fade" id="ModalEdit{{$tem->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"  style="width: 650px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #228B22">Modifier Poste</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{route('post.update',$tem->id)}}" method="POST">
    @csrf
   
  <div class="form-group">
    <label for="exampleFormControlInput1" style=" font-family: Arial, Helvetica, sans-serif;"> Titre :</label>
    <input type="text" name="titre" value="{{$tem->titre}} " class="form-control" placeholder="Titre" style="border-color: black;">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1" style=" font-family: Arial, Helvetica, sans-serif;"> Nombre Personne :</label>
    <input type="text" name="nb_personnes" value="{{$tem->nb_personnes}}" class="form-control"  placeholder="Nombre Personne" style="border-color: black;">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1" style=" font-family: Arial, Helvetica, sans-serif;"> Location :</label>
    <input type="text" name="location" value="{{$tem->location }}" class="form-control"  placeholder="Location" style="border-color: black;">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style=" font-family: Arial, Helvetica, sans-serif;"> Description :</label>
    <textarea class="form-control" name="description" value="" rows="3" style="border-color: black;">{!! $tem->description !!}</textarea>
  </div>

  <div class="form-group">
   
  </div>
   <button type="submit" class="btn btn-success">Modifier</button>
</form>
      </div>
     
    </div>
  </div>
</div>