<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Instansi</th>
        <th>category</th>
    </tr>
    <tbody>
        <td>{{ isset($event->name) ? $event->name : 'N/A' }}</td>
        <td>{{ isset($event->instance) ? $event->instance : 'N/A' }}</td>
        <td>{{ isset($event->category) ? $event->category : 'N/A' }}</td>
    </tbody>
</table>
