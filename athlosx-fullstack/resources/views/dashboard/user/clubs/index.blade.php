@extends('dashboard.user.layouts.app')

@section('user_title', 'الأندية - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">الأندية</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <a href="{{ route('user.clubs.create') }}" class="btn btn-primary mb-3">إضافة نادٍ جديد</a>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>الشعار</th>
                                                <th>الاسم</th>
                                                <th>تاريخ التأسيس</th>
                                                <th>المدينة</th>
                                                <th>الدولة</th>
                                                <th>المدرب</th>
                                                <th>الإجراءات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($clubs as $club)
                                                <tr>
                                                    <td>
                                                        <img src="{{ $club->logo ? asset('public/storage/' . $club->logo) : asset('images/default-club.png') }}" 
                                                             alt="{{ $club->name }}" 
                                                             style="width: 50px; height: 60px;" 
                                                             >
                                                    </td>
                                                    <td>{{ $club->name }}</td>
                                                    <td>{{ $club->founded_date }}</td>
                                                    <td>{{ $club->city }}</td>
                                                    <td>{{ $club->country }}</td>
                                                    <td>{{ $club->current_coach }}</td>
                                                    <td>
                                                        <a href="{{ route('user.clubs.show', $club) }}" class="btn btn-sm btn-info">عرض</a>
                                                        <a href="{{ route('user.clubs.edit', $club) }}" class="btn btn-sm btn-warning">تعديل</a>
                                                        <form action="{{ route('user.clubs.destroy', $club) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">لا توجد أندية حاليًا</td>
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