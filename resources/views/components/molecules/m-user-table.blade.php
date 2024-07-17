<thead>
    <tr>
        <x-atoms.a-th>Id User</x-atoms.a-th>
        <x-atoms.a-th>Name User</x-atoms.a-th>
        <x-atoms.a-th>Phone User</x-atoms.a-th>
        <x-atoms.a-th>Email User</x-atoms.a-th>
        <x-atoms.a-th>Action User</x-atoms.a-th>
    </tr>
</thead>
<tbody>
    <tr>
        <x-atoms.a-td>U-01</x-atoms.a-td>
        <x-atoms.a-td>Robert Pattinson</x-atoms.a-td>
        <x-atoms.a-td>012789690</x-atoms.a-td>
        <x-atoms.a-td>robert@gmail.com</x-atoms.a-td>
        <x-atoms.a-td>
            <x-atoms.a-button class="btn-edit" data-bs-toggle="modal" data-bs-target="#EditUserModal">Edit</x-atoms.a-button>
            <x-atoms.a-button class="btn-danger" onclick="confirmDelete('')">Delete</x-atoms.a-button>
        </x-atoms.a-td>
    </tr>
</tbody>


