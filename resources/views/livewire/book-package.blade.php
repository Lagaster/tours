<div>

    <div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    {{ session('success') }}
                </strong>
            </div>
        @endif
    </div>

    <form wire:submit.prevent="sendEmail" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="first">First Name</label>
                <input wire:model="first" id="first" class="form-control @error('first')  border-danger   @enderror"
                    type="text" value="{{ old('first') }}" name="first">
                @error('first')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="second">Second Name</label>
                <input wire:model="second" id="second" class="form-control @error('second')  border-danger   @enderror"
                    type="text" value="{{ old('second') }}" name="second">
                @error('second')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>

        </div>
        <input type="hidden" name="tour" value="{{ $tour ?? '' }}">
        <div class="row" >
            <div class="form-group col-md-6 ">
                <label for="phone">Phone</label>
                <input wire:model="phone" id="phone" placeholder="Email" class="form-control @error('phone')  border-danger   @enderror"
                    value="{{ old('number') }}" type="number" name="phone">
                @error('phone')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="email">Email</label>
                <input wire:model="email" id="email" class="form-control @error('email')  border-danger   @enderror"
                    value="{{ old('email') }}" type="email" name="email">
                @error('email')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>

        </div>


        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="adult">No Adult</label>
                <input wire:model="adult" id="adult" class="form-control @error('adult')  border-danger   @enderror"
                    value="{{ old('adult') }}" type="number" name="adult">
                @error('adult')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="child">No Childrens</label>
                <input id="child" wire:model="child" class="form-control @error('child')  border-danger   @enderror "
                    type="number" name="child">
                @error('child')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-6 ">
                <label for="startDate">Start Date</label>
                <input id="startDate" wire:model="startDate" value="{{ old('startDate') }}"
                    class="form-control   @error('startDate')  border-danger   @enderror" type="date" name="startDate">
                @error('startDate')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
            <div class="form-group col-md-6 ">
                <label for="endDate">End Date</label>
                <input id="endDate" wire:model="endDate"
                    class="form-control @error('endDate')  border-danger   @enderror" type="date"
                    value="{{ old('endDate') }}" name="endDate">
                @error('endDate')
                    <span class="text text-danger"> {{ $message }} </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Additional Informaton</label>
            <textarea id="description" class="form-control @error('description')  border-danger   @enderror"
                wire:model="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <span class="text text-danger"> {{ $message }} </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Book Now</button>
        <div wire:loading wire:target="sendEmail" class="text text-info">
            Sending...
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>
                    {{ session('success') }}
                </strong>
            </div>
        @endif
    </form>
</div>
