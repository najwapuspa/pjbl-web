 @auth
                    <!-- Muncul kalau user SUDAH login -->
                    <div class="dropdown">
                        <div class="d-flex align-items-center gap-2" style="cursor: pointer;" data-bs-toggle="dropdown">
                            <i class="bi bi-person-check fs-4"></i>
                            <span class="fw-bold small">{{ Auth::user()->name }}</span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li><a class="dropdown-item" href="/profile"><i class="bi bi-person me-2"></i>Profil Saya</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Keluar
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <!-- Muncul kalau user BELUM login -->
                    <a href="{{ route('login') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2"> 
                        <i class="bi bi-person fs-4"></i>
                        <span class="fw-bold small">Masuk / Daftar</span>
                    </a>
                @endauth

                <i class="bi bi-heart fs-4" style="cursor: pointer;"></i>
                <i class="bi bi-bag fs-4" style="cursor: pointer;"></i>
            </div>
        </div>

        <nav class="mt-3">
            <ul class="list-unstyled d-flex gap-4 fw-bold mb-0" style="font-size: 14px; text-transform: uppercase;">
                <li><a style="cursor: pointer;" class="text-decoration-none text-dark category-link border-bottom border-2 border-dark">Wanita</a></li>
                <li><a style="cursor: pointer;" class="text-decoration-none text-dark category-link">Pria</a></li>
                <li><a style="cursor: pointer;" class="text-decoration-none text-dark category-link">Sports</a></li>
                <li><a href="#" class="text-decoration-none text-dark category-link">Anak</a></li>
                <li><a href="#" class="text-decoration-none text-dark category-link">Luxury</a></li>
                <li><a href="#" class="text-decoration-none text-dark category-link">Beauty</a></li>
            </ul>
        </nav>
    </div>
</header>