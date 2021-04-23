@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="sell" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label> <br>
                    <input type="radio" value="cash" name="category"> <span>tv</span> <br> <br>
                    <input type="radio" value="cash" name="category"> <span>mobile</span> <br><br>
                    <input type="radio" value="cash" name="category"> <span>fridge</span> <br> <br>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <textarea name="desc" placeholder="write down your description" class="form-control"></textarea>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="file" name="file" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection