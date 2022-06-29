<!DOCTYPE html>
<html lang="en">

<head>
    <title>contant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Content</h2>

        <form action="<?php echo url('/Users/Store') ; ?>" method="post" enctype="multipart/form-data">

             <input type="hidden" name="_token" value="<?php echo csrf_token();?>">


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
            

</body>

</html>
