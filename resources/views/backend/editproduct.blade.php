<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div class="row mt-5">
    <div class="col-md-4 offset-md-4">

    <a href="{{Route('showproduct')}}">Show Products</a>
        <form action="{{ Route('update',$products->id) }}" method="POST" class="border border-rounded p-4">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="ptitle" value="{{$products->ptitle}}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="pdes" value="{{$products->pdes}}">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category" class="form-control">
                    <option value="0">-----Select Category-------</option>
                    <option value="1" @if($products->category==1) selected @endif >Computer</option>
                    <option value="2" @if($products->category==2) selected @endif>Mobile</option>
                    <option value="3" @if($products->category==3) selected @endif>Camera</option>
                </select>
             
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="price" value="{{$products->price}}">
            </div>
            <div class="form-group pt-3">
              <!-- <button>Update</button> -->
                <input type="submit" class="form-control btn btn-success" name="submit" value="Save">
            </div>
        </form>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>