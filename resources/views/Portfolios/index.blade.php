@extends('adminlte::page')

@section('title', 'Portfólio')

@section('content_header')
<link rel="stylesheet" href="{{ asset('site/css/style.css')}}">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('user.create')}}">Ver-Mensagen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('message.index') }}" aria-current="page" href="#">Cadastrar Mensagen</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-ms-12 col-md-6">
            <h1>projeto-01</h1>
            <div class="img-fluid">
                <img src="vendor/adminlte/dist/img/lyster01.png">
            </div>
            <p>
                __Este projeto ,foi desenvolvido com as seguintes teclonogias:<br>
                Linguágen:php,<br>
                Frameworks:Laravel,bootstrap,AdminLTE,phpmyadmin,laradock,docker e docker-composer,<br>
                banco de dados:mariadb,<br>
                -Com a finalidade de ajudar pessoas que assim como eu sempre,esquece<Br>
                o que foi comprar no supermecado,açougue ect;trata-se de uma lista de compra
                onde o usuário pode prencher sua lista em casa no celular ou pc,se preferir e
                acessar no local de sua compra tento acesso a internet é claro.<br>
                <a href="{{route ('challeng.index')}}">Desafios do projeto</a>//
                <a href="http://18.230.26.233" target="blank">Link do projeto</a>
            </p>
        </div>
        <div class="col-ms-12 col-md-6">
            <h1>projeto-02</h1>
            <div class="img-fluid">
                <img src="vendor/adminlte/dist/img/cadinox.png">
            </div>
            <p>
                __Este projeto é um site de pagina estática desenvolvido com vue.js,onde mostra
                na pagina home uma foto da empresa, na pagina produtos algumas fotos dos produtos la fabricados,
                e na pagina contatos mostra, email,faceboock,whatsap, da firma,um projeto bem simples e foi
                assim uns dos primeiros projetos que fiz para treinar mesmo o que eu estava aprendendo, e hospedei na
                vercel.


            </p>
            <a href="https://cadinoxequipamentos.vercel.app" target="blank">Link do projeto</a>

        </div>
        <div class="col-ms-12 col-md-6">
            <h1> projeto-03</h1>
            <div class="img-fluid">
                <img src="vendor/adminlte/dist/img/fines.png">
            </div>
   
            <p style= "margin-top:10px">
                __Este projeto é mais um em vue.js assisti uma vide-aula no youtub e me entusiamei com vue,
                eu achava que iria ser front-end, até começar a presisar do back em projetos pessoais,como este
                era para ser um ecomecer,mais ou manos consegui fazer o front mas isso foi no inicio do
                aprendizado,estou mostrando aqui a evolução
                espero que estes projetos não sejam mau vistos por possivis recrutadores que possam estar anaizando
                este portfólio eu assim espero,este tamben fiz deploy na vercel.<br>

                <a href="https://loja-virtual-delta.vercel.app" target="blank">Link do projeto</a>
            </p>
        </div>
        <div class="col-ms-12 col-md-6">
            <h1> projeto-04</h1>
            <div class="img-fluid">
                <img src="vendor/adminlte/dist/img/xandy.png">
            </div>
            <div class="tex" style= "margin-top: 10px">
            <p>
           __  Progamação é algo que eu relmente quero fazer,desde que fiz aparecer primeiro hello world na tela eu 
           pesei isso éo que eu quero fazer de verdade,só não sabia que ia ser tão dificíl aprender sozinho,o intusiasmo
           foi maior que a razão ainda bem,os desafios são muitos os motivos para desistir são maiores ainda,a unica coisa 
           que me faz persistir é vontade de virar progamador e criar algo que vai impactar na vida de outra pessoa positivamente,
           para isso é preciso muita dedicação, estudo,praticar muito mais muito mesmo;<br>
           __O principal poblema é não saber para onde ir,demora um poco para você começar a entender todo processo,
           
           

            </p>
                </div>
    
        </div>

    </div>
</div>




@stop


@section('js')

@stop