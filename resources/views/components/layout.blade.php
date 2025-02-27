<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- jQuery 3.7.1 (Recomendado para DataTables 2.1.8) -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{asset('DataTables/datatables.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('DataTables/datatables.min.css')}}">

 
</head>
<body >


    {{$slot}}





</body>

<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>