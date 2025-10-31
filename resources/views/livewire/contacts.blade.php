<div class="card p-5">
   <p class="mb-3">Contatos</p>

   @if($contacts->isEmpty())
       <div class="card bk-dark p-3 mb-1 text-center text-white">
           Nenhum contato cadastrado.
       </div>
   @endif

   @foreach ($contacts as $contact)
       <div class="card p-3 mb-1">
         <div class="row">
             <div class="col">  Nome: {{ $contact->name }}</div>
             <div class="col">  Email: {{ $contact->email }}</div>
             <div class="col">  Telefone: {{ $contact->phone }}</div>
         </div>
       </div>
       <hr class="m-0 p-0">   
   @endforeach
</div>
