<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,
body {
    background-color: lightgrey;
    color: #636b6f;
    font-family: "Nunito", sans-serif;
    font-weight: 200;
    height: 100%;
    margin-top: 40px;
}
.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.content {
    text-align: center;
    width: 400px;
    background-color: white;
    height: 600px;
}

.form_login {
    text-align: left;
    margin-left: 10%;
    margin-top: 50%;
}

.form_submit {
    text-align: left;
    margin-left: 10%;
}

.title {
    text-align: left;
    margin-left: 10%;
    font-size: x-large;
    font-weight: bold;
}

.form_input {
    box-sizing: border-box;
    width: 90%;
    padding: 10px;
    font-size: 11pt;
    margin-bottom: 20px;
}

.btn_login {
    background: #1e8c21;
    color: white;
    font-size: 11pt;
    width: 90%;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
}

.navbar {
    margin-top: 10px;
    text-align: left;
}

a {
    color: #636b6f;
    margin-left: 15px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
}

.separator {
    border-bottom: 2px solid #636b6f;
    margin-top: 16px;
    margin-bottom: 16px;
}

table {
    font-size: 13px;
    font-weight: bold;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

        </style>

    </head>
    <body>
        <div class="flex-center">
            <div class="content">
                <div class="title">Order Information</div>
                <div style="text-align:left; margin-left: 10%; margin-bottom: 15px">
                    <div>{{ $product }}</div>
                    <div>Rp.{{ $total }}</div>
                    <div>Qty 1 Pcs</div>
                </div>
                <form class="form_submit" action="{{ route('submitOrder', ['product' => $product, 'total' => $total]) }}" method="post">
                @csrf
                    <label>Name</label>
                    <input class="form_input" type="text" name="name" >
            
                    <label>Phone</label>
                    <input class="form_input" type="number" name="price" >

                    <label>Address</label>
                    <input class="form_input" type="text_area" name="code" >
            
                    <input type="submit" class="btn_login" value="Beli">
                </form>
            </div>
        </div>
    </body>
</html>
