<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>
<body>
   <menu>
     <li><a href="/">Home</a></li>
     <li><a href="/normal_from">Normal_From</a></li>
     <li><a href="/login_from">Login_From</a></li>
     <li><a href="/contact_from">Contact_From</a></li>
   </menu>
   {{$slot}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>