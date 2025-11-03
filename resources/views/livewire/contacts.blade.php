<div class="card p-5">
    <p class="mb-3 fw-semibold">Contatos</p>

    <div class="d-flex align-items-center gap-2 mb-3">
        <span class="fw-semibold">Buscar:</span>
        <input type="text" class="form-control form-control-sm w-auto" style="max-width: 250px"
            wire:model.live="searchTerm" placeholder="Nome, email ou telefone">
    </div>
    @if ($contacts->isEmpty())
        <div class="card bk-dark p-3 mb-1 text-center text-white">
            Nenhum contato cadastrado.
        </div>
    @endif

    @foreach ($contacts as $contact)
        <div class="card p-3 mb-1">
            <div class="row">
                <div class="col"> Nome: {{ $contact->name }}</div>
                <div class="col"> Email: {{ $contact->email }}</div>
                <div class="col"> Telefone: {{ $contact->phone }}</div>
                <div class="col">
                    <a href="{{ route('contacts.delete', ['id' => $contact->id]) }}" class=" btn btn-danger">Deletar</a>
                </div>
                <div class="col">
                    <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}" class=" btn btn-primary">Editar </a>
                </div>
            </div>
        </div>
        <hr class="m-0 p-0">
    @endforeach
    <div>
        {{ $contacts->links() }}
    </div>
</div>
