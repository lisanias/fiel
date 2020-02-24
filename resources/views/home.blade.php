@extends('layouts.app')

@section('title', 'Painel') 

@section('title_r')
<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
@endsection

@section('content')
    <div class="col-md-12">
        
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-header">FIEL</div>

            <div class="card-body">

                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-left-primary shadow mb-0">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total de Membros
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ count($members) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card border-left-warning shadow mb-0">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total de Igrejas
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ count($igrejas) }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-church fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            

        </div>

        <div class="card shadow mb-4  border-success">
            <div class="card-header text-white bg-success">
                Aniversariantes do Mês {{__( Carbon\Carbon::now()->format('F') )}}
                <span class="badge badge-light">{{count($nivers)}}</span>
            </div>

            <div class="card-body">
                
                <div class="container">
                    <div class="row row-cols-lg-2 row-cols-1">
                        @foreach ($nivers as $niver)

                            @php
                                if($loop->iteration >= $loop->count/2 and $loop->iteration < ($loop->count/2)+1){
                                        $divopen  = "<div class='list-group'>";
                                        $divclose  = '</div>';
                                } else {
                                        $divopen  = ' ';
                                        $divclose  = ' ';
                                }
                            @endphp

                            @if ($loop->first)
                                <div class="list-group">
                            @endif                      

                            <div>
                                <a class="link  list-group-item-action" href="{{ route('members.show', $niver->id) }}">
                                    <strong>{{ $niver->dnas->format('d') }}</strong>
                                    <i class="fas fa-chevron-right"></i>
                                    {{ $niver->nome }}
                                </a>                                
                            </div>

                            {!!$divclose!!}{!!$divopen!!}
                        
                            @if ($loop->last)
                                </div>
                            @endif
                        
                        @endforeach
                    </div>
                </div>                  

            </div>
            

        </div>
    </div>
@endsection
