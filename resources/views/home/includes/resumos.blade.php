<!-- Earnings (Monthly) Card Example -->

@include('home.includes.cardResumos', 
[
    'title' => 'Membros', 
    'totals' => $members, 
    'color' => 'primary',
    'icon' => 'fas fa-user'
])

@include('home.includes.cardResumos', 
[
    'title' => 'Igrejas', 
    'totals' => $igrejas, 
    'color' => 'danger',
    'icon' => 'fas fa-church'
])

@include('home.includes.cardResumos', 
[
    'title' => 'Id. Min. Válidas', 
    'totals' => $identidades,
    'color' => 'success',
    'icon' => 'fas fa-id-card'
])

@include('home.includes.cardResumos', 
[
    'title' => 'Regionais', 
    'totals' => $regionais,
    'color' => 'warning',
    'icon' => 'fas fa-map-marked'
])