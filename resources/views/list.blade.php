<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style></style>
</head>
<body>


<table>

    <tr>
    	<th>Name</th>
    	<th><i class="fa fa-check" style="font-size:48px;color:green;"></i></th><th><i class="fa fa-close" style="font-size:48px;color:red;"></i></th>
    </tr>

      @foreach($news as $new)


	<tr>
			<td>{{ $new->id }}</td>
			<td>{{ $new->name}}</td>
			<!-- <td><a href="delete/{{$new->id}}">delete</a></td> -->
			 <td>
        <a href="delete/{{$new->id}}"><i class="fa fa-check" style="font-size:48px;color:green;"></i></a></td>
      

		</tr>

@endforeach


		</tr>
	</table>
	</body>
</html>