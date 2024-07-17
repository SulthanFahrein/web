<thead>
    <tr>
        <x-atoms.a-th>No.</x-atoms.a-th>
        <x-atoms.a-th>Property Name</x-atoms.a-th>
        <x-atoms.a-th>Property Image</x-atoms.a-th>
        <x-atoms.a-th>Property Price</x-atoms.a-th>
        <x-atoms.a-th>Property Status</x-atoms.a-th>
        <x-atoms.a-th>Action Property</x-atoms.a-th>
    </tr>
</thead>
<tbody>
    <tr>
        <x-atoms.a-td>1</x-atoms.a-td>
        <x-atoms.a-td>Properti Jaksel 2</x-atoms.a-td>
        <x-atoms.a-td>
            <x-atoms.a-button class="btn-success" data-bs-toggle="modal" data-bs-target="#ModalImageProperty"
                >Lihat Foto</x-atoms.a-button>
        </x-atoms.a-td>
        <x-atoms.a-td>1.000.000</x-atoms.a-td>
        <x-atoms.a-td>Sold</x-atoms.a-td>
        <x-atoms.a-td>
            <x-atoms.a-button class="btn-detail" data-bs-toggle="modal" data-bs-target="#ModalEditProperty"
                >Edit</x-atoms.a-button>
            <x-atoms.a-button class="btn-danger" data-bs-toggle="modal"
                onclick="confirmDelete('')">Delete</x-atoms.a-button>
        </x-atoms.a-td>
    </tr>
</tbody>