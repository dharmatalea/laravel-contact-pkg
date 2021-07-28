<html>
	<head>
		<title>Contact Us</title>
	</head>
	<body>
		<h1>Contact us any time</h1>
		<form action="{{route('contact')}}" method="post">
			@csrf
			<div>
			<input type="text" name="name" placeholder="Your name">
			</div>
			<div>
			<input type="email" name="email" placeholder="Your email">
			</div>
			<div>
			<textarea name="message" placeholder="Your message" id="" cols="30" rows="10"></textarea>
			</div>
			<div>
			<input type="submit" value="submit">
			</div>

		</form>
	</body>
</html>