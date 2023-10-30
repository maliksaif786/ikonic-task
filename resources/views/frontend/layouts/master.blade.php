<!DOCTYPE html> <html lang="en"> <head>
<meta charset="utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /> <meta
  name="description" content="" />
<meta name="author" content="" /> <!-- <link rel="icon" href="favicon.ico" /> --> <title>Task</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset('frontend-theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- Custom styles for this template -->
    <link href="{{ asset('frontend-theme/assets/css/style.css')}}" rel="stylesheet" />
    <!-- Font Family -->
<link rel="preconnect" href="https://fonts.googleapis.com" /> <link rel="preconnect" href="https://fonts.gstatic.com"
  crossorigin /> <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Roboto&display=swap"
  rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>

<body class="listing-page">.

  @include('frontend.layouts.header')

  @yield('content')

  @include('frontend.layouts.footer')

  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

  <script src="{{ asset('frontend-theme/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('frontend-theme/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>