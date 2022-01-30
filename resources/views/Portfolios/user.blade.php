<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>user</title>
</head>

<body>
    <div class="text-center">
        <a href=" {{route('home.index')}}">voltar</a>
        <table class="table table-condensed col-md6 col-ms12">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <td> {{ $datas->id }} </td>
                    <td> {{ $datas->name }} </td>
                    <td>{{ $datas->subject }}</td>
                    <td>{{ $datas->assessment}}</td>
                    <td style="width:200px">
                        <div class="button" style="display:flex">
                            <form action="{{ route('message.delete',$datas->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <a href="#"data-bs-toggle="modal" data-bs-target="#exampleModal"><button id="excluir" class="btn btn-danger" onclick="preventDefault()">Excluir</button></a>
                            </form>
                            <a href="#"><button id="update" class="btn btn-success"> Edit</button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
<form action="{{route('message.delete',$datas->id) }}" method= "post">
    @csrf 
    @method('DELETE')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EXCLUIR</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Deseja excluir este intem?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancelar</button>
        <button type="submit" class="btn btn-danger">Excluir</button>
      </div>
    </div>
  </div>
</div>

</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>