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
                <input id="first" class="form-control" type="text" name="first">
            </div>
            <div class="form-group col-md-6 ">
                <label for="second">Second Name</label>
                <input id="second" class="form-control" type="text" name="second">
            </div>

        </div>
        <input type="hidden" name="tour" value="{{ $tour ?? '' }}">

        <div class="form-group">
            <label for="phone">Phone</label>
            <input id="phone" class="form-control" type="number" name="phone">
        </div>
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="adult">No Adult</label>
                <input id="adult" class="form-control" type="number" name="adult">
            </div>
            <div class="form-group col-md-6 ">
                <label for="child">No Childrens</label>
                <input id="child" class="form-control" type="number" name="child">
            </div>

        </div>

        <div class="form-group">
            <label for="description">Additional Informaton</label>
            <textarea id="description" class="form-control" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>
