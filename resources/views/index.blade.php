<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Hey
    @dump($Movies);
    @foreach ($Movies as $movie)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->nationality}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">{{$movie->date}}</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat saepe, facilis cum architecto distinctio vero. Labore beatae dignissimos nobis? Obcaecati, est eos! Cum asperiores itaque commodi nulla, earum aspernatur perferendis.</p>
            <a href="#" class="card-link"> {{$movie->vote}}</a>
        </div>
    </div>
    @endforeach
</body>
</html>