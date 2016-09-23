<html>
	<head>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script>
			$(function(){
				var api_address ="api.php?method=getAllSchools&jsoncallback=?";
				$.getJSON(api_address,
				function(data){
					for(aSchool in data){
						var school =data[aSchool];
						console.log(school.name + ' - ' + school.ward);
					}
						
				});
			});
			
			$(function(){
				var api_address ="api.php?method=getAllRegions&jsoncallback=?";
				$.getJSON(api_address,
				function(data){
					for(aRegion in data){
						var region =data[aRegion];
						console.log(region.name);
					}
						
				});
			});
		</script>
	</head>
	<body>
	</body>
</html>