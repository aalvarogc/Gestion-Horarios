<x-app-layout>
    <style>
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }
        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
        input[type=submit]:hover {
        background-color: #45a049;
        }
        #formEdit{
            margin-top: 3em;
        }
        h1{
            font-size: 2em !important;
            text-align: center;
        }
    </style>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 max-w-7xl mx-auto" id="formEdit">
        <h1>Nueva asignatura</h1>
        <div>
            <form action="/asignaturas/crear" method ="POST">
                @csrf
                <label>Nombre:</label>
                <input type="text" name="nombreAs" placeholder="Nombre">
                @error('nombreAs')
                    <br>
                    <small style='color:red'>{{ $message }}</small>
                    <br>
                @enderror
                <label>Nombre corto:</label>
                <input type="text" name="nombreCortoAs" placeholder="Nombre corto">
                @error('nombreCortoAs')
                    <br>
                    <small style='color:red'>{{ $message }}</small>
                    <br>
                @enderror
                <label>Profesor:</label>
                <input type="text" name="profesorAs" placeholder="Profesor">
                @error('profesorAs')
                    <br>
                    <small style='color:red'>{{ $message }}</small>
                    <br>
                @enderror
                <label>Color:</label>
                <input type="color" name="colorAs" placeholder="Color">
                @error('colorAs')
                    <br>
                    <small style='color:red'>{{ $message }}</small>
                    <br>
                @enderror
                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                <input type="submit" value="Guardar">
            </form>
        </div>
    </div>
</x-app-layout>
