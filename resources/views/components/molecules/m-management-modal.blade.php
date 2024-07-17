<div class="mb-3">
    <x-atoms.a-label for="formFile">Upload Image</x-atoms.a-label>
    <x-atoms.a-inputmanage type="file" style="padding:0;height: 30px;" id="formFile" name="images[]"
    accept="image/*" onchange="showFileName()" multiple>
    </x-atoms.a-inputmanage>
    <x-atoms.a-smallmanage>No file chosen</x-atoms.a-smallmanage>
</div>
<script>
    function showFileName() {
        var input = document.getElementById('formFile');
        var fileHelp = document.getElementById('fileHelp');
        if (input.files.length > 0) {
            fileHelp.textContent = 'File chosen: ' + input.files[0].name;
        } else {
            fileHelp.textContent = 'No file chosen';
        }
    }
</script>

<div class="mb-3">
    <x-atoms.a-label for="property_name">Property Name</x-atoms.a-label>
    <x-atoms.a-inputmanage type="text" name="property_name"></x-atoms.a-inputmanage>
</div>

<x-atoms.a-label for="price">Price</x-atoms.a-label>
<div class="input-group mb-3">
    <x-atoms.a-spanprice>Rp</x-atoms.a-spanprice>
    <x-atoms.a-inputmanage type="text" aria-describedby="basic-addon1" name="cost"></x-atoms.a-inputmanage>
</div>

<x-atoms.a-label for="status">Property Status</x-atoms.a-label>
<br>
<select class="form-select border border-dark mb-3" aria-label="Status" name="status">
    <x-atoms.a-option value="0" selected disabled>Ready</x-atoms.a-option>
    <x-atoms.a-option value="1">Sold</x-atoms.a-option>
    <x-atoms.a-option value="2">Pending</x-atoms.a-option>
</select>

<div class="mb-3">
    <x-atoms.a-img src="assets/img/maps.png" style="width:100%"></x-atoms.a-img>
</div>

<div class="mb-3">
    <x-atoms.a-label for="Address">Address</x-atoms.a-label>
    <x-atoms.a-textarea rows="3" name="address"></x-atoms.a-textarea>
</div>

<div class="mb-3">
    <x-atoms.a-label for="Deskripsi">Deskripsi</x-atoms.a-label>
    <x-atoms.a-textarea rows="3" name="address"></x-atoms.a-textarea>
</div>

<x-atoms.a-label for="Facilities">Facilities</x-atoms.a-label>
<div class="row">
    <div class="col-md-4">
        <x-atoms.a-label for="Deskripsi">Sqft</x-atoms.a-label>
        <x-atoms.a-inputmanage type="number" id="inputnumber" aria-describedby="inputsqft"
            name="cost"></x-atoms.a-inputmanage>
    </div>
    <div class="col-md-4">
        <x-atoms.a-label for="Deskripsi">Garage</x-atoms.a-label>
        <x-atoms.a-inputmanage type="number" id="inputnumber" aria-describedby="inputsqft"
            name="cost"></x-atoms.a-inputmanage>
    </div>
    <div class="col-md-4">
        <x-atoms.a-label for="Deskripsi">Bed</x-atoms.a-label>
        <x-atoms.a-inputmanage type="number" id="inputnumber" aria-describedby="inputsqft"
            name="cost"></x-atoms.a-inputmanage>
    </div>
    <div class="col-md-4">
        <x-atoms.a-label for="Deskripsi">Bath</x-atoms.a-label>
        <x-atoms.a-inputmanage type="number" id="inputnumber" aria-describedby="inputsqft"
            name="cost"></x-atoms.a-inputmanage>
    </div>
    <div class="col-md-4">
        <x-atoms.a-label for="Deskripsi">Floor</x-atoms.a-label>
        <x-atoms.a-inputmanage type="number" id="inputnumber" aria-describedby="inputsqft"
            name="cost"></x-atoms.a-inputmanage>
    </div>
</div>
<br>

<x-atoms.a-button class="btn-submit" style="background-color:#021622; width: 100%">Submit</x-atoms.a-button>