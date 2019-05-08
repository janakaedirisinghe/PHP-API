<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Genarator</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body ">

<div class="jumbotron jumbotron-fluid" style="text-align: center;background-color: #222222;height: 20em;">
    <div class="container">
        <h1 class="display-4" style="color: #cccccc" >USER GENERATOR API</h1><br>
        <p class="lead" style="color: #cccccc" >A free API for generating users data for test</p>
    </div>
</div>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h3>How to use?</h3>
        <p>You can use AJAX to call the Random User Generator API and will receive a randomly generated user in return. </p>
            <mark style="background-color: #2ab27b;color: white;" >https://randomusersapi.000webhostapp.com/api </mark>
        <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #2ab27b">

    $.ajax({
        url: 'https://randomusersapi.000webhostapp.com/api',
        dataType: 'json',
        success: function(data){
        console.log(data);
        }
    });
 </pre>
        <br>
        <h3>Result</h3>
        <p>The application will provide you with a object and apply to your application. </p>
        <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #2ab27b">
    [
        {
        "id": 1,
        "name": "Clementine Bauch",
        "email": "Nathan@yes.ut",
        "age": 25,
        "created_at": "2019-05-08 12:09:45",
        "updated_at": "2019-05-08 12:09:45"
        },
        {
        "id": 2,
        "name": "Ervin Howell",
        "email": "Shanna@melissa.tv",
        "age": 23,
        "created_at": "2019-05-08 12:10:06",
        "updated_at": "2019-05-08 12:10:06"
        },
        {
        "id": 3,
        "name": "Clementine Bauch",
        "email": "Nathan@yesenia.net",
        "age": 63,
        "created_at": "2019-05-08 12:10:28",
        "updated_at": "2019-05-08 12:10:28"
        },
        {
        "id": 4,
        "name": "Patricia Lebsack",
        "email": "Julianne.OConner@kory.org",
        "age": 20,
        "created_at": "2019-05-08 12:11:39",
        "updated_at": "2019-05-08 12:11:39"
        },
            .
            .
            .
            .
    ]

 </pre>
        <br>

            <br>


    </div>
        <div class="col-md-3"></div>
    </div>
<div class="row">
        <div class="col-md-6">
            <h4>Get Routes</h4><br>
            <mark style="background-color: #2ab27b;color: white;" >https://randomusersapi.000webhostapp.com/api/3 </mark>
<pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #2ab27b">

    $.ajax({
        url: 'https://randomusersapi.000webhostapp.com/api/3',
        dataType: 'json',
        success: function(data){
        console.log(data);
        }
    });
 </pre>
            <br>
            <h3>Result</h3>

            <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #2ab27b">
    [
        {
        "id": 3,
        "name": "Clementine Bauch",
        "email": "Nathan@yesenia.net",
        "age": 63,
        "created_at": "2019-05-08 12:10:28",
        "updated_at": "2019-05-08 12:10:28"
        }
    ]

 </pre>
        </div>


    <div class="col-md-6">
        <h4>Post Routes</h4><br>
        <mark style="background-color: #2ab27b;color: white;" >https://randomusersapi.000webhostapp.com/api/insert </mark>
<pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #2ab27b">

    fetch('https://randomusersapi.000webhostapp.com/api/insert', {
        method: 'POST',
        body: JSON.stringify({
            "id": 002,
            "name": "Clementine Bauch",
            "email": "Nathan@yesenia.net",
            "age": 45
         }),
    headers: {
      "Content-type": "application/json; charset=UTF-8"
    }
  })

 </pre>

    </div>
</div>
    <br>

    <h4>Contact Us</h4>
    <p>Found a bug or have an idea?
    Contribute on my <a href="https://github.com/janaka531/PHP-API" style="text-decoration: #2ab27b;color: #2ab27b;">Github Repo.</a></p>



</div>
<div class="jumbotron" style="text-align: center;background-color: #222222;margin-bottom: 0px">
    <div class="container" style="align-items: center;align-content: center;text-align: center">
        <h1 class="display-4" style="color: #cccccc" >USER GENERATOR API</h1><br>
        <div class="row">

            <div class="col-md-12" style="color:#e5e9eb;">
                <a href="https://github.com/janaka531" target="_blank"><img src="img/pic.jpg" class="rounded-circle" style="width: 80px;" alt=""></a>

                <br><br>
               <h5>by Janaka Edirisinghe</h5>

            </div>

        </div>
    </div>
</div>

</body>
</html>


