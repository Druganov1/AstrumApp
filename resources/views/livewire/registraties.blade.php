<div>
@switch($currentstage)
    @case('edit')
        <div class="full-height-center">

            <div class="card bg-dark text-white w-50">
                <div class="card-header">
                    Bewerk registratie
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        @csrf
                        <div class="mb-3">
                            <label for="firsname" class="form-label text-white">Voornaam</label>
                            <input type="text" wire:model="firstname" class="form-control @error('firstname') is-invalid @enderror" id="firsname">
                            @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label text-white">Achternaam</label>
                            <input type="text" wire:model="lastname" class="form-control @error('lastname') is-invalid @enderror" id="lastname">
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="dob"  class="form-label text-white">Geboortedatum</label>
                            <input type="date" wire:model="dob" class="form-control @error('dob') is-invalid @enderror" id="dob">
                            @error('dob')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Sla wijzigingen op</button>
                    </form>
                </div>
            </div>
        </div>
        @break
    @default
        @if($rows->count() > 0)
            <div class="full-height-center">
                <div class="card bg-dark text-white" style="width: 50rem;">
                    <div class="card-header">
                        Registraties ({{ $rows->count()}} in totaal)
                    </div>
                    <div class="card-body">
                        <div style="max-height: 400px; overflow-y: auto;">
                            <table class="table table-dark table-striped">
                                <thead class="thead-fixed">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Voornaam</th>
                                    <th scope="col">Achternaam</th>
                                    <th scope="col">Geboortedatum</th>
                                    <th scope="col">Acties</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rows as $row)
                                    <tr wire:key="{{$row->id}}">
                                        <th scope="row">{{ $row->id }}</th>
                                        <td>{{ $row->firstname }}</td>
                                        <td>{{ $row->lastname }}</td>
                                        <td>{{ $row->dob }}</td>
                                        <td>
                                            <button  class="btn btn-sm btn-primary" wire:click="edit({{ $row->id }})">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger" wire:click="delete({{ $row->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="full-height-center">
                <div class="p-5 mb-4 text-bg-dark rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Er zijn geen registraties ❌</h1>
                        <p class="col-md-8 fs-4">Ja, nul inderdaad nada niente.</p>
                        <button href="/formulier" wire:navigate class="btn btn-primary btn-lg" type="button">Registreren</button>

                    </div>
                </div>
            </div>
        @endif
@endswitch


</div>
