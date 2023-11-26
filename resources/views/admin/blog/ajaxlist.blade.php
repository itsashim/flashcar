<?php $i=0; ?>
    @foreach($blogs as $blog)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $blog->title }}</td>
        <td><img height="150px" src="{{ asset($blog->image) }}"></img></td>
        <td>{{ $blog->created_at }}</td>
        <td>
            <a class="btn btn-success btn-sm float-left" href="{{route('blog.show',[$blog->id])}}"><i class="fa fa-eye"></i></a>
            <a class="btn btn-primary btn-sm float-left" href="{{route('blog.edit',[$blog->id])}}"><i class="fa fa-edit"></i></a>
            <a class="btn btn-danger btn-sm float-left remove_item" data-id="{{$blog->id}}" data-url="{{route('blog.destroy',[$blog->id])}}">
                <i class="fa fa-trash"></i>
            </a>
        </td>
    </tr>
@endforeach