@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="send" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title">
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Feedback</label>
                    <textarea type="password" name="body" class="form-control" id="exampleInputPassword1"
                        placeholder="Feedback"></textarea>
                </div>
                <button type="submit" class="btn btn-default">send</button>
            </form>
        </div>
    </div>
</div>
@endsection