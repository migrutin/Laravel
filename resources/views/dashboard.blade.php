<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="creation.css">


     <!-- Ovo su linkovi za formu -->
     
    

    <link href="{{ asset('/style.css') }}" rel="stylesheet">

</head>

<body id="dashboardbody">


<div class="split left">

<div class="container-fluid well span6">

	<div class="row-fluid">
        <div class="span2" >
		    <img src="https://previews.123rf.com/images/metelsky/metelsky1809/metelsky180900233/109815470-man-avatar-profile-male-face-icon-vector-illustration-.jpg" class="img-circle">
       </div>
        
        <div class="span8">

            <h3>{{$LoggedCustomerInfo['firstname']}} {{$LoggedCustomerInfo['lastname']}}</h3>
            <h5>Email: {{$LoggedCustomerInfo['email']}}</h5>
            @php($sum=0)
            @foreach($lista as $cost)
            @php($sum=$sum+floatval($cost->price))
            @endforeach
            <h5 id="total">Total:{{$sum}},00 RSD</h5>

        
        </div>
        
        <div class="span2">
            <div class="btn-group">
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="{{ route('logout')}}">
                    Logout 
                    <span class="icon-cog icon-white"></span><span class="caret"></span>
                </a>
            </div>
        </div>



  </div>

 
<div id="horizontal"></div>


<div class="testiranje" >

<label for="title" id="title">Create new cost:</label>


    <form action="{{ route('create') }}" method="post">
    @if(Session::get('success'))
                            <div class="allert allert-succes">
                            {{Session::get('success')}}
                            </div>
                        @endif


                        @if(Session::get('fail'))
                            <div class="allert allert-danger">
                            {{Session::get('fail')}}
                            </div>
                        @endif
        @csrf
        <!-- <label for="name" class="labela">Name: Price: Description:</label> -->
        <input type="text" name="name" id="name" class="polje" placeholder="Name:">
        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        
       <!-- <label for="price" class="labela">Price:</label>  -->
        <input type="number" name="price" id="price" class="polje" placeholder="Price:">
        <span class="text-danger">@error('price'){{ $message }} @enderror</span>
        
        <!-- <label for="Description" class="labela">Description:</label> -->
        <input type="text" name="description" id="description" class="polje" placeholder="Description:">
        <span class="text-danger">@error('description'){{ $message }} @enderror</span>
        
        <input type="hidden"  value="{{$LoggedCustomerInfo['id']}}"  name="customer_id" id="customer_id">
        
        <input type="submit" value="Add" id="button-26">
        




    </form>
    

 </div>

 


</div>









<div class="split right">

<table class="fl-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
            @foreach($lista as $cost)
            
        <tr>
            <td>{{$cost->id}}</td>
            <td>{{$cost->name}}</td>
            <td>{{$cost->price}}</td>
            <td>{{$cost->description}}</td>
            <td><a href = 'delete/{{ $cost->id }}' id="link">Delete</a></td>
            <td><a href = 'update/{{ $cost->id }}' id="update-link">Update</a></td>
            
        </tr>
 
        @endforeach
        <tbody>
    </table>













</div>









</body>
</html>

