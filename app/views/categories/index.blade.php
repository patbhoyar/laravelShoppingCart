@extends('master')

@section('pageContent')
<div class="container-fluid">

    <table class="table">
        <thead>
        <th><h3>Categories</h3></th>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>
                <?php echo link_to("category/".$category->id, $category->categoryName); ?>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

</div>
@stop
