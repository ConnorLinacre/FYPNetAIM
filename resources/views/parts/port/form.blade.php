<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="port_number-input">Port Number</label>
        <input name="port_number" value="{{ $number ?? "" }}" class="form-control" id="port_number-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="access_point-input">Access Point</label>
        <input name="access_point" value="{{ $access_point ?? "" }}" class="form-control" id="access-point-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="installed_by-input">Installed By</label>
        <input name="installed_by" value="{{ $installed_by ?? "" }}" class="form-control" id="installed_by-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="installed_on-input">Installed On</label>
        <input type="date" name="installed_on" value="{{ $installed_on ?? "" }}" class="form-control" id="installed_on-input">
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-dark" style="margin-top: 10px">Submit</button>
    </div>
</form>
