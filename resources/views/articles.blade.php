<main>
    <style>
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            width: 18rem;
            margin-bottom: 20px;
            transition: box-shadow 0.2s;
        }
        .card:hover {
            box-shadow: 0 4px 16px rgba(0,0,0,0.12);
        }
        .card-body {
            padding: 16px;
        }
        .card-title {
            font-size: 1.25rem;
            margin-bottom: 8px;
        }
        .card-subtitle {
            font-size: 1rem;
            color: #888;
            margin-bottom: 12px;
        }
        .card-text {
            font-size: 0.98rem;
            margin-bottom: 12px;
        }
        .card-link {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        .card-link:hover {
            text-decoration: underline;
        }
    </style>
    <div class="container">
        <h1>Articles</h1>
        <ul>
            @foreach($data as $d)
               <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d -> title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            @endforeach

            </ul>
            <a href="{{ url('/') }}" class="card-link home-link">Home</a>
            <style>
                .home-link {
                position: absolute;
                top: 30px;
                right: 50px;
                font-weight: bold;
                background: #f8f9fa;
                padding: 8px 18px;
                border-radius: 6px;
                border: 1px solid #e0e0e0;
                box-shadow: 0 2px 8px rgba(0,0,0,0.04);
                z-index: 10;
                }
                .home-link:hover {
                background: #e9ecef;
                text-decoration: underline;
                }
                .container {
                position: relative;
                }
            </style>
        </ul>
    </div>
</main>