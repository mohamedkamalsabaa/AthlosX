@extends('dashboard.user.layouts.app')

@section('user_title', 'اللاعبون - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">اللاعبون</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <a href="{{ route('user.players.create') }}" class="btn btn-primary mb-3">إضافة لاعب جديد</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>الاسم الكامل</th>
                                                <th>الفريق</th>
                                                <th>الرقم</th>
                                                <th>المركز</th>
                                                <th>الحالة</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($players as $player)
                                                <tr>
                                                    <td>{{ $player->full_name }}</td>
                                                    <td>{{ $player->team->name }}</td>
                                                    <td>{{ $player->number ?? 'غير محدد' }}</td>
                                                    <td>{{ $player->position }}</td>
                                                    <td>{{ $player->status }}</td>
                                                    <td>
                                                        <a href="{{ route('user.players.show', $player) }}" class="btn btn-sm btn-info">عرض</a>
                                                        <a href="{{ route('user.players.edit', $player) }}" class="btn btn-sm btn-warning">تعديل</a>
                                                        <form action="{{ route('user.players.destroy', $player) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">لا توجد لاعبين حاليًا</td>
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