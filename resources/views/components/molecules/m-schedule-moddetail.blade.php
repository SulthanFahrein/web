<x-atoms.a-paragraph><strong>Name: </strong>Rangga</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>Phone: </strong>0812388</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>Schedule Date: </strong>08/07/2024</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>Schedule Time: </strong>12:00</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>PIC: </strong>Arnold</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>Note: </strong>Aktifkan WA nya ya</x-atoms.a-paragraph>
<x-atoms.a-paragraph><strong>Status: </strong></x-atoms.a-paragraph>

<form action="" method="">
    <div class="mb-3">
        <x-atoms.a-label for="edit-pic-">Edit PIC</x-atoms.a-label>
        <x-atoms.a-inputmanage id="edit-pic" name="pic" type="text" value=""></x-atoms.a-inputmanage>
    </div>
    <div class="mb-3">
        <x-atoms.a-label for="edit-catatan-">Note</x-atoms.a-label>
        <x-atoms.a-textarea id="area-teks-catatan" name="catatan" rows="3"></x-atoms.a-textarea>
    </div>
    <x-atoms.a-inputmanage type="hidden" name="status" id="status-"> </x-atoms.a-inputmanage>
    <x-atoms.a-button type="button" class="btn-success" data-bs-toggle="modal"
        data-bs-target="#modal-lihat-detail-jadwal-done">Accept</x-atoms.a-button>
    <x-atoms.a-button type="button" class="btn-danger" data-bs-toggle="modal"
        data-bs-target="#modal-lihat-detail-jadwal-reject">Reject</x-atoms.a-button>
</form>