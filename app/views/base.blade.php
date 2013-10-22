<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">
    <title>{{ $title }} | Paginations</title>
    <style>
    .content {
        width: 900px;
        margin: auto;

    }
    .header {
        border-top: 2px solid red;
    }
    a {
        width: 40px;
        
    }
    li {
        border: 1px solid black;
    }
    .next{
        float: right;
    }
    </style>
</head>
<body>
    <div class="header">
        
    </div>
    <div class="content">
        @yield('content') 
    </div>
    
</body>
</html>