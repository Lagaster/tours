<div>

    <ol>

        @if ($errors)
            @foreach ($errors as $error)
                <li> {{ $error }} </li>

            @endforeach
        @endif
    </ol>

    <form action="{{ route('book-package') }}" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="first">First Name</label>
                <input id="first" class="form-control" type="text" value="{{ old('first') }}" name="first">
                @error('first')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="second">Second Name</label>
                <input id="second" class="form-control" type="text" value="{{ old('second') }}" name="second">
                @error('second')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>

        </div>
        <input type="hidden" name="tour" value="{{ $tour ?? '' }}">

        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" class="form-control" value="{{ old('phone') }}" type="number" name="phone">
            @error('phone')
                <span class="text text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="adult">No Adult</label>
                <input id="adult" class="form-control" value="{{ old('adult') }}" type="number" name="adult">
                @error('adult')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="child">No Childrens</label>
                <input id="child" class="form-control" type="number" name="child">
                @error('child')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="startDate">Start Date</label>
                <input id="startDate" value="{{ old('startDate') }}"
                    class="form-control  @error('startDate')  bg-danger   @enderror" type="date" name="startDate">
                @error('startDate')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="endDate">End Date</label>
                <input id="endDate" class="form-control" type="date" value="{{ old('endDate') }}" name="endDate">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Additional Informaton</label>
            <textarea id="description" class="form-control" name="description"
                rows="3">{{ old('description') }}</textarea>
            @error('description')
                <span class="text text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
