@php
    $i = 1;
@endphp

@foreach ($clubName as $ele)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $ele->title }}</td>
        <td>{{ $ele->product_title }}</td>
        <td>{{ $ele->club->club_name }}</td>
        <td>{{ $ele->type }}</td>
        <td>
            <div class="row">
                <div class="col-lg-6">
                    <i class="edit-btn  bi bi-pencil-fill" data-id="{{ $ele->id }}"></i>
                </div>
                <div class="col-lg-6">
                    <i class="dlt-btn bi bi-trash3" data-id="{{ $ele->id }}"></i>
                </div>
            </div>
        </td>
    </tr>
      <div>
        <a href="/" class="btn btn-primary">back</a>
      </div>

@endforeach


