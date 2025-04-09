@extends('dashboard.user.layouts.app')

@section('user_title', 'البطولات - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">البطولات</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <a href="{{ route('user.tournaments.create') }}" class="btn btn-primary mb-3">إضافة بطولة جديدة</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>الاسم</th>
                                                <th>تاريخ البداية</th>
                                                <th>تاريخ النهاية</th>
                                                <th>النوع</th>
                                                <th>عدد الأندية</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($tournaments as $tournament)
                                                <tr>
                                                    <td>{{ $tournament->name }}</td>
                                                    <td>{{ $tournament->start_date }}</td>
                                                    <td>{{ $tournament->end_date }}</td>
                                                    <td>{{ $tournament->type }}</td>
                                                    <td>{{ $tournament->clubs->count() }}</td>
                                                    <td>
                                                        <a href="{{ route('user.tournaments.show', $tournament) }}" class="btn btn-sm btn-info">عرض</a>
                                                        <a href="{{ route('user.tournaments.edit', $tournament) }}" class="btn btn-sm btn-warning">تعديل</a>
                                                        <form action="{{ route('user.tournaments.destroy', $tournament) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">لا توجد بطولات حاليًا</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection