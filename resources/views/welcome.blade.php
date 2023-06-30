@extends('layouts.app')
@section('header')
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="static/css/welcome.css" type="text/css">
<title>Gerenciamento de Estoque</title>
@endsection
@section('body')
<main>
    <div class="logo">
        <img src="static/images/box.png" alt="box">
    </div>
    <section>
        <div class="column">
            <div class="card">
                <div class="icon">
                    <img src="static/icons/documentation.svg" alt="">
                </div>
                <h2>Tecnologias</h2>
                <p>Laravel v{{ Illuminate\Foundation\Application::VERSION }}</p>
                <p>PHP v{{ PHP_VERSION }}</p>
                <p>Docker v24.0.2</p>
                <p>Docker Compose v2.18.1</p>
                <p>MySQL/MySQL-Server v8.0</p>
                <p>PhpMyAdmin v5.2.1</p>
                <h2>Serviços</h2>
                <p>
                    <b>Laravel</b> running on
                    <a class="services" href="http://localhost:80/">http://localhost:80/</a>
                </p>
                <p>
                    <b>MySQL</b> running on
                    <a class="services" href="http://localhost:3306">http://localhost:3306</a>
                </p>
                <p>
                    <b>PhpMyAdmin</b> running on
                    <a class="services" href="http://localhost:8081/">http://localhost:8081</a>
                </p>
                <table>
                    <tr>
                        <td><b>User:</b></td>
                        <td>mauricio</td>
                    </tr>
                    <tr>
                        <td><b>Password:</b></td>
                        <td>admin</td>
                    </tr>
                    <tr>
                        <td><b>Server:</b></td>
                        <td>inventory_mysql</td>
                    </tr>
                    <tr>
                        <td><b>Database:</b></td>
                        <td>inventory_management</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="icon">
                    <img src="static/images/ifms-logo.png" alt="">
                </div>
                <h2>Desenvolvimento Web II</h2>
                <p>Instituto Federal de Educação, Ciência e Tecnologia de Mato Grosso do Sul</p>
                <p>Tecnologia em Análise e Desenvolvimento de Sistemas</p>
                <p>Desenvolvimento Web II</p>
                <p>Professora: Elisangela Citro</p>
                <p>Aluno: Maurício da Silva</p>
            </div>
            <a class="card card-link" href="http://localhost:80/products">
                <div>
                    <div class="icon">
                        <img src="static/images/green_box.png" alt="">
                    </div>
                    <h2>Gerenciamento de Estoques</h2>
                    <p>
                        Site construído com Laravel que implementa as operações CRUD 
                        para um sistema de gerenciamnento de estoque de produtos.
                    </p>
                </div>
                <div class="arrow-link">
                    <img src="static/icons/arrow.svg" alt="">
                </div>
            </a>
        </div>
    </section>
</main>
@endsection
