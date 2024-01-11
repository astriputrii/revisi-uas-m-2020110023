@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website Menarik</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>




        <br>
        <br><br><br><br><br>


        <section class="hero bg-primary text-white text-center">
            <div class="container">
                <br><br><br>
                <h1 class="display-4">Selamat Datang di Website Menarik</h1>
                <p class="lead">Temukan informasi akun dan transaksi dengan mudah.</p>
                <br><br>
            </div>
        </section>

        <section class="container my-5">
            <div class="row">
                <div class="col-md-6">
                    <h2>Akun Terbaru</h2>

                    <ul class="list-group">
                        <li class="list-group-item">Account 1</li>
                        <li class="list-group-item">Account 2</li>
                        <li class="list-group-item">Account 3</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Transaksi Terbaru</h2>

                    <ul class="list-group">
                        <li class="list-group-item">Transaction 1</li>
                        <li class="list-group-item">Transaction 2</li>
                        <li class="list-group-item">Transaction 3</li>
                    </ul>
                </div>
            </div>
        </section>



        <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
