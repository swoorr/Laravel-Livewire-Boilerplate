<div>
    <table class="table table-striped" wire:init="loadUsers">
        @foreach($users as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td> <img height="32" src="{{ $item->avatar }}?r=1{{ rand(0,7) }}" alt=""> </td>
            <td>
                <div x-data="{ openMenu: false }" style="position:relative">
                    <button @click="openMenu = true" class="btn btn-secondary dropdown-toggle"
                     type="button">
                    +
                    </button>
                    <ul x-show="openMenu" @click.away="openMenu = false" class="dropdown-menu dropdown-menu-dark show">
                        <li><a class="dropdown-item" wire:click="delete( {{ $item->id }} )" href="javascript:;">{{ $item->name }}... sil</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach
        
    </table>

</div>