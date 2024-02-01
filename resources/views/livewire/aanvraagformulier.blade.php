<div>

    @switch($currentstage)
        @case('success')
            <div class="full-height-center">
                <div class="p-5 mb-4 text-bg-dark rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Het is gelukt 🎉</h1>
                        <p class="col-md-8 fs-4">We gaan nu je gegevens verkopen aan de svr 😁.</p>
                        <button wire:click="backToStart" class="btn btn-primary btn-lg" type="button">oh oke.</button>
                    </div>
                </div>
            </div>
            @break
        @case('error')
            <div class="full-height-center">
                <div class="p-5 mb-4 text-bg-dark rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Het is niet gelukt ❌</h1>
                        <p class="col-md-8 fs-4">Er is iets misgegaan, en we gaan er niets aan doen 😉.</p>
                        <button wire:click="backToStart" class="btn btn-primary btn-lg" type="button">ok.</button>
                    </div>
                </div>
            </div>
            @break
        @default
            <div class="full-height-center">

            <div class="card bg-dark text-white w-50">
                <div class="card-header">
                    Aanvraagformulier
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store">
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
                        <button type="submit" class="btn btn-primary">Opsturen</button>
                    </form>
                </div>
            </div>
        </div>

    @endswitch



</div>
