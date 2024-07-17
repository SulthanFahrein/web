<div class="text-center mb-4">
    <x-atoms.a-img src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width:100px"
        class="img-fluid rounded-circle" alt="User-Profile-Image"></x-atoms.a-img>
</div>
<div class="form-group mb-3">
    <x-atoms.a-label for="disabledTextInput">User ID</x-atoms.a-label>
    <x-atoms.a-inputmanage type="text" id="disabledTextInput" placeholder="Adm-001" disabled></x-atoms.a-inputmanage>
</div>
<div class="form-group mb-3">
    <x-atoms.a-label for="exampleInputEmail1">Name</x-atoms.a-label>
    <x-atoms.a-inputmanage type="text"  id="exampleInputName" aria-describedby="nameHelp"
        name="nama" value=""></x-atoms.a-inputmanage>
</div>
<div class="form-group mb-3">
    <x-atoms.a-label for="exampleInputEmail1">Email Address</x-atoms.a-label>
    <x-atoms.a-inputmanage name="email_user" type="email"></x-atoms.a-inputmanage>
</div>
<div class="form-group mb-3">
    <x-atoms.a-label for="exampleInputEmail1">Password</x-atoms.a-label>
    <x-atoms.a-inputmanage name="password" type="password"></x-atoms.a-inputmanage>
</div>
<x-atoms.a-button class="btn-primary btn-block" onclick="updateSave('')" style="background-color:#00a5a7">Edit Profile</x-atoms.a-btnsubmit>