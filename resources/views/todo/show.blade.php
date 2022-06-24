<x-layout>
    <x-slot name="title">
        ID Todo
    </x-slot>
    <h1>ID Todo</h1>
    <style>
        .Todo {
            text-align: center;
            border-collapse: collapse;
        }
    .Todo_header {
        font-weight: bold;
    }
    .Todo_col {
        border: 1px solid black;
        padding: 5px 10px;
    }
    </style>
    <table class="Todo">
        <thead class="Todo_header">
            <tr>
                <td class="Todo_col">ID</td>
                <td class="Todo_col">Title</td>
                <td class="Todo_col">Description</td>
                <td class="Todo_col">Created at</td>
                <td class="Todo_col">Updated at</td>
            </tr>
        </thead>
        @if ($todo)
            <tr class="Todo_row">
                <td class="Todo_col">{{ $todo->id }}</td>
                <td class="Todo_col">{{ $todo->title }}</td>
                <td class="Todo_col">{{ $todo->description }}</td>
                <td class="Todo_col">{{ $todo->created_at }}</td>
                <td class="Todo_col">{{ $todo->updated_at }}</td>
            </tr>
        @else
            <tr class="Todo_row">
                <td class="Todo_col" colspan="5">No todo</td>
            </tr>
         @endif
    </table>
</x-layout>
