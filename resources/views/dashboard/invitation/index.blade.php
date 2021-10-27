@extends('dashboard.layouts.main')

@section('container')
    <h2>Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                <th scope="col">Active</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($invitations as $invitation)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $invitation->slug }}</td>
                        <td>{{ $invitation->user->email }}</td>
                        <td>
                            <a href="/invitation/{{ $invitation->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                            <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <form action="/invitation/{{ $invitation->slug }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Are you sure')" class="badge bg-danger border-0"><span data-feather="x-circle"></span></button>
                            </form>
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <form action="/invitation/update_is_active" method="POST">
                                @csrf
                                    <input type="hidden" name="id" value="{{ $invitation->id }}">
                                    @if ($invitation->is_active)
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        <input type="hidden" name="is_active" value="{{ $invitation->is_active ? '0' : '1' }}">
                                    @else
                                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                                        <input type="hidden" name="is_active" value="{{ $invitation->is_active ? '0' : '1' }}">
                                    @endif
                                </form>
                                {{-- <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection