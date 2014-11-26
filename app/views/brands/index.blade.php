@extends('master')

@section('pageContent')
<div class="container-fluid">

    <table class="table">
        <thead>
            <th><h3>Brands</h3></th>
        </thead>
        <tbody>
            @foreach($brands as $brand)
                <tr>
                    <td>
                        <?php echo link_to("brand/".$brand->id, $brand->brandName); ?>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@stop
