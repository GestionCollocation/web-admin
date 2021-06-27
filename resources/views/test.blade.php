@extends('layouts.app')
@section('content')
<div class="container">
    <div class="right-element">

        <p>hiiiii</p>

    </div>
    <div class="row">
        <div class="col-md-6" style="margin-top: 40px;">

            <h4>Sreach Location</h4>
            <hr>
            <form action="{{ route('web.sreach') }}" method="GET">

                <div class="form-group">
                    <label for="">Enter keyword</label>
                    <input type="text" class="form-control" name="query" placeholder="Sreach here....">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Sreach</button>
                </div>

            </form>
            @if(isset($post))
                @foreach($post as $item)

                    <div class="col-md-8">
                        <div class="media g-mb-30 media-comment" style=" left:0px; width: 700px;">
                            <br> <br> <br>
                            <!-- img -->
                            <i class="fas fa-user"></i>

                            <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30" style="border-radius: 20px; ">
                                <div class="g-mb-15">
                                    <h5 class="h5 g-color-gray-dark-v1 mb-0" style="color: blue;">{{ $item->name }}
                                    </h5>
                                    <hr>
                                    <h4 class="h5 g-color-gray-dark-v1 mb-0">{{ $item->titre }}</h4>
                                    <h4 class="h5 g-color-gray-dark-v1 mb-0"></h4>

                                    <span class="g-color-gray-dark-v4 g-font-size-12">{{ $item->created_at }}</span>
                                </div>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                    Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                    felis in faucibus ras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                </p>

                                <ul class="list-inline d-sm-flex my-0">
                                    <div class="cont">
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <button id="likebtn">
                                                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                                </button>
                                                <input type="number" id="input1" value="0" name="">

                                            </a>
                                        </li>
                                        <li class="list-inline-item g-mr-20">
                                            <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                                <button id="dislikebtn">
                                                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>

                                                </button>
                                                <input type="number" id="input2" value="0" name="">

                                            </a>
                                        </li>
                                    </div>

                                    <li class="list-inline-item ml-auto">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="fas fa-comment-alt"></i>
                                            Chat
                                        </a>
                                    </li>
                                    <li class="list-inline-item ml-auto">
                                        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                            <i class="fas fa-comments"></i>
                                            Commentaires
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif

            <br> <br>

            <div class="pagination-block" style="position: relative; left: 450px;">

                {!! $post->links('layouts.paginationlinks') !!}

            </div>

        </div>
    </div>
</div>


<script type="text/javascript">
    let likebtn = document.querySelector('#likebtn');
    let dislikebtn = document.querySelector('#dislikebtn');
    let input1 = document.querySelector('#input1');
    let input2 = document.querySelector('#input2');

    likebtn.addEventListener('click', () => {


        input1.style.color = "green";
        document.getElementById('input1').value = parseInt(input1.value) + 1;



    })
    dislikebtn.addEventListener('click', () => {
        input2.style.color = "#ff0000";
        document.getElementById('input2').value = parseInt(input2.value) + 1;

    })

</script>
@endsection
