<x-admin.admin-master>

@section('content')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

{{-- DropZone.JS --}}
<script src="{{ asset('dropzone/dist/dropzone.js') }}"></script>
<link href="{{ asset('dropzone/dist/dropzone.css') }}" rel="stylesheet" />

<h1 class="mt-4">Upload</h1>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Select Image</h3>
    </div>
    <div class="panel-body">
        <form action="{{ route('admin.gallery.upload') }}" class="dropzone" id="dropzoneForm">
            @csrf
        </form>
        <div align="center" class="mt-3">
            <button type="button" class="btn btn-info" id="submit-all">Upload</button>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Uploaded Image</h3>
    </div>
    <div class="panel-body" id="uploaded_image"></div>
</div>

{{-- DropZone.JS --}}
<script type="text/javascript">

Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png, .jpg, .jpeg, .webp",
    init:function(){
        var submitButton = document.querySelector("#submit-all");
        myDropzone = this;

        submitButton.addEventListener('click', function(){
            myDropzone.processQueue();
        });

        this.on("complete", function(){
            if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
            {
                var _this = this;
                _this.removeAllFiles();
            }
            load_images();
        });
    }
};

load_images();

function load_images()
{
    $.ajax({
        url:"{{ route('admin.gallery.fetch') }}",
        success:function(data){
            $('#uploaded_image').html(data);
        }
    });
}

$(document).on('click', '.remove_image', function(){
    var name = $(this).attr('id');
    $.ajax({
        url:"{{ route('admin.gallery.delete') }}",
        data:{name : name},
        success:function(data){
            load_images();
        }
    });
});

</script>

@endsection

</x-admin.admin-master>
