@extends('layouts.default')

@section('content')


        <div class="card mt-5 pl-1 pr-1">

        <html>
        <head>
                <style>
                        table, th, td {
                                border: 2px solid black;
                        }
                </style>
        </head>
        <body>

        <table id="table" style="width:100%">
                <tr>
                        <th>Message</th>
                        <th>Delete</th>

                </tr>
                <tr>
                        <td><a href="/bootstrapcard" class="card-link">Is this about DBS?</a></td>
                        <td><button type="remove" class="btn btn-primary">Delete</button></td>
                </tr>
                <tr>
                        <td><a href="/bootstrapcard" class="card-link">Goku vs Jiren</a></td>
                        <td><button type="remove" class="btn btn-primary">Delete</button></td>

                </tr>
                <tr>
                        <td><a href="/bootstrapcard" class="card-link">Jiren is dead</a></td>
                        <td><button type="remove" class="btn btn-primary">Delete</button></td>

                </tr>
        </table>
        <script>
            var index, table = document.getElementById('table');
            for (var i = 1; i < table.rows.length; i++)
            {
                table.rows[i].cells[1].onclick = function ()
                {
                    {
                        index = this.parentElement.rowIndex;
                        table.deleteRow(index);
                    }
                    //console.log(index);
                };
            }
        </script>


        </body>
        </html>

        </div>


@endsection


