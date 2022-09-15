<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap Site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


        <style>
            body {
                margin-top: 20px;
                background: #eee;
            }

            /* E-commerce */
            .product-box {
                padding: 0;
                border: 1px solid #e7eaec;
            }

            .product-box:hover,
            .product-box.active {
                border: 1px solid transparent;
                -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
                -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
                box-shadow: 0 3px 7px 0 #a8a8a8;
            }

            .product-imitation {
                text-align: center;
                padding: 90px 0;
                background-color: #f8f8f9;
                color: #bebec3;
                font-weight: 600;
            }

            .cart-product-imitation {
                text-align: center;
                padding-top: 30px;
                height: 80px;
                width: 80px;
                background-color: #f8f8f9;
            }

            .product-imitation.xl {
                padding: 120px 0;
            }

            .product-desc {
                padding: 20px;
                position: relative;
            }

            .ecommerce .tag-list {
                padding: 0;
            }

            .ecommerce .fa-star {
                color: #d1dade;
            }

            .ecommerce .fa-star.active {
                color: #f8ac59;
            }

            .ecommerce .note-editor {
                border: 1px solid #e7eaec;
            }

            table.shoping-cart-table {
                margin-bottom: 0;
            }

            table.shoping-cart-table tr td {
                border: none;
                text-align: right;
            }

            table.shoping-cart-table tr td.desc,
            table.shoping-cart-table tr td:first-child {
                text-align: left;
            }

            table.shoping-cart-table tr td:last-child {
                width: 80px;
            }

            .product-name {
                font-size: 16px;
                font-weight: 600;
                color: #676a6c;
                display: block;
                margin: 2px 0 5px 0;
            }

            .product-name:hover,
            .product-name:focus {
                color: #1ab394;
            }

            .product-price {
                font-size: 14px;
                font-weight: 600;
                color: #ffffff;
                background-color: #1ab394;
                padding: 6px 12px;
                position: absolute;
                top: -32px;
                right: 0;
            }

            .product-detail .ibox-content {
                padding: 30px 30px 50px 30px;
            }

            .image-imitation {
                background-color: #f8f8f9;
                text-align: center;
                padding: 200px 0;
            }

            .product-main-price small {
                font-size: 10px;
            }

            .product-images {
                margin: 0 20px;
            }

            .ibox {
                clear: both;
                margin-bottom: 25px;
                margin-top: 0;
                padding: 0;
            }

            .ibox.collapsed .ibox-content {
                display: none;
            }

            .ibox.collapsed .fa.fa-chevron-up:before {
                content: "\f078";
            }

            .ibox.collapsed .fa.fa-chevron-down:before {
                content: "\f077";
            }

            .ibox:after,
            .ibox:before {
                display: table;
            }

            .ibox-title {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                background-color: #ffffff;
                border-color: #e7eaec;
                border-image: none;
                border-style: solid solid none;
                border-width: 3px 0 0;
                color: inherit;
                margin-bottom: 0;
                padding: 14px 15px 7px;
                min-height: 48px;
            }

            .ibox-content {
                background-color: #ffffff;
                color: inherit;
                padding: 15px 20px 20px 20px;
                border-color: #e7eaec;
                border-image: none;
                border-style: solid solid none;
                border-width: 1px 0;
            }

            .ibox-footer {
                color: inherit;
                border-top: 1px solid #e7eaec;
                font-size: 90%;
                background: #ffffff;
                padding: 10px 15px;
            }
        </style>
    </head>

    <body>
        {{-- nav --}}
        @include('partials.nav')

        <h1 class="text-center">Productos</h1>
        <div class="container">
            <div class="row">
                @forelse ($products as $product)

                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div class="product-imitation">
                                <img src="{{$product->photo}}" style="max-width:100%;object-fit:cover;">
                            </div>
                            <div class="product-desc">
                                <span class="product-price">
                                    ${{ $product->price }}
                                </span>
                                {{-- <small class="text-muted">Category</small> --}}
                                <a href="#" class="product-name"> Product</a>

                                <div class="small m-t-xs">
                                    {{ $product->description }}
                                </div>
                                <div class="m-t text-righ">

                                    <a href="{{ route('orders.create')}}"
                                        class="btn btn-xs btn-outline btn-primary">Agregar a la orden
                                        <i class="fa fa-long-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <h2>No hay productos</h2>
                @endforelse
            </div>
        </div>
    </body>

</html>
