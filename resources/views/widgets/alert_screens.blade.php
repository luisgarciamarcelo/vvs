<div class="container">
    <div class="row">
    @if(sizeof($columns) != 0)


        @foreach($columns as $key => $column)
            <?php
            if($key < count($columns)-1){
                list($name,$side) = explode("-",$column->codigo);
                $next = array_key_exists($key + 1, $columns) ? $columns[$key +1] : false;
                list($namenext, $sidenext) = explode("-",$columns[$key+1]->codigo);
                $imagenext = $columns[$key+1]->picture;
                $alertnext = $columns[$key+1]->estatus;
            }else{
                list($name,$side) = explode("-",$column->codigo);
                list($namenext, $sidenext) = explode("-",$columns[$key]->codigo);
                $imagenext = $columns[$key]->picture;
                $alertnext = $columns[$key]->estatus;
            }


            ?>
            @if($name == $namenext && count($columns) != $key+1)
                <div class="col-md-4">
                    <div class="card card-home-head">
                        @if($column->estatus == 2 || $alertnext == 2)
                            <div class="card-header card-home-alert">{{$name}}<a href="{{route('admin.screens.edit',$name)}}" class="float-right">
                                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                </a></div>
                        @else
                            <div class="card-header card-home">{{$name}}<a href="{{route('admin.screens.edit',$name)}}" class="float-right">
                                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                                </a></div>
                        @endif

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div id="screen" class="row">
                                @if($side == 1)
                                    <div class="col-6">
                                        <span class="label label-success">Lado A</span>
                                        @if($column->picture != NULL)
                                            <img id="{{$name.'-'.$side}}" src="data:image/jpg;base64,{{$column->picture}}" class="imagesCamera">
                                        @else
                                            <img src="http://media.gettyimages.com/vectors/vertical-autumn-background-poster-for-advertising-autumn-sale-card-vector-id834218392?s=170667a&w=1007" class="imagesCamera">
                                        @endif
                                    </div>
                                @endif
                                <div class="col-6">
                                    <span class="label label-success">Lado B</span>
                                @if($imagenext != NULL)
                                    <!--<img src="http://media.gettyimages.com/vectors/vertical-autumn-background-poster-for-advertising-autumn-sale-card-vector-id834218392?s=170667a&w=1007" class="imagesCamera">-->
                                        <img id="{{$namenext.'-'.$sidenext}}" src="data:image/jpg;base64,{{$imagenext}}" class="imagesCamera">
                                    @else
                                        <img src="http://media.gettyimages.com/vectors/vertical-autumn-background-poster-for-advertising-autumn-sale-card-vector-id834218392?s=170667a&w=1007" class="imagesCamera">
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    @else
        <p>hola no hay alertas</p>
    @endif
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script type="text/javascript">
    // Get the modal

    $(document).ready(function(){
        $('#screen img').click(function(){
            var modal = document.getElementById("myModal");
            var img = $(this).attr('id');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                modal.style.display = "none";
            };
        });
        function blink(selector){
            $(selector).fadeOut('slow', function(){
                $(this).fadeIn('slow', function(){
                    blink(this);
                });
            });
        }
        blink('.card-home-alert');
    });
</script>