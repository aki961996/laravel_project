<!-- resources/views/customers/index.blade.php -->

<table>
    <thead>
        <tr>
            <th>Team Member</th>
            {{-- <th>task</th> --}}
            <th>priority</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->priority }}</td>
            {{-- <td>{{ $customer->task }}</td> --}}
            <td>{{ $customer->team_member }}</td>
            <!-- Add more columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>