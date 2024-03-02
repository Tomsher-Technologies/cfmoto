@extends('layouts.admin.app', ['body_class' => '', 'title' => 'Users Joined Course'])
@section('content')
<?php
use App\Models\User;
use App\Models\Course;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Users Joined Course</h1>
                
                <div class="separator mb-5"></div>
            </div>
        </div>

        <div class="rpw">
            <div class="col-12">
                <x-status />
                <x-errors />
            </div>
        </div>

        <div class="row">
          
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No:</th>
                                        <th scope="col">User</th>
                                        <th scope="col">Course</th>
                                        <th scope="col">Payment Status</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($contact[0]))
                                        @foreach ($contact as $key=>$con)
                                        <?php
                                            $user = User::find($con->user_id)->name;
                                            $course = Course::find($con->course_id)->title;
                                            $pay = $con->payment_status;
                                            if($pay == 1){
                                                $paid = "Paid";
                                            }else{
                                                $paid = "Not Paid";
                                            }
                                        ?>
                                            <tr>
                                                <td scope="row">{{ $key + 1 + ($contact->currentPage() - 1) * $contact->perPage() }}</td>
                                                <td>{{ $user }}</td>
                                                <td>{{ $course }}</td>
                                                <td>{{ $paid }}</td>
                                                <td>{{ date('d M,Y', strtotime($con->created_at)) }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" class="text-center">No data found </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="pagination">
                                {{ $contact->appends(request()->input())->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
         
        </div>
    </div>
@endsection

@push('header')
@endpush

@push('footer')
<script type="text/javascript">

   
</script>
@endpush
