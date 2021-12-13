<!DOCTYPE html>

<h3>Task List</h3>
<h1>Task Names </h1>
<ul>
    @foreach ($tasks as $task)

        <li> {{ $task->name }} </li>

    @endforeach
</ul>

<button type="button" value="Go back please" onclick="location.href='{{ url('/') }}'">Go back please
    &#128525;</button>
<html>
