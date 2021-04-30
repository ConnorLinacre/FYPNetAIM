<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="name-input">Switch Name</label>
        <input name="name" value="{{ $name ?? "" }}" class="form-control" id="name-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="floor-input">Switch Floor</label>
        <input name="floor" value="{{ $floor ?? "" }}" class="form-control" id="floor-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="model-input">Switch Model</label>
        <input name="model" value="{{ $model ?? "" }}" class="form-control" id="model-input">
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
