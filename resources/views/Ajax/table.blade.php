@foreach ($data as $ele)
    <tr>
        <td class="xyz">{{ $ele->business_name }}</td>
        <td>{{ $ele->club_number }}</td>
        <td>{{ $ele->club_name }}</td>
        <td>{{ $ele->club_desciption }}</td>
        <td><img src="images/logo/{{ $ele->club_logo }}" alt="" height="80px" width="50%"></td>
        <td><img src="images/banner/{{ $ele->club_banner }}" alt="" height="80px" width="50%"></td>
        <td><a href="{{ $ele->website_link }}">{{ $ele->website_link }}</a></td>
        <td>
            <div class="row">
                <div class="col-lg-6">
                    <i class="edit-btn  bi bi-pencil-fill" data-id="{{ $ele->id }}"></i>
                </div>
                <div class="col-lg-6">
                    <i class="delete-btn bi bi-trash3" data-id="{{ $ele->id }}"></i>
                </div>
            </div>
        </td>
    </tr>
@endforeach
