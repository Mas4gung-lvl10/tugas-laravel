<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f5f6fa;
        }
        .navbar {
            width: 100%;
            background: #2d3436;
            padding: 16px 24px;
            box-sizing: border-box;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .home-btn {
            background: #0984e3;
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.2s;
        }
        .home-btn:hover {
            background: #74b9ff;
            color: #2d3436;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 32px;
        }
        h1 {
            color: #2d3436;
            margin-bottom: 16px;
        }
        .api-info {
            color: #636e72;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/') }}" class="home-btn">Home</a>
    </div>
    <div class="container">
        <h1>Web API</h1>
        @foreach ($data as $d)
            <img src="{{ $d->avatar }}" class="img-fluid rounded-start" alt="image" style="width: 100px; height: 100px; object-fit: cover; margin-bottom: 16px;">
        <div class="api-info">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> {{ $d -> name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $d -> email }}</h6>
                    <h5 class="card-title"> {{ $d -> role }}</h5>
                </div>
        @endforeach
            </div>
    </div>
</body>
</html>