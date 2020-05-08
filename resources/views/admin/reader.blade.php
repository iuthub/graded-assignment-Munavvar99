<div id="exampleModalPopovers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <!-- Image-->
                <div class="view overlay">
                    <img id="dialog-image" class="card-img-top" src="{{ $link }}" alt="Example photo">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>

            <div class="modal-body">
                <h2 class="dialog-title text-center">Title content</h2>
                  <p class="dialog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                  <p class="dialog-price text-center"></p>
            </div>

            <div class="modal-footer text-center">

                <a href="{{ route('admin.reject',['id'=>$post->id]) }}" style="margin-left: 10px;" class="btn btn-outline-danger waves-effect">
                    <span class="value">Reject</span>
                    <i class="far fa-thumbs-down ml-1"></i>
                </a>

                <a class="btn btn-outline-success waves-effect" href="{{ route('admin.accept',['id'=>$post->id]) }}" style="margin-left: 10px;" >
                    <span class="value">Accept</span>
                    <i class="far fa-thumbs-up ml-1"></i>
                </a>

            </div>
        </div>
    </div>
</div>
