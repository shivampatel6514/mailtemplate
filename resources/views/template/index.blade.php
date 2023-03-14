<x-app-layout>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">title</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                      <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->title}}</td>
                        <td class="d-flex">
                          
                          <a class="pr-4" href="{{ route('templates.edit',$item->id) }}"><i class="fa fa-edit"></i></a>
                        
                        
                          <form action="{{ route('templates.destroy',$item->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button><i class="fa fa-trash"></i></button>
                          </form>
                        </td> 
                      </tr>
                    @endforeach  
                  </tbody>
              </table>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>