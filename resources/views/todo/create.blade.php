<x-layout>
    <x-slot name="title">
        Form Todo
    </x-slot>
    <h1>Form Todo</h1>
    <style>
        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }
        .label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-control{
            width: 300px;
            padding: 5px;
            margin-bottom: 10px
        }
        .btn {
            border: none;
            cursor: pointer;
            font-family: inherit;
            font-size: 100%;
            width: 150px;
            background-color: green;
            border-radius: 10px;
            color: white;
            transition: box-shadow 0.3s ease-out;
            padding: 8px 10px;
        }
        .btn:hover {
            box-shadow: 0 0 0 1px green inset, 0 0 0 3px white inset;
        }
    </style>
    <form action="/todo/submit" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="label label-title">Введите название задачи</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Ваша новая задача">

            <label for="description" class="label label-description">Введите описание задачи</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Ваше описание задачи">

            <button type="submit" class="btn btn-success">Сохранить задачу</button>
        </div>
    </form>
</x-layout>
