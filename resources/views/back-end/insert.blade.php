@extends('back-end.master')

@section('content')
<div class="p-4">
    <div class="welcome">
        <div class="rounded-3 p-3">
            <form action="insertblog" method="POST" enctype="multipart/form-data">
            @csrf
                <br>
                <div class="form-group row">
                    <label for="InputTitle" class="col-sm-1 col-form-label text-white">
                        Blog title
                    </label>
                    <div  class="col-sm-10 col-form-label">
                        <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Title">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="InputDescription" class="col-sm-1 col-form-label text-white">
                        Blog description
                    </label>
                    <div  class="col-sm-10 col-form-label">
                        <input  type="text" name="description" class="form-control" id="InputDescription"
                        placeholder="Description max-255" maxlength="255">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="editor_area" class="col-sm-1 col-form-label text-white">
                        Text
                    </label>
                    <div class="main col-sm-10 col-form-label">
                        <!--- call editor -->
                        <div id="editor_panel">

                        </div>
                        <textarea id="editor_area" name="text">
                        </textarea>
                    </div>
                    <!-- partial -->
                    <script  src="{{asset('back-end/js/summernote.js')}}">
                    </script>
                </div>
                <br>
                <div class="form-group row">
                    <label for="formFileLg" class="col-sm-1 col-form-label text-white">
                        Blog image
                    </label>
                    <div  class="col-sm-10 col-form-label">
                        <input class="form-control form-control-md" id="formFileLg" type="file" name="img" />
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="InputLink" class="col-sm-1 col-form-label text-white">
                        Comment link
                    </label>
                    <div  class="col-sm-10 col-form-label">
                        <input  type="link" name="comment" class="form-control"
                                id="InputLink" placeholder="Link">
                    </div>
                </div>
                <br>
                <div class="form-group mx-auto" style="padding-left: 8.5%">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="uil-save">
                            Save
                        </i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
