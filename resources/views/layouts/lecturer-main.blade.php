<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>myFYP</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendors/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!--Navbar-->
  @include('layouts.lecturer-navbar')

  <!--Sidebar-->
  @include('layouts.lecturer-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('vendors/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('vendors/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendors/dist/js/adminlte.min.js')}}"></script>

<!--DataTable-->
<script>
 $(document).ready(function() {
    $('#student').DataTable( {
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 3, ]
                }
            },
            'colvis'
        ]
    } );
} );

$(document).ready(function() {
    $('#form').DataTable( {
        dom: 'Bfrtip',
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
        buttons: [
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [2, 4, ]
                }
            },
            'colvis'
        ]
    } );
} );

$(document).ready(function() {
    $('#f2').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'F2 Marks List',
                filename: 'F2_List',
                exportOptions: {
                    columns: [0, 2, 4, ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'F2 Marks List',
                filename: 'F2_List',
                orientation: 'potrait',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 2, 4, ]
                },
            },
            'colvis'
        ]
    } );
});

$(document).ready(function() {
    $('#f3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'F3 Marks List',
                filename: 'F3_List',
                exportOptions: {
                    columns: [0, 2, 4, ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'F3 Marks List',
                filename: 'F3_List',
                orientation: 'potrait',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 2, 4, ]
                },
            },
            'colvis'
        ]
    } );
} );

$(document).ready(function() {
    $('#f4').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'F4 Marks List',
                filename: 'F4_List',
                exportOptions: {
                    columns: [0, 2, 4, ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'F4 Marks List',
                filename: 'F4_List',
                orientation: 'potrait',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 2, 4, ]
                },
            },
            'colvis'
        ]
    } );
} );

$(document).ready(function() {
    $('#f13').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                title: 'F13 Marks List',
                filename: 'F13_List',
                exportOptions: {
                    columns: [0, 2, 4, ]
                }
            },
            {
                extend: 'pdfHtml5',
                title: 'F13 Marks List',
                filename: 'F13_List',
                orientation: 'potrait',
                pageSize: 'A4',
                exportOptions: {
                    columns: [0, 2, 4, ]
                },
            },
            'colvis'
        ]
    } );
});

$(document).ready(function(){
    $('#assignment').DataTable();
})

$(document).ready(function(){
    $('#form-list').DataTable();
})
</script>

<!--Assessment Algorithm-->
<script type="text/javascript">

    // F2
    function computef2(){
        s1=Number(document.calculator.score1.value);
        w1=Number(document.calculator.weight1.value);
        s2=Number(document.calculator.score2.value);
        w2=Number(document.calculator.weight2.value);
        s3=Number(document.calculator.score3.value);
        w3=Number(document.calculator.weight3.value);

        m1=s1*w1;
        m2=s2*w2;
        m3=s3*w3;

        total = m1 + m2+ m3;
        
        document.calculator.marks1.value=m1;
        document.calculator.marks2.value=m2;
        document.calculator.marks3.value=m3;
        document.calculator.total.value=total;
        document.calculator.f2.value=total;
    }

    //F3
    function computef3(){
        s1=Number(document.calculator.score1.value);
        w1=Number(document.calculator.weight1.value);
        s2=Number(document.calculator.score2.value);
        w2=Number(document.calculator.weight2.value);
        s3=Number(document.calculator.score3.value);
        w3=Number(document.calculator.weight3.value);

        m1=s1*w1;
        m2=s2*w2;
        m3=s3*w3;

        total = m1 + m2+ m3;
        
        document.calculator.marks1.value=m1;
        document.calculator.marks2.value=m2;
        document.calculator.marks3.value=m3;
        document.calculator.total.value=total;
        document.calculator.f3.value=total;
    }

     //F4
     function computef4(){
        s1=Number(document.calculator.score1.value);
        w1=Number(document.calculator.weight1.value);
        s2=Number(document.calculator.score2.value);
        w2=Number(document.calculator.weight2.value);
        s3=Number(document.calculator.score3.value);
        w3=Number(document.calculator.weight3.value);

        m1=s1*w1;
        m2=s2*w2;
        m3=s3*w3;

        total = m1 + m2+ m3;
        
        document.calculator.marks1.value=m1;
        document.calculator.marks2.value=m2;
        document.calculator.marks3.value=m3;
        document.calculator.total.value=total;
        document.calculator.f4.value=total;
    }

    //F13
    function computef13(){
        s1=Number(document.calculator.score1.value);
        w1=Number(document.calculator.weight1.value);
        s2=Number(document.calculator.score2.value);
        w2=Number(document.calculator.weight2.value);
        s3=Number(document.calculator.score3.value);
        w3=Number(document.calculator.weight3.value);
        s4=Number(document.calculator.score4.value);
        w4=Number(document.calculator.weight4.value);
        s5=Number(document.calculator.score5.value);
        w5=Number(document.calculator.weight5.value);
        s6=Number(document.calculator.score6.value);
        w6=Number(document.calculator.weight6.value);
        s7=Number(document.calculator.score7.value);
        w7=Number(document.calculator.weight7.value);
        s8=Number(document.calculator.score8.value);
        w8=Number(document.calculator.weight8.value);
        s9=Number(document.calculator.score9.value);
        w9=Number(document.calculator.weight9.value);

        m1=s1*w1;
        m2=s2*w2;
        m3=s3*w3;
        m4=s4*w4;
        m5=s5*w5;
        m6=s6*w6;
        m7=s7*w7;
        m8=s8*w8;
        m9=s9*w9;

        total = m1 + m2 + m3 + m4 + m5 + m6 + m7 + m8 + m9;
        
        document.calculator.marks1.value=m1;
        document.calculator.marks2.value=m2;
        document.calculator.marks3.value=m3;
        document.calculator.marks4.value=m4;
        document.calculator.marks5.value=m5;
        document.calculator.marks6.value=m6;
        document.calculator.marks7.value=m7;
        document.calculator.marks8.value=m8;
        document.calculator.marks9.value=m9;
        document.calculator.total.value=total;
        document.calculator.f13.value=total;
    }


</script>

</body>
</html>
