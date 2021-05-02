<form action="{{ $action }}" method="post">
    @csrf
    <div id="form-group">
        <label for="name-input">Company/Organisation/Individual Name: (Required)</label>
        <input name="name" value="{{ Auth::user()->name }}" class="form-control" id="name-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="email-input">Company/Personal Email: (Required)</label>
        <input name="email" value="{{ Auth::user()->email }}" class="form-control" id="email-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="old-password-input">Current Password: (Required)</label>
        <input name="old-password" type="password" class="form-control" id="old-password-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="new-password-input">New Password:</label>
        <input name="new-password" type="password" class="form-control" id="new-password-input">
    </div>
    <p></p>
    <div id="form-group">
        <label for="confirm-password-input">Confirm Password:</label>
        <input name="confirm-password" type="password" class="form-control" id="confirm-password-input">
    </div>
    <p></p>
    <div id="form-group">
        <button type="submit" class="btn btn-dark" style="margin-top: 10px">Submit</button>
    </div>
</form>
