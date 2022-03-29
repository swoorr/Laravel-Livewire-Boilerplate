<div>
    <div class="d-flex justify-content-start">
        @if ($sortBy == 'ASC')
        <a class="btn btn-outline-primary" wire:click="loadCars('price','DESC')"> Fiyata göre sırala </a>
        @else
        <a class="btn btn-outline-primary" wire:click="loadCars('price','ASC')"> Fiyata göre sırala </a>
        @endif

        @if ($sortBy == 'ASC')
        <a class="btn btn-outline-primary ml-2" wire:click="loadCars('date','DESC')"> Tarihe göre sırala </a>
        @else
        <a class="btn btn-outline-primary ml-2" wire:click="loadCars('date','ASC')"> Tarihe göre sırala </a>
        @endif
    </div>

    <table class="table table-striped mt-2" wire:init="loadCars">
        @foreach($cars as $item)
        <tr>
            <td>{{ $item->year }}</td>
            <td>{{ $item->brand }}</td>
            <td>{{ $item->model }}</td>
            <td>{{ number_format($item->price,2) }} ₺ </td>
            <td> <img height="32" src="{{ $item->image }}" alt=""> </td>
            <!-- <td>
                <div x-data="{ openMenu: false }" style="position:relative">
                    <button @click="openMenu = true" class="btn btn-secondary dropdown-toggle"
                     type="button">
                    +
                    </button>
                    <ul x-show="openMenu" @click.away="openMenu = false" class="dropdown-menu dropdown-menu-dark show">
                        <li><a class="dropdown-item" wire:click="delete( {{ $item->id }} )" href="javascript:;">{{ $item->name }}... sil</a></li>
                    </ul>
                </div>
            </td> -->
        </tr>
        @endforeach

    </table>

</div>