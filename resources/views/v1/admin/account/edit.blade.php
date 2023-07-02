<div class="container">
    @if ($errors->any())

      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width: 50rem">
                <p class="text-center"><b>Change Password</b></p>                    
                <form class="w-full max-w-lg md:items-center" action="{{ route('admins.update', $admin->id) }}" method="post">
                  @csrf
                  @method('PUT')
                  <label class="ml-5">Username</label><br/>
                  <input type="text" name="username" id="username" value="{{ $admin->username }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                  <label class="ml-5">Password</label><br/>
                  <input type="text" name="password" id="password" value="" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                  <button type="submit" class="rounded-md bg-green hover:bg-green-600 mt-2 px-3 py-2 ml-5">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div>
