<html>
    <body>



<table>
<tr>
    <td> </td>
    <td> FROM:</td>
    <td> TO: </td>
</tr>

    @foreach ($flights as $flight)
        <tr>
            <td> {{$flight->id}}</td>
            <td> {{$flight->to}}</td>
            <td> {{$flight->from}}</td>
            <td>  <a href='{!! url('/flight',[$flight->id]); !!}'>Flight</a> </td>
            <td>
                <form method="post" action="/flight/delete/{{ $flight->id }}">
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-primary">Delete</button>

                </form>

            </td>

        </tr>
    @endforeach


</table>


    </body>
</html>