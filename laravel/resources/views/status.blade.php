<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    


<div class="container">




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">status</th>

    </tr>
  </thead>

  @foreach ($blogs as $item)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> {{$item["title"]}} </td>
      <td> {{$item["content"]}} </td>
      <td>
        @if ($item["status"] == true)
           <a href="" class="btn btn-success">เผยเเพร่</a> 
        @else
             <a href="" class="btn btn-dark">ฉบับร่าง</a>
        @endif
      </td>
    
    </tr>
  @endforeach
  </tbody>
</table>




</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>