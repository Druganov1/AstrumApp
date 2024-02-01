<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">AstrumApp</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/home" wire:navigate class="nav-link {{ request()->is('home') ? 'active' : 'text-white' }}">
                <i style=" font-size: 20px;" class="fa-regular fa-house"></i>

                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/formulier" wire:navigate class="nav-link {{ request()->is('formulier') ? 'active' : 'text-white' }}">
                <i style=" font-size: 20px;" class="fa-solid fa-id-card"></i>
                Formulier
            </a>
        </li>
        <li class="nav-item">
            <a href="/registraties" wire:navigate class="nav-link {{ request()->is('registraties') ? 'active' : 'text-white' }}">
                <i style=" font-size: 20px;"  class="fa-solid fa-users"></i>
                Registraties
            </a>
        </li>
        <!-- Add more sidebar items here -->
    </ul>
    <hr>
    <div>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" style="font-size: 10px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcdCGjn1sswekcsHbv-g08UQVWyu-xCvIUHhEteHI4Ug&s" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Versie 1.0.0.PROD</strong>
        </a>

    </div>
</div>
