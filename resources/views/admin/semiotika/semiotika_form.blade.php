<x-app-layout>
    @section('content')
    <x-card header='Semiotika'>

        <x-form action="{{route('semiotika.store')}}" method="POST">
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <div class="form-group">
                <label class="form-label"></label>
                <input type="number" class="form-control" placeholder="Username" required>
                <div class="clearfix"></div>
            </div>
            <x-button type="submit">submit</x-button>
        </x-form>
    </x-card>
    @endsection
</x-app-layout>
