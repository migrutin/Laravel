<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="{{ asset('/style.css') }}" rel="stylesheet">
</head>
<body id="update-body">


<div id="okvir">
<div id="update">
<h1 id="update-naslov">Update cost</h1>
<form action="{{route('execute')}}" id="update-form" method="post">
 @csrf

<label for="Name" class="update-label">Name:</label>
<br>
<input type="text" name="name" value="{{$CostForUpdate['name']}}" class="update-polje">
<br>




<label for="Price" class="update-label">Price:</label>
<br>
<input type="number" name="price" value="{{$CostForUpdate['price']}}" class="update-polje">
<br>

<label for="Description" class="update-label">Description:</label>
<br>
<input type="text" name="description" value="{{$CostForUpdate['description']}}" class="update-polje">
<br>

<input type="hidden" name="id" value="{{$CostForUpdate['id']}}" >
<input type="hidden" name="customer_id" value="{{$CostForUpdate['customer_id']}}">

<input type="submit" value="Update" id="submit-dugme">



</form>



</div>
</div>




 

</body>
</html>