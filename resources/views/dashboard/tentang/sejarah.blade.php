@extends('dashboard.layout.index')

@section('content')



<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-7 connectedSortable">
        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="/create-sejarah" class="btn btn-success"> Tambah data </a>
                        </div>
                    </div>
                    <div class="card-body">

       <table class="table table-bordered">
        
        <tr>
            <th>Sejarah</th>

        </tr>
    </tr>
    <td></td>
</tr>
       </table>
    </div>
</div>
</div>
</div>
   
<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
    </script>
@endsection
