<!DOCTYPE html>


@section('add-task')

    <form method="POST" action="/addTask">
        {{ @csrf_field() }}
        <label for="name">Task Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="submit" value="Submit">
    </form>


@endsection


</html>
