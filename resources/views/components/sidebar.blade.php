<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">AstrumApp</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('home') ? 'active' : 'text-white' }}">
                <i style=" font-size: 20px;" class="fa-regular fa-house"></i>

                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ request()->is('dash') ? 'active' : 'text-white' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/orders" class="nav-link {{ request()->is('/dashboard') ? 'active' : 'text-white' }}">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                Orders
            </a>
        </li>
        <!-- Add more sidebar items here -->
    </ul>
    <hr>
    <div>
        <a href="#" class="d-flex align-items-center text-white text-decoration-none" style="font-size: 10px;">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Versie 1.0.0.PROD</strong>
        </a>

    </div>
</div>
