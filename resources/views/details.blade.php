@extends('main')
@section('content')
{{-- @include('sweetalert::alert') --}}

<header id="header" class=" d-flex align-items-center header-transparent mt-5">
    <div class="container d-flex justify-content-center text-center">
      
        <h1 class="logo"><a class="text-decoration-none text-dark fw-bold " href="/dashboard">Level Molten</a></h1>
  </header>
    <div class="container-fluid">
      

        <table class="table mt-3">
            <thead class="table-dark text-center fw-bold">
            <tr>
            <td>
               MESIN
            </td>
            <td>
                CAPACITY
            </td>
            <td>
                MIN
            </td>
            <td>
                MAX
            </td>
            <td>
                ACTION
            </td>


            </thead>
            <tbody>
                @foreach ($molt as $a)
                <form action="{{ route('detail.update',$a['mc'])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
            <tr>
                <td class="text-center">
                   <div class="col-sm">
                      <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['mc'] }}" name="mc" readonly>
                   
                    </div>
                </td>
                 <td class="text-center">
                    <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['capacity'] }}" name="capacity" readonly>
                   
                </td>
                <td class="text-center">
                    <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['min'] }}" name="min"  >
                   
                </td>
                <td class="text-center">
                    <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['max'] }}" name ="max"  >
                   
                </td>
                <td class="text-center">
                    {{-- <a href="{{ route('detail.show', $a['mc'] )}}"> --}}
                        <button type="submit" class="btn btn-outline-warning">Edit</button> 
                    {{-- </a> --}}
                    {{-- <button type="delete" class="btn btn-outline-danger">Hapus</button> --}}
                </td>
            </tr>
        </form>
            @endforeach 

                {{-- <div class="row g-3">
                    
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="State" aria-label="State">
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                      </div>
                    <div class="col-sm">
                        <td class="text-center">
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                        </td>
                    </div> --}}
                  </div>
            </tbody>
            
            
        </table>
        <script>
            function onButtonPress() {
            $('.alert').alert('close')
        }
        </script>
 
 @endsection