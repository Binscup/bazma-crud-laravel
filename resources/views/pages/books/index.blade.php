@section('pageTitle', 'Semua buku')
@extends('app.app')
@section('content')
    <div class="container-xl">
        <div class="row row-cards">
            <div class="row g-2 align-items-center">
@@ -11,7 +12,7 @@
                </div>
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{route("perpus.categories.create")}}" class="btn btn-primary">Create New</a>
                        <a href="{{ route('perpus.categories.create') }}" class="btn btn-primary">Create New</a>
                    </div>
                </div>
            </div>
@@ -27,16 +28,25 @@
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paweł Kuna</td>
                                    <td class="text-muted">
                                        UI Designer, Training
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="#" class="btn">Ubah</a>
                                        <a href="#" class="btn">Hapus</a>
                                    </td>
                                </tr>
                                @foreach ($allCategories as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td class="text-muted">
                                            {{ $item->name }}
                                        </td>
                                        <td class="d-flex gap-1">
                                            <a href="{{ url('perpus/categories/' . $item->name . '/edit') }}"
                                                class="btn">Ubah</a>
                                            <form class="d-inline" onsubmit="return confirm('sure to delete this data?')"
                                                action="{{ url('perpus/categories/' . $item->id . '/delete') }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
@endsection
