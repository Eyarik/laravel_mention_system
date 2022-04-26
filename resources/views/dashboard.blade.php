<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
            
                <div class="row demo-item">
                    <form action="{{ route('addcomment') }}" method="POST">
                        @csrf
                        <div class="col-sm-12"><h4>Mention anyone by @name</h4></div>
                        <div class="col-sm-6 demo">
                            <textarea id="t1" name="content" class="content" rows="6" mentioned=[]>Try to @John</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div>
                    <form action="{{ route('addteam') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Team Nmae</label>
                          <input type="text" class="form-control" style="width: 20%" id="exampleInputEmail1" name="teamName">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
    
            </div>
        </div>
    </div>
   
</x-app-layout>
