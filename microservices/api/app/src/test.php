<script src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
	$.ajax({
	url: "https://data.familiarity11.hasura-app.io/v1/query",
	contentType: "application/json",
	data: JSON.stringify({
	  "type": "select",
	  "args": {
			"table": "article",
			"columns": [
				  "content",
				  "title",
				  "id"
			]
	  }
	}),
	type: "POST",
	dataType: "json"
	}).done(function(json) {
		for(x=0;x < json.length;x++)
		{
			document.write("Content:- " +json[x].content + "<br/>"+json[x].title + "<br/>"+json[x].id + "<hr/>");
		}
		alert("success");
	}).fail(function(xhr, status, errorThrown) {
	console.log("Error: " + errorThrown);
	console.log("Status: " + status);
	console.dir(xhr);
	});
</script>