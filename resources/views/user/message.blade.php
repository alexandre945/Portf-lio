<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>message</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 jumbutron mx auto">
             @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
             @endif
          

            <form action="{{ route('store.message')}}" method= "POST">
                @csrf

                <form-group>
                    <h2>Envie sua mensagem</h2>
                </form-group>
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control" placeholder="seu nome">
                </div>
                <div class="form-group">
                    <label for="subjct">Assunto</label>
                    <input type="text" name="subject" class="form-control" placeholder="digite seu assunto">
                </div>
                <div class="form-group">
                <label for="assessment">Digite sua mensagen</label>
                <textarea class="form-control"name="assessment"  rows="7"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

              
            </form>

        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>