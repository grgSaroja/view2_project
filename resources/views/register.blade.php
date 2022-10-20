@extends('layouts.main')


  @section('content')
<main role="main"  class="container register">

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 form">
                    <h2 class="mt-5 create">Register</h2>
                    <form action="{{ route('register.create') }}" method="post" >
                        @csrf 
                       
                        <x-register.input type="text" name="name" label="Name" class="form-control" value="{{ old('name') }}  "/>   
                        <x-register.error name='name'  />

                        <x-register.input type="email" name="email" label="Email"  class="form-control "  value="{{ old('email') }} "/>
                        <x-register.error name='email'  />

                        <x-register.input type="password" name="password" label="Password"  class="form-control" value="{{ old('password') }} "/>
                        <x-register.error name='password' />

                        <div class="button submit">

                        <x-register.create>Register</x-register.create>

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