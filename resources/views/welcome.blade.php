<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Titillium Web', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .jumbotron {
                color: black;
                padding: 5% 5%;
                font-size: 72pt;
                font-weight: 600;
                text-align: center;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">

                <p>Hot Cutz</p>
            </div>
        </div>
        <br>

        
        <hr>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <p> database queue will go here </p>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-12">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($jobs as $job)
                <td>{{ $job->book_date }}</td>
                    @endforeach   
                    @foreach ($jobs as $job)
                <td>{{ $job->time }}</td>
                @endforeach
                @foreach ($jobs as $job)
                <td>{{ $job->name }}</td>
            @endforeach
        </tbody>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-12">
        <a href="/book" class="btn btn-info" role="button">Book Now</a>
                </div>
        </div>
        </div>
</div>


    </body>
</html>
