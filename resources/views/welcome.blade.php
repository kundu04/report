<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
<table style="width:100%">
  <tr>
    <th>Fulltname</th>
    <th>first in</th>
    <th>last out</th>
    <th>total working hour</th>
  </tr>
  @foreach ($users as $user)
  
  <tr>
    <td>{{$user->first_name}} {{$user->last_name}}</td>
    <td>{{$user->relLog->min('created_at')}}</td>
    <td>{{$user->relLog->max('created_at')}}</td>
    <?php 
    $in=strtotime($user->relLog->min('created_at'));
    $out=strtotime($user->relLog->max('created_at'));
    $diff=$out-$in;
    

    ?>
   <td>{{date('H:i:s', $diff)}}</td>
   
  </tr>
  

 @endforeach
</table>
</body>
</html>