<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script> -->
  <link rel="stylesheet" href="{{asset('datatables.net-dt\css\dataTables.dataTables.min.css')}}" />
  <script src="{{asset('datatables.net-dt\js\dataTables.dataTables.js')}}"></script>
</head>
<body >


    {{$slot}}





</body>
<script>
import DataTable from 'datatables.net-dt';
 
 let table = new DataTable('#myTable', {
     // config options...
 });
</script>
</html>