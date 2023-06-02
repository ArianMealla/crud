
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
        <tr class="bg-yellow-500 text-white">
          <th class="w-20 py-4 ...">ID</th>
          <th class="w-1/8 py-4 ...">Name</th>
          <th class="w-1/16 py-4 ...">Country</th>
          <th class="w-1/16 py-4 ...">email_verified_at</th>
          <th class="w-1/16 py-4 ...">password</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($users as $row)
            
       
            <tr>
            <td class="py-3 px-6">{{@row->ID}}</td>
            <td class="p-3">{{@row->Name}}</td>
            <td class="p-3">{{@row->Country}}</td>
            <td class="p-3 text-center">{{@row->email_verified_at}}</td>
            <td class="p-3 text-center">{{@row->password}}</td>
            <td class="p-3 text-center">{{@row->created_at}}</td>
            <td class="p-3 text-center">{{@row->updated_at}}</td>
            <td class="p-3">

                <form  action="{{ route('usuario.destroy', $row->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                  <i class="fas fa-trash"></i></button>
                </form>
                 <a href="{{ route('usuario.edit',$row->id)}}" class="bg-green-500 
                  text-white px-3 py-1 rounded-sm"><i class="fas fa-pen"></i></a>
            </td>
            </tr>
        @endforeach
        
        
      </tbody>
    </table>
</div>
@endsection