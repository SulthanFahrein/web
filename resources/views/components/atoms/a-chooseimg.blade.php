<input {{$attributes->merge(['class' => 'form-control border border-black','type' => 'file','style' => 'padding:0;height: 30px;','id' => 'formFile','name' => 'image','accept' => 'image/*','onchange' => 'showFileName()'])}}></input>
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