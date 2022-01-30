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
                                        <button id="excluir" class="btn btn-danger"
                                            onclick="preventDefault()">Excluir</button>
                                    </form>
                                    <a href="#"><button id="update"
                                            class="btn btn-success"> Edit</button></a>

                                    <form action="#" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <!-- <button id="excluir"class="btn btn-danger">Excl/Tud</button>   -->
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>