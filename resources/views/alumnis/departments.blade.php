@foreach ($departments as $department)
    <option value="{{ $department->id }}">{{ ucwords(strtolower($department->name)) }}</option>
@endforeach
