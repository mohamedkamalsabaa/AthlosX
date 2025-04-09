@extends('dashboard.user.layouts.app')

@section('user_title', 'الفرق - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">الفرق</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <a href="{{ route('user.teams.create') }}" class="btn btn-primary mb-3">إضافة فريق جديد</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>اسم الفريق</th>
                                                <th>النادي</th>
                                                <th>المدرب</th>
                                                <th>عدد اللاعبين</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($teams as $team)
                                                <tr>
                                                    <td>{{ $team->name }}</td>
                                                    <td>{{ $team->club->name }}</td>
                                                    <td>{{ $team->coach }}</td>
                                                    <td>{{ $team->player_count }}</td>
                                                    <td>
                                                        <a href="{{ route('user.teams.show', $team) }}" class="btn btn-sm btn-info">عرض</a>
                                                        <a href="{{ route('user.teams.edit', $team) }}" class="btn btn-sm btn-warning">تعديل</a>
                                                        <form action="{{ route('user.teams.destroy', $team) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">لا توجد فرق حاليًا</td>
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