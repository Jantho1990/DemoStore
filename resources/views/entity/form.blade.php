<form action="{{ route('entity.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="field">
        <label for="entityName">Name:</label>
        <div class="control">
            <input name="entityName" type="text" placeholder="Entity Name">
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-primary">Submit</button>
        </div>
        <div class="control">
            <button class="button is-link">Cancel</button>
        </div>
    </div>

</form>