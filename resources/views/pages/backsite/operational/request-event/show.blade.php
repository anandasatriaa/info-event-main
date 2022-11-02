<table class="table table-bordered">
  
    <tr>
        <th>Poster</th>
        <td>
            <img src="
                @if ($request_event->poster != "")
                    @if(File::exists('storage/'.$request_event->poster))
                        {{ url(Storage::url($request_event->poster)) }}
                    @else
                       {{ 'N/A' }}
                    @endif
                @else
                    {{ 'N/A' }}
                @endif "
                alt="Event poster" class="users-avatar-shadow" height="100" width="100">
        </td>
    </tr>
</table>