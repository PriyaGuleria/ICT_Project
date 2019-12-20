<h4>This is Create page</h4>
<html>
<body>



	<?php
		echo $this->Form->create(
			null,
			[
				"url"=>["action"=>"save"]
			]
		);
	?>
		Name:<input type="text" name="name">
		Author:<input type="text" name="author">
		Email Id:<input type="text" name="email">
		Description:<input type="text" name="description">
		<input type="submit" value="Submit">

</body>
</html>