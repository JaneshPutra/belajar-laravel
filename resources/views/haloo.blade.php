
{{-- add lawas --}}
<div class="mt-5 bg-red-500">
    <form action="student" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                autofocus>

            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>Gender
                <option value="">-Select One-</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nis">Nis</label>
            <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror"
                autofocus>
            @error('nis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asal">Asal Kota</label>
            <input type="text" name="asal" id="asal" class="form-control @error('asal') is-invalid @enderror"
                autofocus>
            @error('asal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_hp">No Handphone</label>
            <input type="number" name="no_hp" id="no_hp"
                class="form-control @error('no_hp') is-invalid @enderror" autofocus>
            @error('no_hp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="photo">Photo</label>
            <input type="file" id="photo" name="photo" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
    </form>
</div>
{{-- end add lawas --}}


{{-- edit lawas --}}
<div class="mt-5 col-8 m-auto">
    <form action="/student/{{$student->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{$student->name}}"
            class="form-control @error('name') is-invalid @enderror" autofocus>
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control">Gender
                <option value="{{$student->gender}}">{{$student->gender}}</option>
                @if ($student->gender == 'L')
                    <option value="P">P</option>
                @else
                    <option value="L">L</option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="nis">Nis</label>
            <input type="number" name="nis" id="nis" value="{{$student->nis}}"
            class="form-control @error('nis') is-invalid @enderror" autofocus>
            @error('nis')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="asal">Asal Kota</label>
            <input type="text" name="asal" id="asal" value="{{$student->asal}}"
            class="form-control @error('asal') is-invalid @enderror" autofocus>
            @error('asal')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_hp">No. Handphone</label>
            <input type="number" name="no_hp" id="no_hp" value="{{$student->no_hp}}"
            class="form-control @error('no_hp') is-invalid @enderror" autofocus>
            @error('no_hp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="image">Photo</label>
            <input type="file" class="form-control" name="image" id="image" >

            <div class="pt-3">
                @if ($student->image !='' && file_exists(public_path() . '/storage/photo' . $student->image))
                    <img src="{{url('storage/photo' . $student->image)}}">
                @endif
            </div>
        </div>
        
        <div class="mb-3">
            <img src="{{ asset('storage/photo/' . $student->image)}}" width="200px">
        </div>
        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>
{{-- end edit lawas --}}