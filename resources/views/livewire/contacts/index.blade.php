<div>
    <table class="table table-striped shadow border border-light">
        <thead style="background-color: rgba(127, 169, 199, 0.527)">
            <tr>
                <th>ID No</th>
                <th>Full Name</th>
                <th>Contact Number</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>Sim Card</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->contact_number }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->sim_card }}</td>
                    <td>
                        <a href="{{ url('edit', ['contact' => $contact->id]) }}" class="btn btn-primary" id="ic" title="Edit"><i class=" fa fa-gear"></i></a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['contact' => $contact->id]) }}" class="btn btn-danger" id="ic" title="Delete"><i class=" fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    #ic {
        width: 40px;
    }
</style>
