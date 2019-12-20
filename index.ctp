<h4>This is our Index page</h4>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<table>

		<tr>
			<th>Name</th>
			<th>Author</th>
			<th>Email</th>
			<th>Description</th>
		</tr>
		
		<?php
		 $count=1;
		 foreach($books as $key=>$book){ ?>
		<tr>
		<td><?= $count++  ?></td>
		<td><?= $book->name  ?></td>
		<td><?= $book->author  ?></td>
		<td><?= $book->email  ?></td>
		<td><?= $book->descripotion  ?></td>
		<td>
		<!-- <?php 
			echo $this->Html-link(
				"Edit",
				"/book/edit".$book->id,
				[
					"class"=>"btn btn-info"
				]
			);
			echo $this->Html-link(
				"Delete",
				"/book/delete".$book->id,
				[
					"class"=>"btn btn-info"
				]
			);
		?>-->
		</td>

		
		
		</tr>
		<?php } ?>
	</table>
</body>
</html>