@extends('layouts.main')


  @section('content')
<main role="main"  class="container">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 form">
                    <h2 class="mt-5 create">Login</h2>
                    <form action="{{ route('login.create') }}" method="post" autocomplete="off">
                        @csrf 
                        {{-- @method('PUT') --}}

                        <x-login.input type="email" name="email" label="Email"  class="form-control " />
                        <x-login.error name='email'/>

                        <x-login.input type="password" name="password" label="Password"  class="form-control"/>
                        <x-login.error name='password' />

                        <div class="button submit">
                        <x-login.create>Login</x-login.create>
                        </div>

                    </form>
                </div> 
            </div>        
        </div>
    </div>
    </main>
    @endsection

   
</body>
</html>