<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        {{-- error --}}
        @if ($errors->any())
            <div class=" container text-center alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- success --}}

        @if (session('success'))
            <div class=" container text-center alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <main style="margin-top: 58px;">
            <div class="container border 2px p-4">
                <h1 class="pb-2">Create a new sector</h1>


                <form action="{{ route('sector.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputname" class="form-label">sector <span style="color: red;">*</span></label>
                        <input style="background-color: rgba(248, 235, 235, 0.726);" type="text" class="form-control"
                            name="sector" id="Name" aria-describedby="name">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                    <a class="btn btn-secondary" href="{{ route('sector.index') }}">Back</a>
                </form>

            </div>
        </main>
    </div>

    </div>

    <!--Main layout-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>