@include('common.adminHeader',['title'=>'All Clients'])

<div class="container mt-4 ">
    <h1 class="mainheading ">ALL CUSTOMERS</h1>

    <table class="table table-light shadow">
        <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allclients as $client)
            <tr>
                <td>{{ $client->username }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->firstname }}</td>
                <td>{{ $client->phone }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">Details</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('common.adminFooter')
