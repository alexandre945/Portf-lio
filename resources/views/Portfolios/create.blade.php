<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">
    <title>profile</title>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <header>
            <a href=" {{route('home.index')}}">voltar</a>
            <div class="tex-center">
                <h1>DADOS PESSOAIS</h1>
            </div>

            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="Alexandre Roberto de Sousa">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control form-control-sm" id="colFormLabel"
                        value="alexandresousaroberto@gmail.com">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Github:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="https://github.com/alexandre945">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Linkdin:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="https://www.linkedin.com/in/alexandre-sousa-59621a20a">
                </div>
            </div>

            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm ">Celular:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm " value="035998464219">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm ">whatsap:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm " value="035998464219">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm ">Estado:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm " value="Minas Gerais">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm ">Cidade:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="Jesuânia">
                </div>
            </div>

            <div class="tex-center">
                <h1>DADOS PROFISSIONAIS</h1>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg"
                    class="col-sm-2 col-form-label col-form-label-sm ">Linguágen-principal:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="php">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg"
                    class="col-sm-2 col-form-label col-form-label-sm">Linguágen-secundaria:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm " value="javascript">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm">Banco de Dados:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="mariadb ,mysql">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm">stack:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm" value="html">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm">stack:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm " value="css">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm">Frameworks:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm "
                        value="laravel ,bootstrap,AdminLTE,">
                </div>
            </div>
            <div class="row mb-3">
                <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-sm">Gerênciador de dependencia:</label>
                <div class="col-sm-10">
                    <input type="tex" class="form-control form-control-sm "
                        value="Composer,">
                </div>
            </div>
        </header>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>