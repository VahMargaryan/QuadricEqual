<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 id="result"></h2>
            <form id="form" autocomplete="off" action="calc.php" method="post">
                <h2>ax^2 + bx + c = 0</h2><br>
                a: <input type="text" class="form-input" name="a"><br>
                b: <input type="text" class="form-input" name="b"><br>
                c: <input type="text" class="form-input" name="c"><br>
                <input type="submit" value="Calculate" class="form-submit" name="submit">
            </form>
    </div>
<script>
    $(document).ready(function(){
        $('#form').submit(function(){
            $('#result').html('</span>Loading...</button>');
            $.ajax({
                type: 'POST',
                url: 'calc.php',
                data: $(this).serialize()
            })
                .done(function(data){
                    $('#result').html(data);
                })
                .fail(function() {
                    alert( "Posting failed." );
                });
            return false;
        });
    });
</script>
</body>
</html>