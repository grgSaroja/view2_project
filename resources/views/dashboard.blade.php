@extends('layouts.main')


  @section('content')
<main role="main"  class="container">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 form">
                    <h2 class="mt-5 welcome">Welcome {{ Auth::user()->name }}</h2>
                
                    
                </div> 
            </div>        
        </div>
    </div>
    </main>
    @endsection

   
</body>
</html>