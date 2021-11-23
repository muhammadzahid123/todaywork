<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Form</title>
</head>
<body>
<h1>Create New Post</h1>
   <?php if($errors->any()): ?>
     <ul>
        <?php foreach ($errors->all() as $error): ?>
        <li><?php echo $error; ?></li>
        <?php   endforeach; ?>
     </ul>
   <?php endif; ?>
<form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
 <input type="text" class="form-control" name="title" value="{{old('title')}}"><br>
  <?php if($errors->has('title')): ?>
     <ul>
        <?php foreach ($errors->get('title') as $error): ?>
      <p> <?php echo $error; ?></p>
        <?php   endforeach; ?>
     </ul>
   <?php endif; ?>
 <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old('content')}}</textarea><br>
 <?php if($errors->has('content')): ?>
 <ul>
    <?php foreach ($errors->get('content') as $error): ?>
  <p> <?php echo $error; ?></p>
    <?php   endforeach; ?>
 </ul>
<?php endif; ?>
 <label for="computer">Computer <input type="checkbox" name="check[]" value="computer" id=""></label>
 <label for="general">General <input type="checkbox" name="check[]" id=""></label>
 <label for="science">Science <input type="checkbox" name="check[]" id=""></label>
 <label for="arts">Arts<input type="checkbox" name="check[]" id="" value="arts"></label>
 <label for="business">Business <input type="checkbox" name="check[]" id=""></label><br><br>
 <?php if($errors->has('check')): ?>
 <ul>
    <?php foreach ($errors->get('check') as $error): ?>
  <p> <?php echo $error; ?></p>
    <?php   endforeach; ?>
 </ul>
<?php endif; ?>
 <label for="">Select an Image: <input type="file" name="photo"></label>
 
<input type="submit" value="Add New Post">
</form>
</body>
</html>
