@extends('back-end.master')

@section('content')
<div class="p-4">
  <div class="welcome">
    <div class="content rounded-3 p-3">
    <a href="addblog">
        <button style="margin-left:5px" type="button" class="btn btn-info">
            <i class="uil-comment-add"></i> Add Post
        </button>
    </a>
    <br>
    <br>
      <table class="table table-dark table-hover table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Comment link</th>
            <th scope="col">CRUD</th>
          </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <th scope="row">{{$blog->id}}</th>
                    <td>{{$blog->title}}</td>
                    <td>{{substr($blog->description, 0, 25)."..."}}</td>
                    <td><img style="height: 50px" src="{{asset('uploads'.$blog->img)}}" alt=""></td>
                    <td><a href="{{$blog->comment}}" target="_blank">{{substr($blog->comment, 0, 10)."..."}}</a></td>
                    <td>
                    <a href="editblog/{{$blog->id}}"><button type="button" class="btn btn-warning"><i class="uil-pen"></i></button></a>
                    <a href="delete/{{$blog->id}}"><button style="margin-left:5px" type="button" class="btn btn-danger"><i class="uil-trash-alt"></i></button></a>
                    <a href="/"><button style="margin-left:5px" type="button" class="btn btn-info"><i class="uil-eye"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@stop
