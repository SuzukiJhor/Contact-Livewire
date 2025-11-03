<div>
    <div class="text-center">
        <p>Quer realmente deletar esse Contato?</p>
        <p>Nome: <br><strong class="text-white">{{ $contact->name }} </strong></br></p>
        <p>Email: <br><strong class="text-white">{{ $contact->email }} </strong></br></p>
        <p>Tel: <br><strong class="text-white">{{ $contact->phone }} </strong></br></p>
        <button wire:click="cancel" class="btn btn-primary px-5">Não</button>
        <button wire:click="delete" class="btn btn-danger px-5">Sim</button>
    </div>
</div>
