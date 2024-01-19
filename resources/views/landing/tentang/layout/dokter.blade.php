<div id="dokter">
<div class="dokter">
    <h1> <U>Daftar Dokter</U></h1>

    <div class="card mt-2">
        <div class="card-header">
        <div class="row">
            <div class="col-9">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                {{ session('success') }}
                </div>
                @elseif(session('error'))
                <div class="alert alert-danger" role="alert">
                {{ session('error') }}
                </div>
                @else
                <h4>Daftar Dokter</h4>
                @endif
                </div>
                
                {{-- end button --}}
                </div>
                </div>
                <div class="card-body">
                <table border="1" class="table">
                <thead>
                <tr>
                    
               <th scope="col"> <center>Nama</th>
                <th scope="col"> <center>DEPARTMENT</th>
                <th scope="col">  <center>SPECIALTY</th>
              
                </tr>
                </thead>


    <tbody>

    @forelse($daftardokters as $daftardokter)
    <tr>
      
    
    <td><center>{{ $daftardokter->nama }}</td>
        <td><center>{{ $daftardokter->department }}</td>
            <td><center>{{ $daftardokter->specialty }}</td>
            @endforeach
            </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>
<br><br><br>