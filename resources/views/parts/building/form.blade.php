<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="name-input">Building Name</label>
        <input name="name" value="{{ $name ?? "" }}" class="form-control" id="name-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="address-input">Building Address</label>
        <input name="address" value="{{ $address ?? "" }}" class="form-control" id="address-input">
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
