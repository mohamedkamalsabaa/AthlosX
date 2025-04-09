@extends('dashboard.user.layouts.app')

@section('user_title', 'المباريات - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">المباريات</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <a href="{{ route('user.matches.create') }}" class="btn btn-primary mb-3">إضافة مباراة جديدة</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>الفريق الأول</th>
                                                <th>الفريق الثاني</th>
                                                <th>التاريخ والوقت</th>
                                                <th>النتيجة</th>
                                                <th>المكان</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($matches as $match)
                                                <tr>
                                                    <td>{{ $match->team1->name }}</td>
                                                    <td>{{ $match->team2->name }}</td>
                                                    <td>{{ $match->match_datetime }}</td>
                                                    <td>{{ $match->result ?? 'غير محددة' }}</td>
                                                    <td>{{ $match->venue }}</td>
                                                    <td>
                                                        <a href="{{ route('user.matches.show', $match) }}" class="btn btn-sm btn-info">عرض</a>
                                                        <a href="{{ route('user.matches.edit', $match) }}" class="btn btn-sm btn-warning">تعديل</a>
                                                        <form action="{{ route('user.matches.destroy', $match) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">لا توجد مباريات حاليًا</td>
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