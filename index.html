<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Music Videos</title>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function(){
        $('form').submit(function(e){
            $('#results').html("<img src='loading.gif'>");
            $.post($(this).attr('action'), $(this).serialize(), function(data) {
              var html_string = "";
              if(data['results'].length !== 0) {
                html_string = "<video controls src='" +
                               data["results"][0]["previewUrl"] +
                               "'><\/video>";
              } else {
                html_string = "Not Found";
              }
              $('#results').html(html_string);
            }, 'json');
            return false;
        });
      });
    </script>
  </head>
    <body>
    <h1>Enter Artist's Name:</h1>
    <form action="process.php" method="post">
      <input id="user_input" name="user_input" type="search">
      <input type="submit" value="search">
    </form>
    <div id="results">
    </div>
  </body>
</html>
