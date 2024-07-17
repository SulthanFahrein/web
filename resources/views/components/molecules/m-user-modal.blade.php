<div class="modal-body">
    <x-atoms.a-inputmanage type="hidden" name="id" value=""></x-atoms.a-inputmanage>
    <div class="form-group">
        <x-atoms.a-label for="name_user">Nama User</x-atoms.a-label>
        <x-atoms.a-inputmanage name="name_user" type="text" required value=""></x-atoms.a-inputmanage>
    </div>
    <div class="form-group">
        <x-atoms.a-label for="phone_user">Phone User</x-atoms.a-label>
        <x-atoms.a-inputmanage name="phone_user" type="text" required value=""></x-atoms.a-inputmanage>
    </div>
    <div class="form-group">
        <x-atoms.a-label for="phone_user">Email User</x-atoms.a-label>
        <x-atoms.a-inputmanage name="email_user" type="email" required value=""></x-atoms.a-inputmanage>
    </div>
</div>
<div class="modal-footer">
    <x-atoms.a-button class="btn-primary" style="background-color:#00a5a7">Update User</x-atoms.a-button>
</div>