
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger  form-feedback" >

        <strong>Whoops! Something went wrong!</strong>

        <br><br>

        <ul>
        <div class="form-feedback"></div>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif