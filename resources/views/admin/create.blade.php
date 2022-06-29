<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


    < class="container">
        <h2>Register</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
@if(session()->has('message-success'))
    <div class="alert alert-success">
        {{session()->get('message')}}
    </div>
    @elseif(session(->has('message-error')))
    <div class="alert alert-danger">
         {{session()->get('message')}}
    </div>
        @endif

        {{-- @include('messages') --}}

        <form action="<?php echo url('/Admin/Store'); ?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="" name="name"
                    placeholder="Enter Name" value="<?php echo old('name'); ?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email" placeholder="Enter email" value="<?php echo old('email'); ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
            </div>
             <div class="form-group">
                <label for="exampleInputTitle">title</label>
                <input type="text" class="form-control" required id="exampleInputTitle" aria-describedby=""
                    name="title" placeholder="Enter title">
            </div>

            <div class="form-group">
                <label for="exampleInputContent">content</label>
                <input type="text" class="form-control" required id="exampleInputContent" aria-describedby=""
                    name="content" placeholder="Enter content">
            </div>
                <div class="form-group">
                <label for="exampleInputPassword">Image</label>

            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>
