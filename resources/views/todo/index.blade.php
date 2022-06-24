<x-layout>
    <x-slot name="title">
        All Todos
    </x-slot>
    <h1>All Todos</h1>
    <style>
        .Todos {
            text-align: center;
            border-collapse: collapse;
        }
        .Todos_header {
            font-weight: bold;
        }
        .Todos_col {
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
    <table class="Todos">
        <thead class="Todos_header">
            <tr>
                <td class="Todos_col">ID</td>
                <td class="Todos_col">Title</td>
                <td class="Todos_col">Description</td>
                <td class="Todos_col">Created at</td>
                <td class="Todos_col">Updated at</td>
            </tr>
        </thead>
        @if (count($todos))
            @foreach($todos as $key=>$value)
                <tr class="Todos_row">
                    <td class="Todos_col">{{ $value->id }}</td>
                    <td class="Todos_col">{{ $value->title }}</td>
                    <td class="Todos_col">{{ $value->description }}</td>
                    <td class="Todos_col">{{ $value->created_at }}</td>
                    <td class="Todos_col">{{ $value->updated_at }}</td>
                </tr>
            @endforeach
        @else
            <tr class="Todos_row">
                <td class="Todos_col" colspan="5">No todos</td>
            </tr>
        @endif
    </table>
</x-layout>
