<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Genarator</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe" rel="stylesheet">


</head>
<body >


<div class="jumbotron jumbotron-fluid" style="text-align: center;background-image: -webkit-gradient(linear, left top, left bottom, from(#311847), to(#3EB9E6));
   ">
    <div class="container">
        <h1 class="display-4" style="color: white" >USER GENERATOR API</h1><br>
        <p class="lead" style="color: white" >A free API for generating users data for test</p>
        <br><br><br><br>
       <div class="row" style="color:  white;text-align: center">
           <div class="col-md-4" >
               <h3 >Fake Data</h3>
               No more tedious sample data creation,<br>we've got it covered.

           </div>
           <div class="col-md-4" >
               <h3>Real Responses</h3>
               Develop with real response codes GET, <br>POST & DELETE supported.
           </div>
           <div class="col-md-4" >
                <h3>Always-On</h3>
               24/7 free access in your develepmont. <br>Lets Go.
           </div>
       </div>
    </div>
</div>

<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <h3>How to use?</h3>
        <p>You can use AJAX to call the Users Generator API and will receive a generated users in return. </p>
            <mark style="background-color: #3097D1;color: white;" >https://randomusersapi.000webhostapp.com/api </mark>
        <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">

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
        <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">
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
            <mark style="background-color: #3097D1;color: white;" >https://randomusersapi.000webhostapp.com/api/3 </mark>
<pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">

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

            <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">
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
            <br>
            <h3>Delete</h3>
            <mark style="background-color: #3097D1;color: white;" >https://randomusersapi.000webhostapp.com/api/delete/4 </mark>
            <pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">

    $.ajax({
        url: 'https://randomusersapi.000webhostapp.com/api/delete/4',
        dataType: 'json',
        success: function(data){
        console.log(data);
        }
    });
 </pre>

        </div>


    <div class="col-md-6">
        <h4>Post Routes</h4><br>
        <mark style="background-color: #3097D1;color: white;" >https://randomusersapi.000webhostapp.com/api/insert </mark>
        <br><br>
<pre style="border-left-width: 5px;border-left-style: solid;border-left-color: #3097D1">

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
    Contribute on my <a href="https://github.com/janaka531/PHP-API" style="text-decoration: #3097D1;color: #3097D1;">Github Repo.</a></p>



</div>
<div class="jumbotron" style="text-align: center;background-image: -webkit-gradient(linear, left top, left bottom, from(#3EB9E6), to(#311847));margin-bottom: 0px;height: 13em ">
    <div class="container" style="align-items: center;align-content: center;text-align: center">

        <div class="row">

            <div class="col-md-12" style="color:#e5e9eb;">
                <a href="https://github.com/janaka531" target="_blank"><img src="img/pic.jpg" class="rounded-circle" style="width: 80px;" alt=""></a>

                <br><br>
               <h5 style="color: #bcc0c2">by Janaka Edirisinghe</h5>

            </div>

        </div>
    </div>
</div>


</body>
</html>


