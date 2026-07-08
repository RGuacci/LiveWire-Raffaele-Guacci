 
 
 
 <table class="table">
    <thead>
        
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Azione</th>
           
        </tr>
        
    </thead>
     
     @foreach ($messages as $message)
    <tbody>

        <tr>
           
            <th scope="row">{{$message->id}}</th>
            <td>{{$message->name}}</td>
            <td> <button wire:click="delete({{$message->id}})" class="btn btn-danger">Elimina</button></td>
           
            
        </tr>

    </tbody>
     @endforeach
 </table>
        